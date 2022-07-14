<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset ('assets2/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset ('assets2/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset ('assets2/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset ('assets2/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>
<script type="text/javascript">
function confirmDelete () {
  if (window.confirm('Are you sure you want to delete') == true) {
    return true;
  }
  return false;
}
</script>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      @include('admin.blocklte.navbar')

      <div class="main-sidebar sidebar-style-2">
        @include('admin.blocklte.sidebar')

      </div>

      <!-- Main Content -->

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blank Page |</h1>       
          </div>
          @yield('content')
            <!-- /.card-footer-->
          </div>
          <div class="section-body">
          </div>
        </section>
      </div>

      @include('admin.blocklte.footer')

    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset ('assets2/modules/jquery.min.js') }}"></script>
  <script src="{{ asset ('assets2/modules/popper.js') }}"></script>
  <script src="{{ asset ('assets2/modules/tooltip.js') }}"></script>
  <script src="{{ asset ('assets2/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset ('assets2/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset ('assets2/modules/moment.min.js') }}"></script>
  <script src="{{ asset ('assets2/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset ('assets2/js/scripts.js') }}"></script>
  <script src="{{ asset ('assets2/js/custom.js') }}"></script>
{{-- @yield('content') --}}

{{-- <script src="{{ asset ('jquery-3.6.0.min.js')}}"></script> --}}
{{-- <script type="text/javascript">
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

    $(document).ready(function(){
      $("#clickMeNow").click(function(){
        $.ajax({
          type: "GET",url: '{{ route('admin.category.getDataForAjax') }}'
          dataType: "html",
          success: function (resource) {
              $(".noidung").html(response)
          }
        });
      })
    });

</script> --}}
</body>
</html>