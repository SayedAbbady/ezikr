<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>@yield('title','unknowen')</title>
  <link rel="icon" type="image/png" href="{{asset("assets/images/logo.png")}}" sizes="32x32">

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset("assets/fonts/linear-fonts.css")}}">
  

  <!-- CSS Files -->
  <link href="{{asset("assets/dash/css/bootstrap.min.css")}}" rel="stylesheet" />
  <link href="{{asset("assets/dash/css/paper-dashboard.min.css")}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  
  
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  <link href="{{asset("assets/dash/demo/demo.css")}}" rel="stylesheet" />
  <link href="{{asset("assets/dash/custom/css/snackbar.min.css")}}" rel="stylesheet" />
  <link href="{{asset("assets/dash/custom/css/index.css")}}" rel="stylesheet" />
  <!-- Extra details for Live View on GitHub Pages -->
<body class="">
  
    <div class="wrapper">
      @include('admin.layouts.slider')
      <div class="main-panel">
        @include('admin.layouts.navbar')

        @yield('content')
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            
            <div class="credits ml-auto">
              <span class="copyright">
                © 2020 Sayed Khaled
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  
  <!--   Core JS Files   -->
  <script src="{{asset("assets/dash/js/core/jquery.min.js")}}"></script>
  <script src="{{asset("assets/dash/js/core/popper.min.js")}}"></script>
  <script src="{{asset("assets/dash/js/core/bootstrap.min.js")}}"></script>
  <script src="{{asset("assets/dash/js/plugins/perfect-scrollbar.jquery.min.js")}}"></script>
  <!--  Google Maps Plugin    -->
  <!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script> --}}
  <script>
    $(document).ready(function() {
      $('#summernote,#summernoteedit').summernote();
    });
  </script>
  {{-- <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script> --}}
  <!-- Chart JS -->
  <script src="{{asset("assets/dash/js/plugins/chartjs.min.js")}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset("assets/dash/js/plugins/bootstrap-notify.js")}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset("assets/dash/js/paper-dashboard.min.js")}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('assets/dash/custom/js/snackbar.min.js')}}"></script>
  <script src="{{asset("assets/dash/demo/demo.js")}}"></script>
  <script src="{{asset('assets/dash/custom/js/charts.js')}}"></script>
  <script src="{{asset('assets/dash/custom/js/index.js')}}"></script>
  <script src="{{asset('assets/dash/custom/js/ajax.js')}}"></script>
</body>

</html>
