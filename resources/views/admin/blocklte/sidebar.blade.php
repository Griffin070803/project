<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="https://www.facebook.com/profile.php?id=100009421998701">CONG MINH</a>
      {{-- <div>
        <a href="{{ route('logout') }}">Logout</a>
      </div> --}}
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="dropdown">
        <a href="#"><i class="fas fa-tachometer-alt"></i><span>Bảng điều khiển</span></a>
      </li>
      
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-bars"></i><span>Thể loại</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://localhost:8000/admin/category/index">Danh sách</a></li>
          <li><a class="nav-link" href="http://localhost:8000/admin/category/create">Thêm thể loại</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-archive"></i><span>Sản phẩm</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://localhost:8000/admin/lte/index">Danh sách</a></li>
          <li><a class="nav-link" href="http://localhost:8000/admin/lte/create">Thêm sản phẩm</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Thành viên</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://localhost:8000/admin/user/index">Danh sách</a></li>
          <li><a class="nav-link" href="http://localhost:8000/admin/user/create">Thêm thành viên</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-cart-arrow-down"></i><span>Đơn hàng</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://localhost:8000/gio-hang">Danh sách</a></li>
          <li><a class="nav-link" href="http://localhost:8000">Thêm đơn hàng</a></li>
        </ul>
      </li>

    </ul>
   </aside>
</div>