<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('/bower/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('/bower/AdminLTE/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css"/>  
    <link href="{{ asset ('/bower/AdminLTE/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset ('/bower/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ asset('/bower/AdminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />  
    <link href="{{ asset('/bower/AdminLTE/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />

  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Header -->
      @include('admin.admin-lte.header')

      <!-- Sidebar -->
      @include('admin.admin-lte.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="page-header">
            @yield('title', 'Заголовок страницы')

            <div class="pull-right">
              @yield('header-buttons')
            </div>
          </h1>
          <!-- You can dynamically generate breadcrumbs here -->
        </section>

        <!-- Main content -->
        <section class="content">          
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('admin.admin-lte.footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <script src="{{ asset ('/bower/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset ('/bower/AdminLTE/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset ('/bower/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset ('/bower/AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.ru.js') }}"></script>
    <script src="{{ asset ('/bower/AdminLTE/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset ('/bower/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

    <script src="{{ asset ('/bower/AdminLTE/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset ('/bower/AdminLTE/dist/js/app.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset ('/bower/bootstrap-validator/js/validator.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset ('/js/admin/main.js') }}" type="text/javascript"></script>
    
  </body>
</html>