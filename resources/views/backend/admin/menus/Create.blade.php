@extends('backend.layouts.master')
@section('title', 'Menu | Admin')
@section('admin-content')

<section class="content">

<div class="d-flex justify-content-center">
    <div class="card card-primary col-md-6">
        <div class="card-header ">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
            @csrf


          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name" name="name">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Price</label>
              <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" min="0.00" max="10000.00" step="0.01" id="price" name="price">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image">
                  <label class="custom-file-label" name="image"  for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Decription</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              </div>


             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Catogory Name:</label>
                <select class="user-form selectpicker show-tick form-control" data-live-search="true" id="categories" name="categories[]">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>

               </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

    </div>

{{--  ----  --}}

</section>
</div>

@endsection
