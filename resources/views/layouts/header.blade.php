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
          <li>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
              Home
            </a>
          </li>

          <li>
            <a href="{{ route('home.services') }}" class="{{ request()->routeIs('home.services') ? 'active' : '' }}">
              Services
            </a>
          </li>

          <li>
            <a href="{{ route('home.pricing') }}" class="{{ request()->routeIs('home.pricing') ? 'active' : '' }}">
              Pricing
            </a>
          </li>

          <li>
            <a href="{{ route('home.contact') }}" class="{{ request()->routeIs('home.contact') ? 'active' : '' }}">
              Contact Us
            </a>
          </li>

          <li>
            <a href="{{ route('home.about') }}" class="{{ request()->routeIs('home.about') ? 'active' : '' }}">
              About Us
            </a>
          </li>

        </ul>
      </nav>

      <!-- Call-to-action button -->
      <a href="{{ route('home.register') }}" class="btn">Start Your Free Trial</a>
    </div>
  </header>