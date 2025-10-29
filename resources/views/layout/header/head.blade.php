<head>
  <!-- Essential Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  
  <!-- Primary Meta Tags -->
  <title>@yield('title', 'Assem Mohsen | Full Stack Developer & Software Engineer')</title>
  <meta name="title" content="@yield('meta_title', 'Assem Mohsen | Full Stack Developer & Software Engineer')">
  <meta name="description" content="@yield('meta_description', 'Experienced Full Stack Developer specializing in Laravel, PHP, and scalable web applications. Building secure backend systems and elegant user experiences for real-world business solutions.')">
  <meta name="keywords" content="@yield('meta_keywords', 'Full Stack Developer, Laravel Developer, PHP Developer, Web Developer, Software Engineer, Backend Developer, API Development, SaaS Applications, Assem Mohsen')">
  <meta name="author" content="Assem Mohsen">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="language" content="English">
  <meta name="revisit-after" content="7 days">
  
  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}">
  
  <!-- Open Graph / Facebook Meta Tags -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:site_name" content="Assem Mohsen Portfolio">
  <meta property="og:title" content="@yield('og_title', 'Assem Mohsen | Full Stack Developer & Software Engineer')">
  <meta property="og:description" content="@yield('og_description', 'Experienced Full Stack Developer specializing in Laravel, PHP, and scalable web applications. Building secure backend systems and elegant user experiences.')">
  <meta property="og:image" content="{{ $og_image ?? asset('assets/img/person/assem_mohsen.jpeg') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale" content="en_US">
  
  <!-- Twitter Card Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="@yield('twitter_title', 'Assem Mohsen | Full Stack Developer & Software Engineer')">
  <meta name="twitter:description" content="@yield('twitter_description', 'Experienced Full Stack Developer specializing in Laravel, PHP, and scalable web applications.')">
  <meta name="twitter:image" content="{{ $twitter_image ?? asset('assets/img/person/assem_mohsen.jpeg') }}">
  <meta name="twitter:creator" content="@yield('twitter_handle', '@assemmohsen')">
  
  <!-- Theme Color for Mobile Browsers -->
  <meta name="theme-color" content="#0056b3">
  <meta name="msapplication-TileColor" content="#0056b3">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png" sizes="32x32">
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/png" sizes="16x16">
  
  <!-- DNS Prefetch & Preconnect for Performance -->
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  
  <!-- Structured Data (JSON-LD) for SEO -->
  @php
    $structuredData = [
      '@context' => 'https://schema.org',
      '@type' => 'Person',
      'name' => 'Assem Mohsen',
      'url' => url('/'),
      'image' => asset('assets/img/person/assem_mohsen.jpeg'),
      'jobTitle' => 'Full Stack Developer',
      'description' => 'Experienced Full Stack Developer specializing in Laravel, PHP, and scalable web applications',
      'knowsAbout' => ['Laravel', 'PHP', 'Full Stack Development', 'Backend Development', 'API Development', 'SaaS Applications', 'Web Development'],
      'sameAs' => [
        config('social.linkedin'),
        config('social.github'),
        config('social.facebook'),
        config('social.instagram')
      ]
    ];
  @endphp
  <script type="application/ld+json">
    {!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
  </script>
  
  @yield('additional_head')
</head>