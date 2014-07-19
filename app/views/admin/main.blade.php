<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Prosperity Properties</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">

   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
   {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
   {{ HTML::style('assets/css/style-metronic.css') }}
   {{ HTML::style('assets/css/style.css') }}
   {{ HTML::style('assets/css/style-responsive.css') }}
   {{ HTML::style('assets/css/themes/default.css') }}
   <!-- END THEME STYLES -->
      
   {{ HTML::script('assets/plugins/jquery-1.10.2.min.js') }}
   
   <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed page-footer-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="{{ URL::to('/') }}">Prosperity Properties</a>
         <!-- END LOGO -->

         <ul class="nav navbar-nav pull-right">
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                  <span class="username">Хэрэглэгч</span>
                  <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li>
                     <a href="{{ URL::to('profile') }}"><i class="icon-user"></i> Миний профайл</a>
                  </li>
                  <li>
                     <a href="{{ URL::to('logout') }}"><i class="icon-key"></i> Гарах</a>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li class="start @unless (isset($active) ) active @endunless ">
               <a href="{{ URL::to('/') }}">
                  <i class="icon-home"></i> 
                  <span class="title">Удирдах самбар</span>
                  <span class="selected"></span>
               </a>               
            </li>

            <?php $role = Auth::user()->role; ?>
            <?php $active = isset($active)?$active:"";?>

            @if ( $role == 1 || $role == 2)
            <li class="@if ($active == 'user') active @endif">
               <a href="{{ URL::to('user') }}">
                  <i class="icon-user"></i>
                  <span class="title">Хэрэглэгчид</span>
                  @if ($active == 'user')
                      <span class="selected"></span>
                  @endif
               </a>
            </li>
            @endif

            <li class="@if ($active == 'project') active @endif">
               <a href="{{ URL::to('project') }}">
                  <i class="icon-file-text"></i> 
                  <span class="title">Төслүүд</span>
                  @if ($active == 'project')
                      <span class="selected"></span>
                  @endif
               </a>
            </li>
            <li class="@if ($active == 'apartment') active @endif">
               <a href="{{ URL::to('apartment') }}">
                  <i class="icon-table"></i> 
                  <span class="title">Байр</span>
                  @if ($active == 'apartment')
                      <span class="selected"></span>
                  @endif
               </a>
            </li>
            <li class="@if ($active == 'room') active @endif">
               <a href="{{ URL::to('room') }}">
                  <i class="icon-bookmark-empty"></i> 
                  <span class="title">Тоот</span>
                  @if ($active == 'room')
                      <span class="selected"></span>
                  @endif
               </a>
            </li>
            <li class="@if ($active == 'block') active @endif">
               <a href="{{ URL::to('block') }}">
                  <i class="icon-folder-open"></i> 
                  <span class="title">Блокууд</span>
                  @if ($active == 'block')
                      <span class="selected"></span>
                  @endif
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->

      <!-- BEGIN PAGE -->
      <div class="page-content">

         @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
         @endif
         
         @if (Session::has('errors'))
            <div class="alert alert-info">
               <?php foreach ($errors->all('<p>:message</p>') as $message): ?>
               <?php echo $message;?>
               <?php endforeach; ?>
            </div>
         @endif
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               @if ( isset($title) )
               <h3 class="page-title">
                  {{{ $title }}}
                  <small>@yield('subtitle')</small>
               </h3>
               @endif
               
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="{{ URL::to('/') }}">Удирдлагын самбар</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  @if ( isset($breadcrumb) && !empty($breadcrumb) )
                     <?php $last = array_pop($breadcrumb);?>

                     @foreach( $breadcrumb as $crumb)
                     <li>
                        <a href="{{ URL::to($crumb->link) }}">
                           {{ $crumb->text }}
                        </a>
                        <i class="icon-angle-right"></i>
                     </li>
                     @endforeach

                     <li>
                        <a href="{{ URL::to($last->link) }}">
                           {{ $last->text }}
                        </a>
                     </li>
                  @endif
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->

         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-12 col-sm-12">
               @section('content')
                  Content area
               @show
            </div>
         </div>
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         <?php echo date("Y");?> &copy; Prosperity Properties By Cpt.mn
      </div>
      <div class="footer-tools">
         <span class="go-top"> <i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->

   <!--[if lt IE 9]>
   {{ HTML::script('assets/plugins/respond.min.js') }}
   {{ HTML::script('assets/plugins/excanvas.min.js') }}
   <![endif]--> 

   @if( isset($js) &&  count($js) > 0 )
      @foreach( $js as $item )
         {{ HTML::script($item) }}
      @endforeach
   @endif

   {{ HTML::script('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}
   {{ HTML::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
   {{ HTML::script('assets/scripts/app.js') }}
   {{ HTML::script('assets/scripts/index.js') }}
   {{ HTML::script('assets/scripts/tasks.js') }}
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>