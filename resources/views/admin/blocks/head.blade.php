<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>@yield('module', 'Dashboard') | @yield('action')</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}" />
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}" />
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<link rel="icon" type="image/jpg" href="{{asset('assets/images/logo.jpg')}}">
<meta name="csrf-token" content="{{ csrf_token() }}">
  <script type="text/javascript">
    function confirmDelete () {
      if (window.confirm('Are you sure you want to delete')) {
          return true;
      }
      return false;
    }
  </script>
  <script type="text/javascript">
    function delete () {
      if (window.confirm('okok')) {
          return true;
      }
      return false;
    }
  </script>
