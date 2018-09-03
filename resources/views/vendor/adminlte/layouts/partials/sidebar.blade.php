<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ (Request::is('home') ? 'active' : '') }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview {{ (Request::is('admin/cls*', 'admin/subjects*', 'admin/chapters*') ? 'active menu-open' : '') }}">
                <a href="#"><i class='fa fa-th'></i> <span>Schooling</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview {{ (Request::is('admin/cls*') ? 'active menu-open' : '') }} ">
                        <a href="#">
                            <i class='fa fa-circle-o'></i>
                            <span>Classes</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{ (Request::is('admin/cls') ? 'active' : '') }}"><a href="{{ url('/admin/cls') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li class="{{ (Request::is('admin/cls/create') ? 'active' : '') }}"><a href="{{ url('/admin/cls/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                        </ul>
                    </li>
                    <li class="treeview {{ (Request::is('admin/subjects*') ? 'active menu-open' : '') }} ">
                        <a href="#"><i class='fa fa-circle-o'></i> <span>Subjects</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="{{ (Request::is('admin/subjects') ? 'active' : '') }}"><a href="{{ url('admin/subjects') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li class="{{ (Request::is('admin/subjects/create') ? 'active' : '') }}"><a href="{{ url('admin/subjects/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                        </ul>
                    </li>
                    <li class="treeview {{ (Request::is('admin/chapters*') ? 'active menu-open' : '') }} ">
                        <a href="#"><i class='fa fa-circle-o'></i> <span>Chapters</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="{{ (Request::is('admin/chapters') ? 'active' : '') }}"><a href="{{ url('admin/subjects') }}"><a href="{{ url('admin/chapters') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li  class="{{ (Request::is('admin/chapters/create') ? 'active' : '') }}"><a href="{{ url('admin/chapters/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                        </ul>
                    </li>
                </ul>

            </li>

            <li class="treeview {{ (Request::is('admin/competetive_exams*', 'admin/exam_subjects*', 'admin/exam_chapters*') ? 'active menu-open' : '') }}">
                <a href="#"><i class='fa fa-th'></i> <span>Competetive Exams</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview {{ (Request::is('admin/competetive_exams*') ? 'active menu-open' : '') }}">
                        <a href="#"><i class='fa fa-circle-o'></i> <span>Exams</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="{{ (Request::is('admin/competetive_exams') ? 'active' : '') }}"><a href="{{ url('/admin/competetive_exams') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li class="{{ (Request::is('admin/competetive_exams/create') ? 'active' : '') }}"><a href="{{ url('/admin/competetive_exams/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                        </ul>
                    </li>
                    <li class="treeview {{ (Request::is('admin/exam_subjects*') ? 'active menu-open' : '') }}">
                        <a href="#"><i class='fa fa-circle-o'></i> <span>Subjects</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="{{ (Request::is('admin/exam_subjects') ? 'active' : '') }}"><a href="{{ url('/admin/exam_subjects') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li class="{{ (Request::is('admin/exam_subjects/create') ? 'active' : '') }}"><a href="{{ url('/admin/exam_subjects/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                        </ul>
                    </li>
                    <li class="treeview {{ (Request::is('admin/exam_chapters*') ? 'active menu-open' : '') }}">
                        <a href="#"><i class='fa fa-circle-o'></i> <span>Chapters</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li class="{{ (Request::is('admin/exam_chapters') ? 'active' : '') }}"><a href="{{ url('/admin/exam_chapters') }}"><i class="fa fa-circle-o"></i>List</a></li>
                            <li class="{{ (Request::is('admin/exam_chapters/create') ? 'active' : '') }}"><a href="{{ url('/admin/exam_chapters/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/test_series*') ? 'active menu-open' : '') }}">
                <a href="#"><i class='fa fa-th'></i> <span>Test Series</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{ (Request::is('admin/test_series') ? 'active' : '') }}"><a href="{{ url('/admin/test_series') }}"><i class="fa fa-circle-o"></i>List</a></li>
                    <li class="{{ (Request::is('admin/test_series/create') ? 'active' : '') }}"><a href="{{ url('/admin/test_series/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Request::is('admin/testimonials*') ? 'active menu-open' : '') }}">
                <a href="#"><i class='fa fa-th'></i> <span>Testimonials</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{ (Request::is('admin/testimonials') ? 'active' : '') }}"><a href="{{ url('/admin/test_series') }}"><a href="{{ url('admin/testimonials') }}"><i class="fa fa-circle-o"></i>List</a></li>
                    <li class="{{ (Request::is('admin/testimonials/create') ? 'active' : '') }}"><a href="{{ url('/admin/test_series') }}"><a href="{{ url('admin/testimonials/create') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
