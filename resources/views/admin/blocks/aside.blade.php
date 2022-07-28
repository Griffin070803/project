<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('master') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
        <span class="brand-text font-weight-light">JENKINSON SEA LIFE</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/9.jpg') }}" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->username }}</a>
            </div>
            <div class="info">
                <a href="#" class="d-block"></a> 
              </div>
            <div class="info">
                <a href="#" class="d-block"></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p style="margin-left: 5px">
                            Member
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.member.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.member.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Member</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-briefcase"></i>
                        <p style="margin-left: 9px">
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.category.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.category.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fish"></i>
                        <p style="margin-left: 8px">
                            Cate - Marine
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.cate_mari.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Cate - Marine</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.cate_mari.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Cate - Marine</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-fish"></i>
                        <p style="margin-left: 8px">
                            Blogs
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.lte.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.lte.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blogs</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-comment"></i>
                        <p style="margin-left: 9px">
                            Comment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.comment.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Comment</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-calendar"></i>
                        <p style="margin-left: 11px">
                            Event
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.event.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.event.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-card"></i>
                        <p style="margin-left: 7px">
                            Contact
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.contact.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List Contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-book"></i>
                        <p style="margin-left: 11px">
                            Information people
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('getRegister')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List information</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            
            

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>