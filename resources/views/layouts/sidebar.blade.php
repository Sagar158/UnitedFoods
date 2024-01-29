<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        United<span>Foods</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Home</li>
        <li class="nav-item">
            <a href="{{ route('home.slider.index') }}" class="nav-link">
                <i class="link-icon" data-feather="sliders"></i>
                <span class="link-title">Slides</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.certifications.index') }}" class="nav-link">
                <i class="link-icon" data-feather="file"></i>
                <span class="link-title">Certifications</span>
            </a>
        </li>
        <li class="nav-item nav-category">About Us</li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">What We Do</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('home.aboutus.index') }}" class="nav-link">Our Mission & Vision</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('home.aboutus.team.index') }}" class="nav-link">Our Team</a>
                </li>
              </ul>
            </div>
        </li>
        <li class="nav-item nav-category">Products</li>
        <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link">
                <i class="link-icon" data-feather="codesandbox"></i>
                <span class="link-title">Products</span>
            </a>
        </li>
        <li class="nav-item nav-category">Events</li>
        <li class="nav-item">
            <a href="{{ route('events.index') }}" class="nav-link">
                <i class="link-icon" data-feather="calendar"></i>
                <span class="link-title">Events</span>
            </a>
        </li>
        <li class="nav-item nav-category">Contact Us</li>
        <li class="nav-item">
            <a href="{{ route('contact-us.index') }}" class="nav-link">
                <i class="link-icon" data-feather="phone-call"></i>
                <span class="link-title">Contact Us</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('contact-us.information') }}" class="nav-link">
                <i class="link-icon" data-feather="info"></i>
                <span class="link-title">Information</span>
            </a>
        </li>
    </ul>
    </div>
</nav>
