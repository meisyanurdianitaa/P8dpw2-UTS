@php
function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">FAEYZA</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
    <li class="{{checkRouteActive('admin/dashboard')}}"><a class="nav-link" href="{{url('admin/dashboard')}}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
     <li class="{{checkRouteActive('admin/article')}}"><a class="nav-link" href="{{url('admin/article')}}"><i class="far fa-square"></i> <span>Artikel</span></a></li>
     <li class="{{checkRouteActive('admin/coment')}}"><a class="nav-link" href="{{url('admin/coment')}}"><i class="far fa-square"></i> <span>Komentar</span></a></li>
    <li class="{{checkRouteActive('admin/user')}}"><a class="nav-link" href="{{url('admin/user')}}"><i class="far fa-square"></i> <span>User</span></a></li>
    <li class="{{checkRouteActive('home')}}"><a class="nav-link" href="{{url('home')}}"><i class="far fa-square"></i> <span>Blog</span></a></li> 
    </ul>
</aside>
