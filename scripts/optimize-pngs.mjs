import sharp from 'sharp';
import fs from 'node:fs';

const jobs = [
  { src: 'public/logo.png', width: 512 },
  { src: 'public/og-image.png', width: 1200 },
  { src: 'public/apple-touch-icon.png', width: 180 },
  { src: 'public/favicon-192x192.png', width: 192 },
  { src: 'public/favicon-48x48.png', width: 48 },
  { src: 'public/favicon-32x32.png', width: 32 },
];

async function run() {
  for (const job of jobs) {
    if (!fs.existsSync(job.src)) {
      console.log(`SKIP  ${job.src} (missing)`);
      continue;
    }
    const before = fs.statSync(job.src).size;
    const tmp = job.src + '.tmp';
    try {
      await sharp(job.src, { animated: false })
        .resize({ width: job.width, withoutEnlargement: true })
        .png({ compressionLevel: 9, palette: true, effort: 10, adaptiveFiltering: true })
        .toFile(tmp);
      fs.renameSync(tmp, job.src);
      const after = fs.statSync(job.src).size;
      console.log(`OK    ${job.src} ${before}B -> ${after}B (${Math.round((after / before) * 100)}%)`);
    } catch (err) {
      console.log(`FAIL  ${job.src} -> ${err.message}`);
    }
  }
}

run().catch((err) => {
  console.error(err);
  process.exit(1);
});
