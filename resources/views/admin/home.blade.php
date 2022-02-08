<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
      <!--partial|sidebar-->
            @include('admin.sidebar')

      <!-- partial|top-navbar -->
            @include('admin.navbar')
        <!-- partial -->

      <!-- partial|main-body start -->
            @include('admin.body')

            @include('admin.script')
  </body>
</html>
