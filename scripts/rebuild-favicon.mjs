import sharp from 'sharp'
import { readFileSync, writeFileSync, statSync } from 'node:fs'

const src = await sharp(readFileSync('public/favicon-192x192.png')).toBuffer()

const sizes = [16, 32, 48, 64]
const pngs = []
for (const size of sizes) {
  pngs.push(await sharp(src).resize(size, size, { fit: 'cover' }).png().toBuffer())
}

const header = Buffer.alloc(6)
header.writeUInt16LE(0, 0)
header.writeUInt16LE(1, 2)
header.writeUInt16LE(pngs.length, 4)

const entries = Buffer.alloc(16 * pngs.length)
let offset = 6 + entries.length
for (let i = 0; i < pngs.length; i++) {
  const e = 16 * i
  const s = sizes[i]
  entries.writeUInt8(s === 256 ? 0 : s, e)
  entries.writeUInt8(s === 256 ? 0 : s, e + 1)
  entries.writeUInt16LE(1, e + 4)
  entries.writeUInt16LE(32, e + 6)
  entries.writeUInt32LE(pngs[i].length, e + 8)
  entries.writeUInt32LE(offset, e + 12)
  offset += pngs[i].length
}

writeFileSync('public/favicon.ico', Buffer.concat([header, entries, ...pngs]))
console.log('favicon.ico rebuilt:', statSync('public/favicon.ico').size, 'bytes')
