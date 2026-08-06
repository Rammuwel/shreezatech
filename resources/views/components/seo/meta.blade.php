@props([
  'title' => null,
  'description' => null,
  'keywords' => null,
  'ogImage' => null,
  'ogType' => 'website',
  'phone' => null,
  'address' => null,
  'breadcrumbs' => null,
])

@php
$canonical = $canonical ?? url()->current();
$phone = $phone ?? config('app.phone', '+1-555-555-5555');
$address = $address ?? config('app.address', '');
$appUrl = config('app.url');
$pageTitle = $title ? (str_contains($title, config('app.name')) ? $title : $title.' | '.config('app.name')) : config('app.name');

$homeCrumb = ['name' => 'Home', 'url' => url('/')];

if (is_array($breadcrumbs) && count($breadcrumbs)) {
    $crumbs = $breadcrumbs;
} else {
    $segment = request()->segment(1);
    $sectionName = match ($segment) {
        'services' => 'Services',
        'solutions' => 'Solutions',
        'technologies' => 'Technologies',
        'portfolio' => 'Portfolio',
        'about' => 'About Us',
        'careers' => 'Careers',
        'blog' => 'Blog',
        'contact' => 'Contact',
        default => null,
    };
    $crumbs = $sectionName
        ? [$homeCrumb, ['name' => $sectionName, 'url' => url('/' . $segment)]]
        : [];
}

$schemas = [];

$schemas[] = [
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => 'Shreeza Tech',
  'alternateName' => ['Shreeza', 'Shreezatech'],
  'url' => $appUrl,
  'logo' => asset('logo.png'),
  'founder' => [
    '@type' => 'Person',
    'name' => 'Ram Muwel',
    'jobTitle' => 'Founder & CEO',
    'url' => $appUrl . '/about',
  ],
  'hasPart' => [
    $appUrl . '/services',
    $appUrl . '/solutions',
    $appUrl . '/contact',
    $appUrl . '/careers',
    $appUrl . '/about',
  ],
  'description' => $description ?? 'Tech Consulting & Software Solutions',
  'contactPoint' => [
    '@type' => 'ContactPoint',
    'telephone' => $phone,
    'contactType' => 'sales',
  ],
];

$schemas[] = [
  '@context' => 'https://schema.org',
  '@type' => 'Person',
  'name' => 'Ram Muwel',
  'jobTitle' => 'Founder & CEO',
  'description' => 'Ram Muwel is the founder and CEO of Shreeza Tech, a software development company building enterprise software, AI-powered platforms, cloud infrastructure, and digital products.',
  'url' => $appUrl . '/about',
  'image' => asset('images/team/shreeza-tech-team-ram.webp'),
  'worksFor' => [
    '@type' => 'Organization',
    'name' => 'Shreeza Tech',
    'url' => $appUrl,
  ],
];

if ($address) {
  $schemas[0]['location'] = [
    '@type' => 'Place',
    'address' => [
      '@type' => 'PostalAddress',
      'streetAddress' => $address,
    ],
  ];
}

$schemas[] = [
  '@context' => 'https://schema.org',
  '@type' => 'WebSite',
  'name' => 'Shreeza Tech',
  'alternateName' => 'Shreeza, Shreezatech, Shreejatech, Shreeja Tech',
  'url' => $appUrl,
];

if (count($crumbs) > 1) {
  $items = [];
  foreach ($crumbs as $i => $crumb) {
    $items[] = [
      '@type' => 'ListItem',
      'position' => $i + 1,
      'name' => $crumb['name'],
      'item' => $crumb['url'],
    ];
  }
  $schemas[] = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $items,
  ];
}
@endphp

@push('seo-meta')
<meta name="description" content="{{ $description ?? 'Shreeza Tech - Software Development & Digital Innovation. We build enterprise software, AI-powered platforms, cloud infrastructure, and mobile applications.' }}">
@if($keywords)<meta name="keywords" content="{{ $keywords }}">@endif

<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $description ?? 'Shreeza Tech - Software Development & Digital Innovation' }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $ogImage ?? asset('og-image.png') }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $description ?? 'Shreeza Tech - Software Development & Digital Innovation' }}">

<script type="application/ld+json">{!! json_encode($schemas, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
@endpush

@push('seo-title'){{ $pageTitle }}@endpush
