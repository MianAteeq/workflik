  <header id="header" class="header">
      <div class="container">
          <!-- Logo -->
          <a href="{{ route('home') }}" class="logo">
              <img src="/img/logo.png" alt="WorFlik Logo">
          </a>

          <!-- Hamburger toggle (mobile) -->
          <input type="checkbox" id="menu-toggle">
          <label for="menu-toggle" class="menu-icon">&#9776;</label>

          <!-- Navigation -->
          <nav class="nav">
              <ul>
                  <li><a href="{{ route('home') }}" class="active" aria-current="page">Home</a></li>
                  <li><a href="{{ route('home.services') }}">Services</a></li>
                  <li><a href="{{ route('home.pricing') }}">Pricing</a></li>
                  <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                  <li><a href="{{ route('home.about') }}">About Us</a></li>
              </ul>
          </nav>

          <!-- Call-to-action button -->
          <a href="{{ route('home.pricing') }}" class="btn">Start Your Free Trial</a>
      </div>
  </header>
