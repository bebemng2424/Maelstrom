<style>
    .nav-item .active::after {
      content: "";
      position: absolute;
      bottom: 25%;
      right: 15%;
      width: 70%;
      border-bottom: 1px solid #FF6000;
      border-bottom-width: 2px;
      margin-bottom: 5px;
    }
  </style>
  <header style="background-color: #1E1B1B;position: sticky;top: 0;z-index: 5;">
    <nav class="navbar navbar-expand-lg navbar-dark  m-0  " >
      <div class="container-fluid me-5 ms-5">
        <a class="navbar-brand" href="#"><img src="./img/ShineMasters.png" alt="" width="100px" height="80px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item position-relative ">
              <a class="nav-link m-4 {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item position-relative ">
              <a class="nav-link m-4 {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
            </li>
            <li class="nav-item position-relative ">
              <a class="nav-link m-4 {{ request()->is('service') ? 'active' : '' }}" href="{{ route('services.index') }}">Services</a>
            </li>
            <li class="nav-item position-relative ">
              <a class="nav-link m-4 {{ request()->is('product') ? 'active' : '' }}" href="{{ route('products.index') }}">Products</a>
            </li>
            <li class="nav-item position-relative ">
              <a class="nav-link m-4 {{ request()->is('gallery') ? 'active' : '' }}" href="{{ route('galleries.index') }}">Gallery</a>
            </li>
            <li class="nav-item position-relative ">
              <a class="nav-link m-4 {{ request()->is('contact') ? 'active' : '' }}" href="{{ route('contacts.index') }}">Contact Us</a>
            </li>
          </ul>
          <i class="fa-solid fa-user   m-4" style="font-size: 20px;color: #F24E1E;"></i>
          <i class="fa-solid fa-cart-shopping   m-4" style="font-size: 20px;color: #F24E1E;"></i>
        </div>
      </div>
    </nav>
  </header>
