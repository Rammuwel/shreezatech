import { readdirSync, readFileSync, statSync } from 'node:fs'
import { join, basename } from 'node:path'
import { execSync } from 'node:child_process'

const gitFiles = execSync('git ls-files public/images public/*.webp', { encoding: 'utf8' })
  .trim().split('\n').filter(Boolean)

const collect = (dir) => {
  let out = []
  for (const e of readdirSync(dir)) {
    const p = join(dir, e)
    if (statSync(p).isDirectory()) out = out.concat(collect(p))
    else out.push(p)
  }
  return out
}
const dirs = ['app', 'routes', 'config', 'database', 'resources'].filter(d => {
  try { return statSync(d).isDirectory() } catch { return false }
})
const srcFiles = dirs.flatMap(collect)
const srcText = srcFiles
  .filter(f => /\.(blade\.php|js|css|php)$/.test(f))
  .map(f => readFileSync(f, 'utf8'))
  .join('\n')

let referenced = 0
for (const f of gitFiles) {
  const base = basename(f)
  if (srcText.includes(base)) {
    referenced++
  } else {
    console.log(`UNREFERENCED: ${f}`)
  }
}
console.log(`\n${referenced}/${gitFiles.length} images referenced in resources/`)
