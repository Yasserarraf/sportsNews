<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ADMIN DASHBOARD | WEBSITE NAME</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/ionicons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/backend-style.css')}}">
  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/backend-script.js')}}"></script>
</head>
<body>

<div class="sidebar">
	<ul class="sidebar-menu">
		<li><a href="{{route('dashboard')}}" class="dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
	  <li class="treeview">
            <a href="{{url('/')}}">
              <i class="fa fa-file"></i> <span>Home</span>
              
                

            </a>
      </li>
    <li class="treeview">
            <a href="#">
              <i class="fa fa-bookmark-o"></i> <span>Articles</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-posts')}}"><i class="fa fa-eye"></i>Publications</a></li>
              <li><a href="{{url('add-post')}}"><i class="fa fa-plus-circle"></i>Ajouter Article</a></li>
              <li><a href="{{route('viewCategory')}}"><i class="fa fa-plus-circle"></i>Categories</a></li>
              <li><a href="{{route('viewSection')}}"><i class="fa fa-plus-circle"></i>Sections</a></li>
            </ul>
        </li>
        
        <li class="treeview">
            <a href="#">
              <i class="fa fa-image"></i> <span>Publicité</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('all-advs')}}"><i class="fa fa-eye"></i>Publicités</a></li>
              <li><a href="{{url('add-adv')}}"><i class="fa fa-plus-circle"></i>Ajouter Publicité</a></li>
            </ul>
        </li>
       

        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-plus"></i> <span>Users</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('subscribers')}}"><i class="fa fa-eye"></i>All Subscribers</a></li>
                <li><a href="{{route('users')}}"><i class="fa fa-eye"></i>All Admins</a></li>
                <li><a href="#"><i class="fa fa-plus-circle"></i>Add Admin</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-address-book"></i> <span>Parametres</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{route('getSettings')}}"><i class="fa fa-edit"></i>Media</a></li>
              <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Log Out</a></li>
            </ul>
        </li>
	</ul>
</div>

<main>
   @yield('content')
</main>



<footer>
	<div class="col-sm-6">
  © Copyright {{date('Y')}} - Sportify Design by: <a href="http://www.fstt.ac.ma/" > Cycle d'Ingénieur LSI</a>
	</div>

</footer>
</body>
</html>
