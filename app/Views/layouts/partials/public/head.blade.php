<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- responsive meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- google font css -->
<link rel="preconnect dns-prefetch" href="https://fonts.googleapis.com" crossorigin="anonymous" />
<link rel="preconnect dns-prefetch" href="https://fonts.gstatic.com" crossorigin="anonymous" />

<meta name="title" content="@yield('title')" />

<!-- meta-description -->
<meta name="description" content="@yield('description')" />

<!-- keywords -->
<meta name="keywords" content="@yield('tags')" />
<meta name="news_keywords" content="@yield('tags')" />

<!-- author from config.json -->
<meta name="author" content="@yield('author')" />

<!-- og-title -->
<meta property="og:title" content="@yield('title')" />

<!-- og-description -->
<meta property="og:description" content="@yield('description')" />
<meta property="og:type" content="website" />
<meta property="og:url" content="@yield('url')" />

<!-- og-image -->
<meta property="og:image" content="@yield('image')" />

<!-- twitter-title -->
<meta name="twitter:title" content="@yield('title')" />

<!-- twitter-description -->
<meta name="twitter:description" content="@yield('description')" />

<!-- twitter-image -->
<meta name="twitter:image" content="@yield('image')" />
<meta name="twitter:card" content="summary_large_image" />

<meta name="twitter:site" content="@yield('url')" />
<meta name="twitter:creator" content="@yield('author')" />

<!-- title -->
<title>@yield('title')</title>

<!-- canonical url -->
@canonical

<!-- index robots -->
{{-- <meta name="robots" content="index,follow" /> --}}
<meta name="robots" content="noindex,nofollow" />

<!-- Favicon -->
<link rel="shortcut icon" href="@asset('favicon.ico')" />
<link rel="mask-icon" href="@asset('favicon.ico')" />

<!-- Sitemap -->
<link rel="sitemap" href="@asset('sitemap-index.xml')" />

<!-- CDN preconnet -->
<link rel="preconnect dns-prefetch" href="https://cdnjs.cloudflare.com" crossorigin="anonymous" />

<!-- CSS preloads -->
<link rel="stylesheet preload" as="style" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css" crossorigin="anonymous" />

<!-- JS preloads -->
<link rel="preload" as="script" type="text/javascript"
    href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" crossorigin="anonymous" />

<script src="https://cdn.tailwindcss.com"></script>
