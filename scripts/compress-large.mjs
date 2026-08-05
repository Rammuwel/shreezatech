import sharp from 'sharp';
import fs from 'node:fs';

const targets = [
  'public/images/shreeza-tech-global-network.webp',
  'public/images/about/shreeza-tech-about-hero.webp',
  'public/images/team/shreeza-tech-team-loken.webp',
  'public/images/team/shreeza-tech-team-ananya.webp',
  'public/images/team/shreeza-tech-team-priya.webp',
  'public/images/team/shreeza-tech-team-ram.webp',
  'public/images/technology/shreeza-tech-technology-hero.webp',
  'public/images/solutions/shreeza-tech-solutions-hero.webp',
  'public/images/services/shreeza-tech-services-hero.webp',
  'public/images/projects/shreeza-tech-estatepro-real-estate-project.webp',
  'public/images/projects/shreeza-tech-portfolio-hero.webp',
];

const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

async function compressFile(file) {
  const before = fs.statSync(file).size;
  for (let attempt = 1; attempt <= 40; attempt++) {
    try {
      const src = fs.readFileSync(file);
      const buf = await sharp(src).webp({ quality: 74, effort: 6 }).toBuffer();
      fs.writeFileSync(file, buf);
      return `OK   ${file.split(/[\\/]/).pop()} ${(before / 1024).toFixed(0)}KB -> ${(buf.length / 1024).toFixed(0)}KB`;
    } catch (err) {
      if (attempt === 40) return `FAIL ${file} -> ${err.message}`;
      await sleep(10000);
    }
  }
}

let beforeTotal = 0;
let afterTotal = 0;

for (const file of targets) {
  const before = fs.statSync(file).size;
  beforeTotal += before;
  const result = await compressFile(file);
  console.log(result);
  const after = fs.statSync(file).size;
  afterTotal += after;
}

console.log(
  `Total: ${(beforeTotal / 1024).toFixed(0)}KB -> ${(afterTotal / 1024).toFixed(0)}KB (saved ${((beforeTotal - afterTotal) / 1024).toFixed(0)}KB)`,
);
