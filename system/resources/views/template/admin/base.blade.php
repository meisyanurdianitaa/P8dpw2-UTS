<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

   <!-- Bootstrap Styles-->
    <link href="{{url('/public')}}/admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{url('/public')}}/admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{url('/public')}}/admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{url('/public')}}/admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="{{url('public')}}/admin/assets/js/jquery.js" type="text/javascript"></script>
    <script src="{{url('public')}}/admin/assets/js/bootstrap.js" type="text/javascript"></script>  
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('public')}}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<!-- Bootstrap core CSS -->
@include("template.admin.section.assets")
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include("template.admin.section.header")
      <div class="main-sidebar">
        @include("template.admin.section.sidebar")
      </div>

      <!-- Main Content -->
      <div class="main-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @include('template.admin.utils.notif')
          </div>
        </div>
      </div>
       @yield('content')
        </section>
      </div>
      @include("template.admin.section.footer")
    </div>
  </div>

@include("template.admin.section.js")
</body>
</html>
