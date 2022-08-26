<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../css/select2.min.css">
    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="/img/agexport-logo.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/img/agexport-logo.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Vinicio Lopez">
    <title>Prueba Agexport</title>
    <style type="text/css">
        .main{
             background-color: #28292d;
        }
        .btn-success{
             background-color: #77a62e;
             border-color: #77a62e;
        }
        td{
            color:white;
        }
        th{
            color:white;
        }
        
    </style>
</head>
<body>

    <!-- header -->
    <header class="header">
        <div class="header__content">
            <!-- header logo -->
            <a href="{{ route('home') }}" class="header__logo">
                <img src="/img/agexport-logo.png" alt="">
            </a>
            <!-- end header logo -->

            <!-- header menu btn -->
            <button class="header__btn" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- end header menu btn -->
        </div>
    </header>
    <!-- end header -->

    <!-- sidebar -->
    <div class="sidebar">
        <!-- sidebar logo -->
        <a href="{{ route('home') }}" class="sidebar__logo">
            <img src="/img/agexport-logo.png" style="width:30%">
        </a>
        <!-- end sidebar logo -->
        
        <!-- sidebar user -->
        <div class="sidebar__user">
            <div class="sidebar__user-img">
                <img src="../img/user.svg" alt="">
            </div>

            <div class="sidebar__user-title">
                <span>User</span>
                <p>{{ Session::get('user')->name }}</p>
            </div>

            <a class="sidebar__user-btn" type="button" href="{{ route('logout') }}">
                <i class="icon ion-ios-log-out"></i>
            </a>
        </div>
        <!-- end sidebar user -->

        <!-- sidebar nav -->
        <ul class="sidebar__nav">
            <li class="sidebar__nav-item">
                @if(Request::route()->getName() == 'home')
                    <a href="{{ route('home') }}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-keypad"></i> Dashboard</a>
                @else
                    <a href="{{ route('home') }}" class="sidebar__nav-link "><i class="icon ion-ios-keypad"></i> Dashboard</a>
                @endif
            </li>

            <li class="sidebar__nav-item">
                @if(Request::route()->getName() == 'cinemas')
                    <a href="{{ route('cinemas') }}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-star-half"></i> Tareas</a>
                @else
                    <a href="{{ route('cinemas') }}" class="sidebar__nav-link"><i class="icon ion-ios-star-half"></i> Tareas</a>
                @endif
            </li>
          

            <li class="sidebar__nav-item">
                 @if(Request::route()->getName() == 'users')
                    <a href="{{ route('users') }}" class="sidebar__nav-link sidebar__nav-link--active"><i class="icon ion-ios-contacts"></i> Usuarios</a>
                 @else
                    <a href="{{ route('users') }}" class="sidebar__nav-link"><i class="icon ion-ios-contacts"></i> Usuarios</a>
                 @endif
            </li>

         

           
        </ul>
        <!-- end sidebar nav -->
        
        <!-- sidebar copyright -->
        <div class="sidebar__copyright">© 2022 <br>Create by <a href="" target="_blank">Vinicio Lopez</a></div>
        <!-- end sidebar copyright -->
    </div>
    <!-- end sidebar -->

    <!-- main content -->
    @yield('content_admin')
   
    <!-- end main content -->

    <!-- JS -->
</body>
</html>