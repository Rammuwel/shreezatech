import sharp from 'sharp';
import fs from 'node:fs';
import path from 'node:path';

const sleep = (ms) => new Promise((r) => setTimeout(r, ms));

const resize = (file, width) => ({ file, width });

const targets = [
  resize('public/logo.webp', 640),
  resize('public/images/shreeza-tech-global-network.webp', 640),
  resize('public/images/projects/shreeza-tech-edunova-edtech-project.webp', 760),
  resize('public/images/projects/shreeza-tech-ecommerce-platform-project.webp', 760),
  resize('public/images/projects/shreeza-tech-estatepro-real-estate-project.webp', 760),
  resize('public/images/projects/shreeza-tech-investo-fintech-project.webp', 760),
  resize('public/images/projects/shreeza-tech-medicare-healthcare-project.webp', 760),
  resize('public/images/projects/shreeza-tech-quickpay-payments-project.webp', 760),
  resize('public/images/projects/shreeza-tech-shophub-ecommerce-project.webp', 760),
  resize('public/images/projects/shreeza-tech-taskly-productivity-project.webp', 760),
  resize('public/images/projects/shreeza-tech-tosty-learning-platform-project.webp', 760),
  resize('public/images/projects/shreeza-tech-tosty-restaurant-project.webp', 760),
  resize('public/images/testimonials/shreeza-tech-testimonial-client-1.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-client-2.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-client-3.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-client-4.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-client-5.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-client-6.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-esther-howard.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-jacob-jones.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-kristin-watson.webp', 128),
  resize('public/images/testimonials/shreeza-tech-testimonial-savannah-nguyen.webp', 128),
];

async function writeWithRetry(file, buf) {
  for (let attempt = 1; attempt <= 5; attempt++) {
    try {
      fs.writeFileSync(file, buf);
      return;
    } catch (err) {
      if (attempt === 5) throw err;
      await sleep(2000);
    }
  }
}

for (const { file, width } of targets) {
  if (!fs.existsSync(file)) {
    console.log(`SKIP  ${file} (missing)`);
    continue;
  }
  const before = fs.statSync(file).size;
  const src = fs.readFileSync(file);
  const { width: oldWidth, height: oldHeight } = await sharp(src).metadata();
  if (oldWidth <= width) {
    console.log(`KEEP  ${path.basename(file)} (${oldWidth}x${oldHeight}) already small`);
    continue;
  }
  try {
    const buf = await sharp(src)
      .resize({ width, withoutEnlargement: true })
      .webp({ quality: 80, effort: 4 })
      .toBuffer();
    await writeWithRetry(file, buf);
    const after = fs.statSync(file).size;
    console.log(
      `OK    ${path.basename(file)} ${oldWidth}x${oldHeight} -> ${width}px wide, ${(before / 1024).toFixed(0)}KB -> ${(after / 1024).toFixed(0)}KB (saved ${((before - after) / 1024).toFixed(0)}KB)`,
    );
  } catch (err) {
    console.log(`FAIL  ${path.basename(file)} -> ${err.message}`);
  }
}
