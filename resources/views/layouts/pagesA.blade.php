<!DOCTYPE html>
<html lang="en">
@include('includes.headA')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i></i> <span>Rent Car Admin</span></a>
            </div>

            <div class="clearfix"></div>
            @include('includes.profile')
           

            <br />
            @include('includes.sidebar')

            @include('includes.buttons')
          </div>
        </div>
        @include('includes.top')
        @yield('content')

        @include('includes.footercontent')
        @include('includes.footerA')

 

  </body>
</html>