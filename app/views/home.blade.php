@extends('base')

@section('notif_count')
3
@stop


@section('notif_messages')

<ul class="dropdown-menu extended tasks-bar">
    <div class="notify-arrow notify-arrow-green"></div>
    <li>
        <p class="green">You have 4 pending tasks</p>
    </li>
    <li>
        <a href="index.html#">
            <div class="task-info">
                <div class="desc">DashGum Admin Panel</div>
                <div class="percent">40%</div>
            </div>
            <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                    <span class="sr-only">40% Complete (success)</span>
                </div>
            </div>
        </a>
    </li>
    
</ul>

@stop    


@section('inbox_count')              
1
@stop

@section('inbox_messages')
<ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hi mate, how is everything?
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
@stop                      

@section('top_right')
<li><a class="logout" href="login.html">Logout</a></li>
@stop


@section('dp')

<a href="profile.html">
<img src="assets/img/ui-sam.jpg" class="img-circle" width="60">
</a>

@stop

@section('pro_name')

Kousik Satish

@stop

@section('sidebar')

<li class="mt">
  <a class="active" href="index.html">
      <i class="fa fa-dashboard"></i>
      <span>Dashboard</span>
  </a>
</li>

<li class="sub-menu">
  <a href="javascript:;" >
      <i class="fa fa-desktop"></i>
      <span>UI Elements</span>
  </a>
  <ul class="sub">
      <li><a  href="general.html">General</a></li>
      <li><a  href="buttons.html">Buttons</a></li>
      <li><a  href="panels.html">Panels</a></li>
  </ul>
</li>

<li class="sub-menu">
  <a href="javascript:;" >
      <i class="fa fa-cogs"></i>
      <span>Components</span>
  </a>
  <ul class="sub">
      <li><a  href="calendar.html">Calendar</a></li>
      <li><a  href="gallery.html">Gallery</a></li>
      <li><a  href="todo_list.html">Todo List</a></li>
  </ul>
</li>
<li class="sub-menu">
  <a href="javascript:;" >
      <i class="fa fa-book"></i>
      <span>Extra Pages</span>
  </a>
  <ul class="sub">
      <li><a  href="blank.html">Blank Page</a></li>
      <li><a  href="login.html">Login</a></li>
      <li><a  href="lock_screen.html">Lock Screen</a></li>
  </ul>
</li>
<li class="sub-menu">
  <a href="javascript:;" >
      <i class="fa fa-tasks"></i>
      <span>Forms</span>
  </a>
  <ul class="sub">
      <li><a  href="form_component.html">Form Components</a></li>
  </ul>
</li>
<li class="sub-menu">
  <a href="javascript:;" >
      <i class="fa fa-th"></i>
      <span>Data Tables</span>
  </a>
  <ul class="sub">
      <li><a  href="basic_table.html">Basic Table</a></li>
      <li><a  href="responsive_table.html">Responsive Table</a></li>
  </ul>
</li>
<li class="sub-menu">
  <a href="javascript:;" >
      <i class=" fa fa-bar-chart-o"></i>
      <span>Charts</span>
  </a>
  <ul class="sub">
      <li><a  href="morris.html">Morris</a></li>
      <li><a  href="chartjs.html">Chartjs</a></li>
  </ul>
</li>

@stop


@section('notifications')

<!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>

@stop


@section('footer')
<div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>

@stop