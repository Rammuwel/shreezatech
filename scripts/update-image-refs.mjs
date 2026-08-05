import fs from 'node:fs';
import path from 'node:path';

const replacements = [
  ['images/services/banner.png', 'images/services/shreeza-tech-services-hero.webp'],
  ['images/solutions/banner.png', 'images/solutions/shreeza-tech-solutions-hero.webp'],
  ['images/technology/banner.png', 'images/technology/shreeza-tech-technology-hero.webp'],
  ['images/projects/banner.png', 'images/projects/shreeza-tech-portfolio-hero.webp'],
  ['images/about/banner.png', 'images/about/shreeza-tech-about-hero.webp'],
  ['images/global.png', 'images/shreeza-tech-global-network.webp'],

  ['images/team/ram.png', 'images/team/shreeza-tech-team-ram.webp'],
  ['images/team/loken2.png', 'images/team/shreeza-tech-team-loken.webp'],
  ['images/team/ananya.png', 'images/team/shreeza-tech-team-ananya.webp'],
  ['images/team/priya.png', 'images/team/shreeza-tech-team-priya.webp'],

  ['images/solutions/healthcare.png', 'images/solutions/shreeza-tech-healthcare-software-solution.webp'],
  ['images/solutions/finance.png', 'images/solutions/shreeza-tech-finance-software-solution.webp'],
  ['images/solutions/education.png', 'images/solutions/shreeza-tech-education-software-solution.webp'],
  ['images/solutions/realstate.png', 'images/solutions/shreeza-tech-real-estate-software-solution.webp'],
  ['images/solutions/manufacturing.png', 'images/solutions/shreeza-tech-manufacturing-software-solution.webp'],
  ['images/solutions/retail.png', 'images/solutions/shreeza-tech-retail-software-solution.webp'],
  ['images/solutions/logistic.png', 'images/solutions/shreeza-tech-logistics-software-solution.webp'],
  ['images/solutions/hotal.png', 'images/solutions/shreeza-tech-hospitality-software-solution.webp'],
  ['images/solutions/travel.png', 'images/solutions/shreeza-tech-travel-tourism-software-solution.webp'],
  ['images/solutions/goverment.png', 'images/solutions/shreeza-tech-government-software-solution.webp'],

  ['images/projects/project3.jpg', 'images/projects/shreeza-tech-investo-fintech-project.webp'],
  ['images/projects/project7.jpg', 'images/projects/shreeza-tech-medicare-healthcare-project.webp'],
  ['images/projects/project8.jpg', 'images/projects/shreeza-tech-shophub-ecommerce-project.webp'],
  ['images/projects/project5.jpg', 'images/projects/shreeza-tech-quickpay-payments-project.webp'],
  ['images/projects/project6.jpg', 'images/projects/shreeza-tech-taskly-productivity-project.webp'],
  ['images/projects/project9.png', 'images/projects/shreeza-tech-edunova-edtech-project.webp'],
  ['images/projects/resto.png', 'images/projects/shreeza-tech-tosty-restaurant-project.webp'],
  ['images/projects/property.png', 'images/projects/shreeza-tech-estatepro-real-estate-project.webp'],
  ['images/projects/eccom.png', 'images/projects/shreeza-tech-ecommerce-platform-project.webp'],
  ['images/projects/project10.png', 'images/projects/shreeza-tech-tosty-learning-platform-project.webp'],

  ['images/testimonials/client1.jpeg', 'images/testimonials/shreeza-tech-testimonial-client-1.webp'],
  ['images/testimonials/client2.jpg', 'images/testimonials/shreeza-tech-testimonial-client-2.webp'],
  ['images/testimonials/client3.jpeg', 'images/testimonials/shreeza-tech-testimonial-client-3.webp'],
  ['images/testimonials/client4.png', 'images/testimonials/shreeza-tech-testimonial-client-4.webp'],
  ['images/testimonials/client5.jpg', 'images/testimonials/shreeza-tech-testimonial-client-5.webp'],
  ['images/testimonials/client6.jpg', 'images/testimonials/shreeza-tech-testimonial-client-6.webp'],
  ['images/testimonials/savannah.png', 'images/testimonials/shreeza-tech-testimonial-savannah-nguyen.webp'],
  ['images/testimonials/jacod.png', 'images/testimonials/shreeza-tech-testimonial-jacob-jones.webp'],
  ['images/testimonials/huny.png', 'images/testimonials/shreeza-tech-testimonial-kristin-watson.webp'],
  ['images/testimonials/esthe.png', 'images/testimonials/shreeza-tech-testimonial-esther-howard.webp'],

  ['images/blog/ai.png', 'images/blog/shreeza-tech-blog-future-of-ai-in-business.webp'],
  ['images/blog/cloud.jpg', 'images/blog/shreeza-tech-blog-cloud-computing-business.webp'],
  ['images/blog/uiux.jpg', 'images/blog/shreeza-tech-blog-ui-ux-design-trends.webp'],
  ['images/blog/digital.jpg', 'images/blog/shreeza-tech-blog-digital-transformation.webp'],
  ['images/blog/programming.jpg', 'images/blog/shreeza-tech-blog-programming-languages.webp'],
  ['images/blog/security.jpg', 'images/blog/shreeza-tech-blog-cybersecurity-best-practices.webp'],
  ['images/blog/laravel.jpg', 'images/blog/shreeza-tech-blog-laravel-web-applications.webp'],
  ['images/blog/mobile.jpg', 'images/blog/shreeza-tech-blog-mobile-app-development.webp'],
  ['images/blog/devops.jpg', 'images/blog/shreeza-tech-blog-devops-best-practices.webp'],

  ['images/career/team.jpg', 'images/career/shreeza-tech-careers-team-collaboration.webp'],
  ['images/career/workspace.jpg', 'images/career/shreeza-tech-careers-modern-workspace.webp'],
  ['images/career/events.jpg', 'images/career/shreeza-tech-careers-team-events.webp'],
  ['images/career/hackathon.jpg', 'images/career/shreeza-tech-careers-innovation-days.webp'],
  ['images/career/learning.jpg', 'images/career/shreeza-tech-careers-learning-sessions.webp'],
  ['images/career/fun.jpg', 'images/career/shreeza-tech-careers-fun-fridays.webp'],
];

const dirs = [
  'resources/views',
  'app/Data',
  'app/View/Components',
];

const files = [];
function walk(p) {
  for (const e of fs.readdirSync(p, { withFileTypes: true })) {
    const full = path.join(p, e.name);
    if (e.isDirectory()) walk(full);
    else if (/\.(blade\.php|php)$/.test(e.name)) files.push(full);
  }
}
for (const d of dirs) {
  if (fs.existsSync(d)) walk(d);
}

let changedFiles = 0;
for (const file of files) {
  let content = fs.readFileSync(file, 'utf8');
  const before = content;

  for (const [oldRef, newRef] of replacements) {
    content = content.split(oldRef).join(newRef);
  }

  const resolved = path.resolve(file);
  if (resolved !== path.resolve('resources/views/components/seo/meta.blade.php')) {
    content = content.split("asset('logo.png')").join("asset('logo.webp')");
    content = content.split("asset('/logo.png')").join("asset('/logo.webp')");
  }

  if (content !== before) {
    fs.writeFileSync(file, content);
    changedFiles++;
    console.log(`UPDATED ${file.replace(process.cwd() + path.sep, '')}`);
  }
}

console.log(`\n${changedFiles} files updated`);
