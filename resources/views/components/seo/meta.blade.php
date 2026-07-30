@props([
  'title' => null,
  'description' => null,
  'keywords' => null,
  'ogImage' => null,
  'ogType' => 'website',
  'phone' => null,
  'address' => null,
])

@php
$canonical = $canonical ?? url()->current();
$phone = $phone ?? config('app.phone', '+1-555-555-5555');
$address = $address ?? config('app.address', '');

$schema = [
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => 'ShreezaTech',
  'url' => config('app.url'),
  'logo' => asset('logo.png'),
  'description' => $description ?? 'Consulting & Software Solutions',
  'contactPoint' => [
    '@type' => 'ContactPoint',
    'telephone' => $phone,
    'contactType' => 'sales',
  ],
];

if ($address) {
  $schema['location'] = [
    '@type' => 'Place',
    'address' => [
      '@type' => 'PostalAddress',
      'streetAddress' => $address,
    ],
  ];
}
@endphp

<meta name="description" content="{{ $description ?? 'ShreezaTech - Consulting & Software Solutions' }}">
@if($keywords)<meta name="keywords" content="{{ $keywords }}">@endif

<meta property="og:title" content="{{ $title ? $title.' | '.config('app.name') : config('app.name') }}">
<meta property="og:description" content="{{ $description ?? 'ShreezaTech - Consulting & Software Solutions' }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $ogImage ?? asset('og-image.png') }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title ? $title.' | '.config('app.name') : config('app.name') }}">
<meta name="twitter:description" content="{{ $description ?? 'ShreezaTech - Consulting & Software Solutions' }}">

<link rel="canonical" href="{{ $canonical }}">

<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>
