<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"><h5>
                    ผู้ใช้งาน: คุณ  @if(\Illuminate\Support\Facades\Auth::user()) {{\Illuminate\Support\Facades\Auth::user()->name }} @endif</h5>  </li>
            <li class="active treeview">
                {{--<a href="#">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>เมนูอาหาร</span>--}}
                    {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>--}}
                    {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
                {{--</ul>--}}
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>จองโต๊ะ</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                    <li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                    <li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                    <li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('/addorder')}}">
                    <i class="fa fa-th"></i> <span>สั่งอาหาร</span>
                    <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                </a>


            </li>

            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-th"></i> <span>สั่งอาหาร</span>--}}
                    {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>--}}
                {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>--}}
                {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>เช็คบิล</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>

            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>ออกรายงาน</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>--}}
                    {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>--}}
                    {{--<li><a href="../../../../../../Users/chaowalitchaoprakhon/Downloads/AdminLTE/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--}}
                {{--</ul>--}}
            </li>

            <li class="header">เมนูอาหาร</li>
            <li><a href="{{url("addmenu")}}"><i class="fa fa-circle-o text-red"></i> <span>จัดการเมนู</span></a></li>

            <li class="header">จัดการข้อมูลผู้ใช้งาน</li>
            <li><a href="{{url("addmenu")}}"><i class="fa fa-circle-o text-red"></i> <span>จัดการข้อมูลผู้ใช้งาน</span></a></li>

            <li class="header">ออกจากระบบ</li>
            <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-circle-o text-red"></i> <span>ออกจากระบบ</span></a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
