<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title>Advanced Hernia Center | Best Hernia Treatment & Surgery</title>

    <meta name="title" content="Advanced Hernia Center | Best Hernia Treatment & Surgery">
    <meta name="description" content="Advanced Hernia Center provides expert hernia treatment, laparoscopic surgery, and advanced medical care with experienced specialists.">

    <meta name="keywords" content="Hernia Treatment, Hernia Surgery, Laparoscopic Surgery, Advanced Hernia Center, Hernia Specialist">

    <meta name="author" content="Advanced Hernia Center">

    <!-- Search Engine -->
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Advanced Hernia Center">
    <meta property="og:description" content="Expert hernia treatment and laparoscopic surgery services.">
    <meta property="og:image" content="{{ asset('frontend/assets/images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced Hernia Center">
    <meta name="twitter:description" content="Expert hernia treatment and laparoscopic surgery services.">
    <meta name="twitter:image" content="{{ asset('frontend/assets/images/og-image.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>
<body>

<!-- LOADER -->
{{-- <div id="pageLoader" class="page-loader">
    <div class="loader-content">
        <div class="loader-logo">
            <img src="{{ asset('') }}frontend/assets/images/loading_logo.png" alt="Loading" class="loader-img">
            <div class="loader-ring"></div>
        </div>
    </div>
</div> --}}

{{-- loader  --}}
<div class="loading" id="pageLoader">
    <svg width="64px" height="48px" viewBox="0 0 64 48">
        <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="back"></polyline>
        <polyline points="0.157 23.954, 14 23.954, 21.843 48, 43 0, 50 24, 64 24" id="front"></polyline>
    </svg>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg custom-navbar fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo + Text -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('frontend.home') }}">
            <img src="{{ asset('') }}frontend/assets/images/logo.png" alt="Dr. John Smith" id="logo">
            <span id="logo-text">
                Advanced Hernia Center<br>
                <small>Bangladesh</small>
            </span>
        </a>

        <!-- Mobile hamburger (visible on small screens) -->
        <button id="mobile-menu-btn" class="navbar-toggler d-lg-none" aria-label="Toggle navigation" aria-expanded="false">
            <i class="bi bi-list fs-4"></i>
        </button>

        <!-- Nav links (desktop) -->
        <div class="d-flex align-items-center gap-4 nav-links">
            <a href="{{ route('frontend.home') }}" class="nav-link">Home</a>
            <a href="{{ route('frontend.home') }}#about" class="nav-link">About</a>
            <a href="{{ route('frontend.home') }}#services" class="nav-link">Services</a>
            <a href="{{ route('frontend.home') }}#schedule" class="nav-link">Schedule</a>
            <a href="{{ route('frontend.video') }}" class="nav-link">Health Videos</a>
            <a href="{{ route('frontend.home') }}#contact" class="contact-btn">Contact</a>
        </div>
    </div>
</nav>

<!-- Mobile menu (off-canvas) placed outside the navbar so it can be full-height -->
<div id="mobile-menu" class="mobile-menu d-lg-none" aria-hidden="true" aria-modal="true" role="dialog" style="display:none;">
    <div class="mobile-menu-header d-flex align-items-center justify-content-between px-3 py-2">
        <div class="d-flex align-items-center">
            <img src="{{ asset('') }}frontend/assets/images/logo.png" alt="Dr. John Smith" id="logo" style="height:30px;">
            <span class="ms-2 fw-bold">Menu</span>
        </div>
        <button id="mobile-menu-close" class="mobile-close btn btn-link p-0" aria-label="Close menu">
            <i class="bi bi-x-lg fs-4"></i>
        </button>
    </div>
    <nav class="mobile-menu-body px-3 pb-4">
        <a href="{{ route('frontend.home') }}" class="mobile-link">Home</a>
        <a href="{{ route('frontend.home') }}#about" class="mobile-link">About</a>
        <a href="{{ route('frontend.home') }}#services" class="mobile-link">Services</a>
        <a href="{{ route('frontend.home') }}#schedule" class="mobile-link">Schedule</a>
        <a href="{{ route('frontend.video') }}" class="mobile-link">Health Videos</a>
        <a href="{{ route('frontend.home') }}#contact" class="btn btn-outline-primary rounded-pill w-100 mt-2">Contact</a>
    </nav>
</div>

<!-- overlay moved outside nav to avoid clipping -->
<div id="mobile-menu-overlay" class="mobile-menu-overlay d-lg-none" tabindex="-1"></div>
