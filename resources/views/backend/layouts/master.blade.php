<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Admin | Dashboard ')</title>
  @include('backend.layouts.partials.stylesheet')
  @yield('stylesheet')
</head>




@include('backend.layouts.partials.header')
@include('backend.layouts.partials.rightnavarbar')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  

@yield('admin-content')




@include('backend.layouts.partials.siderbar')
@include('backend.layouts.partials.footer')
@include('backend.layouts.partials.scripts')
@yield('scripts')
</body>
</html>
