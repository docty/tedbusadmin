<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="/home" class="logo"><b>Tedbus Admin</b></a>
      <!--logo end-->
       
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
          </li>
        </ul>
      </div>
    </header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" >
        @csrf
         
</form>
 