<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calteta">
    <meta name="author" content="Calteta web team">
	<title>{{$title or "Calteta"}}</title>

	<!-- Stylesheets -->

	<!-- Bootstrap core CSS -->
	{{HTML::style('assets/css/bootstrap.css')}}

	<!-- Font awesome CSS -->
	{{HTML::style('assets/font-awesome/css/font-awesome.css')}}

	<!-- Custom styles DashGum -->
	{{HTML::style('assets/css/style.css')}}
	{{HTML::style('assets/css/style-responsive.css')}}
    
</head>

<body>
	<section id="container">
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">@yield('notif_count')</span>
                        </a>
                        @yield('notif_messages')
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">@yield('inbox_count')</span>
                        </a>
                        @yield('inbox_messages')
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    @yield('top_right')
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered">
              	  <!--  -->

              	  @yield('dp')
              	  </p>
              	  <h5 class="centered">
				  @yield('pro_name')
				  </h5>
              	  
              	  @yield('sidebar')

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	
                  
                      @yield('main-content')
                      
                    
                    				
					
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    
                    	@yield('notifications')
                      
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
      	@yield('footer')
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    {{HTML::script('assets/js/jquery-1.8.3.min.js')}}
    {{HTML::script('assets/js/bootstrap.min.js')}}
   
    <!--common script for all pages-->
    {{HTML::script('assets/js/common-scripts.js')}}
    {{HTML::script('assets/js/jquery.dcjqaccordion.2.7.js')}}
    {{HTML::script('assets/js/jquery.scrollTo.min.js')}}
    {{HTML::script('assets/js/jquery.nicescroll.js')}}
    {{HTML::script('assets/js/jquery.sparkline.js')}}
    

	

  </body>
</html>



</body>

</html>






 