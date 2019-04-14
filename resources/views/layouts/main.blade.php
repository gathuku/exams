<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Exam System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header">
      <a class="app-header__logo" href="index.html">Kisii University</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>


        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">

            <li><a class="dropdown-item" href="/user/{{Auth()->user()->id}}"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}"
             onclick="event.preventDefault();
                document.getElementById('logout-form').submit();
             "
              ><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>

        </li>
      </ul>

      <!--Logout Form-->
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>


    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="{{auth()->user()->gravatar}}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{auth()->user()->name}}</p>
          <p class="app-sidebar__user-designation">{{auth()->user()->email}}</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
             @admin
             <li><a class="app-menu__item" href="/user"><i class="app-menu__icon fa fa-user-circle-o"></i><span class="app-menu__label">Students</span></a></li>
             <li><a class="app-menu__item" href="/semester"><i class="app-menu__icon fa fa-clone"></i><span class="app-menu__label">Semesters</span></a></li>
             {{--
             <li><a class="app-menu__item" href="/exam"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Exams</span></a></li>
             --}}
             <li><a class="app-menu__item" href="/unit"><i class="app-menu__icon fa fa-calendar-minus-o"></i><span class="app-menu__label">Units</span></a></li>

             <li><a class="app-menu__item" href="/mark"><i class="app-menu__icon fa fa-id-card"></i><span class="app-menu__label">Exam marks</span></a></li>
             <li><a class="app-menu__item" href="/lecturer"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Lecturer</span></a></li>

              <li><a class="app-menu__item" href="/retakes"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Retakes</span></a></li>
             <li><a class="app-menu__item" href="/setting"><i class="app-menu__icon fa fa-cog"></i><span class="app-menu__label">Settings</span></a></li>
              @endadmin
              @student
              <li><a class="app-menu__item" href="/session"><i class="app-menu__icon fa fa-check-square-o"></i><span class="app-menu__label">Session</span></a></li>
              <li><a class="app-menu__item" href="/registerunit"><i class="app-menu__icon fa fa-sitemap"></i><span class="app-menu__label">Register units</span></a></li>
              <li><a class="app-menu__item" href="/transcript"><i class="app-menu__icon fa fa-file-pdf-o"></i><span class="app-menu__label">Transcripts</span></a></li>
              <li><a class="app-menu__item" href="/retakes"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Retakes</span></a></li>

              @endstudent
              @lecturer

              <li><a class="app-menu__item" href="/unit"><i class="app-menu__icon fa fa-calendar-minus-o"></i><span class="app-menu__label">Units</span></a></li>

              <li><a class="app-menu__item" href="/mark"><i class="app-menu__icon fa fa-id-card"></i><span class="app-menu__label">Exam marks</span></a></li>
              <li><a class="app-menu__item" href="/transcript"><i class="app-menu__icon fa fa-file-pdf-o"></i><span class="app-menu__label">Transcripts</span></a></li>
              <li><a class="app-menu__item" href="/retakes"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Retakes</span></a></li>

              @endlecturer

      </ul>
    </aside>
    @yield('content')
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->

    @yield('scripts')





  </body>
</html>
