<!DOCTYPE html>
<html lang="th" class="scroll-smooth antialiased">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title','TourBooking')</title>
    <meta name="description" content="@yield('meta_description','แพลตฟอร์มจองทัวร์คุณภาพ ครบ จบ โปร่งใส')" />
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin />
    <link rel="dns-prefetch" href="//images.unsplash.com" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- Preload hero image for faster LCP -->
    <link rel="preload" as="image" fetchpriority="high" href="https://images.unsplash.com/photo-1499002238440-d264edd596ec?auto=format&fit=crop&w=1400&q=60" imagesrcset="https://images.unsplash.com/photo-1499002238440-d264edd596ec?auto=format&fit=crop&w=800&q=60 800w, https://images.unsplash.com/photo-1499002238440-d264edd596ec?auto=format&fit=crop&w=1400&q=60 1400w" imagesizes="100vw" />
    <!-- Removed external webfonts for performance: using system stack -->
    <style>
        /* Defer rendering for below-the-fold sections */
        .cv{content-visibility:auto;contain-intrinsic-size:600px 1000px;}
        @media (prefers-reduced-motion:reduce){
            *{animation-duration:.001ms!important;animation-iteration-count:1!important;transition:none!important;}
        }
    </style>
        <!-- Critical CSS (extracted minimal) -->
        <style>
            /* Critical: body, hero text, nav, buttons basics */
            html{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji"}
            body{margin:0;line-height:1.5;-webkit-font-smoothing:antialiased}
            h1,h2,h3{font-weight:600;margin:0}
            a{text-decoration:none}
            .btn-orange{display:inline-flex;align-items:center;justify-content:center;border-radius:9999px;background:#ea580c;color:#fff;font-weight:600;padding:.75rem 1.75rem;font-size:.875rem}
            .btn-orange:hover{background:#c2410c}
            header.sticky{backdrop-filter:blur(12px)}
        </style>
        @php $appCss = Vite::asset('resources/css/app.css'); @endphp
    <link rel="preload" href="{{ $appCss }}" as="style" />
    <link rel="stylesheet" href="{{ $appCss }}" />
    <noscript><link rel="stylesheet" href="{{ $appCss }}"/></noscript>
    {{-- JS removed for landing to reduce main-thread work (no interactive dependencies). Run in production: php artisan route:cache && php artisan config:cache && php artisan view:cache for lower TTFB. --}}
    <meta name="theme-color" content="#ea580c" />
</head>
<body class="font-sans bg-white text-slate-700 dark:bg-slate-900 dark:text-slate-100">
    <div id="app" class="min-h-screen flex flex-col">
        @include('partials.nav')
        <main class="flex-1">@yield('content')</main>
        @include('partials.footer')
    </div>
</body>
</html>
