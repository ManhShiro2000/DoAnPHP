<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="/" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Trang chủ
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('currency')}}" class="nav-link">
          <i class="nav-icon fas fa-money-bill"></i>
          <p>
            Tiền tệ
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{route('logout')}}" class="nav-link">
          <i class="nav-icon fas fa-sign-out-alt"></i>
          <p>
            Đăng xuất
          </p>
        </a>
      </li>
    </ul>
  </nav>