@extends('backend.layouts.master')
@section('title', 'Dashboard | Admin UserCrearte')
@section('admin-content')


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create User</h3>

           

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>            
            <div class="card-body">


                {{-- Show validation error messages --}}
                @include('backend.layouts.partials.messages')

              <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
               

              <div class="row">
                <div class="col">
                  <label for="inputName">Name
                    <span class="text-danger">*</span>
                  </label>
                  <input type="text" id="inputName" class="form-control" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                </div>

                <div class="col">
                  <label for="username">
                    User Name (Optional - auto generated)
                    <span class="text-info"> optional </span>
                </label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="{{ old('username') }}">
                
              </div>
            </div>
            

         
            <div class="form-group">
                <label for="inputName">Email 
                  <span class="text-danger">*</span>
                </label>
                <input type="email" id="inputName" class="form-control" name="email" placeholder="Enter Email" value="{{old ('email') }}">
            </div>
              
            <div class="form-group">
              <label for="password">
                Phone_no
                <span class="text-danger">*</span>
            </label>
                <input type="number" id="inputName" class="form-control col-6" name="phone_no" placeholder="phone_no" value="{{ old('phone_no') }}">
            </div>
            
         


          <div class="form-group">
              <label for="password">
                  Password
                  <span class="text-danger">*</span>
              </label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>



          <div class="form-group">
            <label for="designation_id">
                Designation
                <span class="text-danger">*</span>
            </label>
            <select name="designation_id" id="designation_id" class="form-control col-6">
                <option value="">Select</option>
                @foreach ($designations as $designation)
                    <option value="{{ $designation->id }}" {{ old('designation_id') == $designation->id ? 'selected' : '' }}>{{ $designation->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
          <label for="present_address">Present Address
              <span class="text-info">(optional)</span>
          </label>
          <input type="text" class="form-control" name="present_address" id="present_address" placeholder="Enter Present Address" value="{{ old('present_address') }}">
      </div>


      <div class="form-group">
        <label for="parmanent_address">Permanent Address
            <span class="text-info">(optional)</span>
        </label>
        <input type="text" class="form-control" name="parmanent_address" id="parmanent_address" placeholder="Enter Parmanent Address" value="{{ old('parmanent_address') }}">
    </div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="status">Status
          <span class="text-danger">*</span>
      </label>
      <select name="status" id="status" class="form-control ">
          <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
          <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
      </select>
  </div>


  </div>

<div class="col">

  <label for="image">Profile
    <span class="text-info">(optional)</span>
 </label>
  <div class="form-group">
  
    <div class="custom-file">
      <input type="file" class="custom-file-input" id="customFileLang" lang="es"  name="image" id="image">
      <label class="custom-file-label" for="customFileLang">Select</label>
    </div>
  
</div>
         
</div>

</div>

    
   

<button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
</form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
   
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

