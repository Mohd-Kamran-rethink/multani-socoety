<aside class="main-sidebar sidebar-dark-primary elevation-4">
    {{-- <a href="index3.html" class="brand-link">
   <img src="{{asset('/images/Logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  
   </a> --}}
    <div class="sidebar">

        <a href="https://www.getpet.in" class="brand-link">
            {{-- <img src="http://15.206.87.117/suvarnakar-new/public/Theme2/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
            <span class="brand-text font-weight-light">Multani Society</span>
        </a>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item  ">
                    <a href="{{ url('admin/dashboard') }}"
                        class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>s
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/laqabs') }}"
                        class="nav-link {{ Request::is('/admin/laqabs') ? 'active' : '' }}">
                        <i class="fa fa-th-list
                  "></i>
                        <p>
                            Manage Laqabs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/people/add') }}"
                        class="nav-link {{ Request::is('admin/people/add') ? 'active' : '' }}">
                        <i class=" fa fa-users"></i>
                        <p>
                            People
                        </p>
                    </a>
                </li>






            </ul>







        </nav>
    </div>
</aside>
