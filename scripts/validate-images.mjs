import { readFileSync } from 'node:fs'
import sharp from 'sharp'

const files = [
  'public/images/projects/shreeza-tech-ecommerce-platform-project.webp',
  'public/images/projects/shreeza-tech-edunova-edtech-project.webp',
  'public/images/projects/shreeza-tech-estatepro-real-estate-project.webp',
  'public/images/projects/shreeza-tech-medicare-healthcare-project.webp',
  'public/images/projects/shreeza-tech-tosty-learning-platform-project.webp',
  'public/images/projects/shreeza-tech-tosty-restaurant-project.webp',
  'public/images/shreeza-tech-global-network.webp',
  'public/images/testimonials/shreeza-tech-testimonial-client-1.webp',
  'public/images/testimonials/shreeza-tech-testimonial-client-2.webp',
  'public/images/testimonials/shreeza-tech-testimonial-client-3.webp',
  'public/images/testimonials/shreeza-tech-testimonial-client-4.webp',
  'public/images/testimonials/shreeza-tech-testimonial-client-5.webp',
  'public/images/testimonials/shreeza-tech-testimonial-client-6.webp',
  'public/images/testimonials/shreeza-tech-testimonial-esther-howard.webp',
  'public/images/testimonials/shreeza-tech-testimonial-jacob-jones.webp',
  'public/images/testimonials/shreeza-tech-testimonial-kristin-watson.webp',
  'public/images/testimonials/shreeza-tech-testimonial-savannah-nguyen.webp'
]

let failed = 0
for (const f of files) {
  try {
    const buf = readFileSync(f)
    const meta = await sharp(buf).metadata()
    console.log(`OK   ${meta.format} ${meta.width}x${meta.height} (${buf.length} bytes) ${f}`)
  } catch (err) {
    failed++
    console.log(`FAIL ${f}: ${err.message}`)
  }
}
console.log(`\n${files.length - failed}/${files.length} images valid`)
process.exit(failed ? 1 : 0)
