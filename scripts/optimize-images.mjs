import sharp from 'sharp';
import fs from 'node:fs';
import path from 'node:path';

const convert = [
  { old: 'public/logo.png', new: 'public/logo.webp' },

  { old: 'public/images/services/banner.png', new: 'public/images/services/shreeza-tech-services-hero.webp' },
  { old: 'public/images/solutions/banner.png', new: 'public/images/solutions/shreeza-tech-solutions-hero.webp' },
  { old: 'public/images/technology/banner.png', new: 'public/images/technology/shreeza-tech-technology-hero.webp' },
  { old: 'public/images/projects/banner.png', new: 'public/images/projects/shreeza-tech-portfolio-hero.webp' },
  { old: 'public/images/about/banner.png', new: 'public/images/about/shreeza-tech-about-hero.webp' },
  { old: 'public/images/global.png', new: 'public/images/shreeza-tech-global-network.webp' },

  { old: 'public/images/team/ram.png', new: 'public/images/team/shreeza-tech-team-ram.webp' },
  { old: 'public/images/team/loken2.png', new: 'public/images/team/shreeza-tech-team-loken.webp' },
  { old: 'public/images/team/ananya.png', new: 'public/images/team/shreeza-tech-team-ananya.webp' },
  { old: 'public/images/team/priya.png', new: 'public/images/team/shreeza-tech-team-priya.webp' },

  { old: 'public/images/solutions/healthcare.png', new: 'public/images/solutions/shreeza-tech-healthcare-software-solution.webp' },
  { old: 'public/images/solutions/finance.png', new: 'public/images/solutions/shreeza-tech-finance-software-solution.webp' },
  { old: 'public/images/solutions/education.png', new: 'public/images/solutions/shreeza-tech-education-software-solution.webp' },
  { old: 'public/images/solutions/realstate.png', new: 'public/images/solutions/shreeza-tech-real-estate-software-solution.webp' },
  { old: 'public/images/solutions/manufacturing.png', new: 'public/images/solutions/shreeza-tech-manufacturing-software-solution.webp' },
  { old: 'public/images/solutions/retail.png', new: 'public/images/solutions/shreeza-tech-retail-software-solution.webp' },
  { old: 'public/images/solutions/logistic.png', new: 'public/images/solutions/shreeza-tech-logistics-software-solution.webp' },
  { old: 'public/images/solutions/hotal.png', new: 'public/images/solutions/shreeza-tech-hospitality-software-solution.webp' },
  { old: 'public/images/solutions/travel.png', new: 'public/images/solutions/shreeza-tech-travel-tourism-software-solution.webp' },
  { old: 'public/images/solutions/goverment.png', new: 'public/images/solutions/shreeza-tech-government-software-solution.webp' },

  { old: 'public/images/projects/project3.jpg', new: 'public/images/projects/shreeza-tech-investo-fintech-project.webp' },
  { old: 'public/images/projects/project7.jpg', new: 'public/images/projects/shreeza-tech-medicare-healthcare-project.webp' },
  { old: 'public/images/projects/project8.jpg', new: 'public/images/projects/shreeza-tech-shophub-ecommerce-project.webp' },
  { old: 'public/images/projects/project5.jpg', new: 'public/images/projects/shreeza-tech-quickpay-payments-project.webp' },
  { old: 'public/images/projects/project6.jpg', new: 'public/images/projects/shreeza-tech-taskly-productivity-project.webp' },
  { old: 'public/images/projects/project9.png', new: 'public/images/projects/shreeza-tech-edunova-edtech-project.webp' },
  { old: 'public/images/projects/resto.png', new: 'public/images/projects/shreeza-tech-tosty-restaurant-project.webp' },
  { old: 'public/images/projects/property.png', new: 'public/images/projects/shreeza-tech-estatepro-real-estate-project.webp' },
  { old: 'public/images/projects/eccom.png', new: 'public/images/projects/shreeza-tech-ecommerce-platform-project.webp' },

  { old: 'public/images/testimonials/client1.jpeg', new: 'public/images/testimonials/shreeza-tech-testimonial-client-1.webp' },
  { old: 'public/images/testimonials/client2.jpg', new: 'public/images/testimonials/shreeza-tech-testimonial-client-2.webp' },
  { old: 'public/images/testimonials/client3.jpeg', new: 'public/images/testimonials/shreeza-tech-testimonial-client-3.webp' },
  { old: 'public/images/testimonials/client4.png', new: 'public/images/testimonials/shreeza-tech-testimonial-client-4.webp' },
  { old: 'public/images/testimonials/client5.jpg', new: 'public/images/testimonials/shreeza-tech-testimonial-client-5.webp' },
  { old: 'public/images/testimonials/client6.jpg', new: 'public/images/testimonials/shreeza-tech-testimonial-client-6.webp' },
  { old: 'public/images/testimonials/savannah.png', new: 'public/images/testimonials/shreeza-tech-testimonial-savannah-nguyen.webp' },
  { old: 'public/images/testimonials/jacod.png', new: 'public/images/testimonials/shreeza-tech-testimonial-jacob-jones.webp' },
  { old: 'public/images/testimonials/huny.png', new: 'public/images/testimonials/shreeza-tech-testimonial-kristin-watson.webp' },
  { old: 'public/images/testimonials/esthe.png', new: 'public/images/testimonials/shreeza-tech-testimonial-esther-howard.webp' },

  { old: 'public/images/blog/ai.png', new: 'public/images/blog/shreeza-tech-blog-future-of-ai-in-business.webp' },
];

