
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{url('admin')}}">
                    <i class="fas fa-home"></i>
                    <span>Trang chủ</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{url('admin/user')}}" >
                    <i class="fas fa-user"></i>
                    <span>Tài Khoản</span>
                </a>
{{--                <ul class="sub">--}}
{{--                    <li><a  href="boxed_page.html">Boxed Page</a></li>--}}
{{--                    <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>--}}
{{--                    <li><a  href="header-color.html">Different Color Top bar</a></li>--}}
{{--                    <li><a  href="mega_menu.html">Mega Menu</a></li>--}}
{{--                    <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>--}}
{{--                    <li><a  href="email_template.html" target="_blank">Email Template</a></li>--}}
{{--                </ul>--}}
            </li>
            <li class="sub-menu">
                <a href="{{url('admin/category')}}" >
                    <i class="fas fa-clipboard-list"></i>
                    <span>Danh Mục</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{url('admin/product')}}" >
                    <i class="fas fa-gem"></i>
                    <span>Sản Phẩm</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{url('admin/news')}}" >
                    <i class="fas fa-newspaper"></i>
                    <span>Tin Tức</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

