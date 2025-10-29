<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Assem Mohsen</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="{{ config('social.facebook') }}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="{{ config('social.instagram') }}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="{{ config('social.linkedin') }}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="{{ config('social.github') }}" class="github" target="_blank"><i class="bi bi-github"></i></a>
      </div>

    </div>
</header>