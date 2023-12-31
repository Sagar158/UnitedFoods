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
            <a href="{{ route('home.slider.index') }}" class="nav-link">Slider</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('home.aboutus.index') }}" class="nav-link">What We Do</a>
        </li>
      </ul>
    </div>
</nav>
