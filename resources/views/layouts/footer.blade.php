<link rel="stylesheet" href="{{ asset('asset/footer.css') }}">


<script>
document.addEventListener("DOMContentLoaded", function() {
  const header = document.getElementById('header');
  let lastScrollTop = 0;

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolledPercent = (scrollTop / docHeight) * 100;

    if (scrollTop > lastScrollTop) {
      // Scrolling down
      if (scrolledPercent > 16) {
        header.classList.add('hide');
      }
    } else {
      // Scrolling up
      if (scrolledPercent < 10) {
        header.classList.remove('hide');
      }
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
});
</script>

<!-----------------------------FOOTER SECTION-------------------------------------->
<footer class="footer">
  <div class="footer-container">
    <!-- ===== 1️⃣ Left Section ===== -->
    <div class="footer-left">
      <img src="/img/logo.png" alt="Business Logo" class="footer-logo">
      <p class="footer-info">
        Empower your entire company with WorFlik - an all-in-one
        cloud-based ERP software built to simplify accounting, HR,
        inventory, POS, and team operations from a single dashboard.
      </p>
      <div class="footer-search">
        <input type="text" placeholder="Search..." />
      </div>
    </div>

    <div class="footer-right">
      <div class="footer-col">
        <h3>Product</h3>
        <ul>
          <li><a href="{{ route('home.accounting') }}">Accounting & Finance</a></li>
          <li><a href="{{ route('home.hr') }}">HR & Payrolls</a></li>
          <li><a href="{{ route('home.pos') }}">POS System</a></li>
        </ul>
      </div>

      <!-- ===== 3️⃣ Nav Column ===== -->
      <div class="footer-col">
        <h3>Explore</h3>
        <ul>
          <li><a href="{{ route('home.pricing') }}">Pricing</a></li>
          <li><a href="{{ route('home.term') }}">Terms and Conditions</a></li>
          <li><a href="{{ route('home.privacy') }}">Privacy & Policy</a></li>
          <li><a href="{{ route('home.return') }}">Return Policy</a></li>
          <li><a href="{{ route('home.cookies') }}">Cookies Policy</a></li>
        </ul>
      </div>

      <!-- ===== 4️⃣ Nav Column ===== -->
      <div class="footer-col">
        <h3>Company</h3>
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('home.about') }}">About Us</a></li>
          <li><a href="{{ route('home.services') }}">Service</a></li>
          <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
        </ul>
      </div>
    </div>

  </div>


  <!-------Social + btn flex------->
  <section class="social-bar">
    <div class="social-icons">
      <a href="https://www.facebook.com/WorflikOfficial"><i class="fab fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/company/worflik/"><i class="fab fa-linkedin"></i></a>
      <a href="https://www.instagram.com/worflik/"><i class="fab fa-instagram"></i></a>
    </div>

    <a href="{{ url()->current() }}" class="get-more-btn">
      Get Started
    </a>
  </section>
  <div class="footer-bar"></div>
  <div class="copyright-text">
    <p>Copyright <i class="fa-regular fa-copyright"></i> 2025-2026 | WorFlik all rights reserved | Product by <a
        href="https://fissionmonster.com/" target="_blank" rel="noopener noreferrer">
        Fission Monster
      </a>

    </p>
  </div>
</footer>





<!-- Font Awesome for search icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">