const placeholders = [
  { old: 'public/images/career/team.jpg', new: 'public/images/career/shreeza-tech-careers-team-collaboration.webp', label: 'Team Collaboration' },
  { old: 'public/images/career/workspace.jpg', new: 'public/images/career/shreeza-tech-careers-modern-workspace.webp', label: 'Modern Workspace' },
  { old: 'public/images/career/events.jpg', new: 'public/images/career/shreeza-tech-careers-team-events.webp', label: 'Team Events' },
  { old: 'public/images/career/hackathon.jpg', new: 'public/images/career/shreeza-tech-careers-innovation-days.webp', label: 'Innovation Days' },
  { old: 'public/images/career/learning.jpg', new: 'public/images/career/shreeza-tech-careers-learning-sessions.webp', label: 'Learning Sessions' },
  { old: 'public/images/career/fun.jpg', new: 'public/images/career/shreeza-tech-careers-fun-fridays.webp', label: 'Fun Fridays' },

  { old: 'public/images/blog/cloud.jpg', new: 'public/images/blog/shreeza-tech-blog-cloud-computing-business.webp', label: 'Cloud Computing' },
  { old: 'public/images/blog/uiux.jpg', new: 'public/images/blog/shreeza-tech-blog-ui-ux-design-trends.webp', label: 'UI/UX Design' },
  { old: 'public/images/blog/digital.jpg', new: 'public/images/blog/shreeza-tech-blog-digital-transformation.webp', label: 'Digital Transformation' },
  { old: 'public/images/blog/programming.jpg', new: 'public/images/blog/shreeza-tech-blog-programming-languages.webp', label: 'Programming Languages' },
  { old: 'public/images/blog/security.jpg', new: 'public/images/blog/shreeza-tech-blog-cybersecurity-best-practices.webp', label: 'Cybersecurity' },
  { old: 'public/images/blog/laravel.jpg', new: 'public/images/blog/shreeza-tech-blog-laravel-web-applications.webp', label: 'Laravel Development' },
  { old: 'public/images/blog/mobile.jpg', new: 'public/images/blog/shreeza-tech-blog-mobile-app-development.webp', label: 'Mobile App Development' },
  { old: 'public/images/blog/devops.jpg', new: 'public/images/blog/shreeza-tech-blog-devops-best-practices.webp', label: 'DevOps Practices' },
];

function placeholderSvg(label) {
  const esc = label.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  return `<svg xmlns="http://www.w3.org/2000/svg" width="800" height="600" viewBox="0 0 800 600">
  <defs>
    <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="#0b1033"/>
      <stop offset="55%" stop-color="#14205e"/>
      <stop offset="100%" stop-color="#0f4c81"/>
    </linearGradient>
  </defs>
  <rect width="800" height="600" fill="url(#bg)"/>
  <g opacity="0.08" stroke="#ffffff" stroke-width="1">
    ${Array.from({ length: 13 }, (_, i) => `<line x1="${(i + 1) * 60}" y1="0" x2="${(i + 1) * 60}" y2="600"/>`).join('')}
    ${Array.from({ length: 10 }, (_, i) => `<line x1="0" y1="${(i + 1) * 60}" x2="800" y2="${(i + 1) * 60}"/>`).join('')}
  </g>
  <circle cx="680" cy="90" r="150" fill="#ffffff" opacity="0.06"/>
  <circle cx="120" cy="520" r="180" fill="#ffffff" opacity="0.05"/>
  <text x="400" y="270" text-anchor="middle" font-family="Arial, sans-serif" font-size="34" font-weight="bold" fill="#ffffff">${esc}</text>
  <text x="400" y="330" text-anchor="middle" font-family="Arial, sans-serif" font-size="18" fill="#aab4d8">Shreeza Tech</text>
</svg>`;
}

function ensureDir(p) {
  fs.mkdirSync(path.dirname(p), { recursive: true });
}

async function run() {
  const results = [];

  for (const item of convert) {
    if (!fs.existsSync(item.old)) {
      results.push(`SKIP  ${item.old} (missing)`);
      continue;
    }
    try {
      ensureDir(item.new);
      await sharp(item.old, { animated: false })
        .webp({ quality: 80, effort: 4 })
        .toFile(item.new);
      if (item.old !== 'public/logo.png') {
        fs.rmSync(item.old, { force: true });
      }
      const kb = Math.round(fs.statSync(item.new).size / 1024);
      results.push(`OK    ${item.old} -> ${item.new} (${kb} KB)`);
    } catch (err) {
      results.push(`FAIL  ${item.old} -> ${err.message}`);
    }
  }

  for (const item of placeholders) {
    try {
      ensureDir(item.new);
      await sharp(Buffer.from(placeholderSvg(item.label)), { animated: false })
        .webp({ quality: 80 })
        .toFile(item.new);
      const kb = Math.round(fs.statSync(item.new).size / 1024);
      results.push(`PLACE ${item.new} (${kb} KB)`);
    } catch (err) {
      results.push(`FAIL  placeholder ${item.new} -> ${err.message}`);
    }
  }

  console.log(results.join('\n'));
}

run().catch((err) => {
  console.error(err);
  process.exit(1);
});
