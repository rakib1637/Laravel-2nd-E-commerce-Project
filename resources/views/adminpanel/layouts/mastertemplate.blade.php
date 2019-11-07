<!DOCTYPE html>
<html lang="en">


  @include('adminpanel.includes.header')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('adminpanel.includes.navbar')
    @yield('admincontent')
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('adminpanel/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('adminpanel/js/popper.min.js')}}"></script>
    <script src="{{asset('adminpanel/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminpanel/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('adminpanel/js/plugins/pace.min.js')}}"></script>
  </body>
</html>
