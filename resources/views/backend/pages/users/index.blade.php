@extends('backend.layouts.master')
@section('title', 'Dashboard | User List')
@section('admin-content')




    <!-- /.card -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">User List</h3>

        <div class="card-tools">


          {{-- Show validation error messages --}}
          @include('backend.layouts.partials.messages')
          
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              
              <th>Name</th>
              <th>User Image</th>
              <th>Email</th>
              <th>Phone No</th>
              <th>Designation</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

       
         @foreach ($users as $user)
             
         
             
            <tr>
              <td>{!! $user->name !!}</td>

              <td>
                <a href="{{ asset('images/users/'.$user->image) }}" target="_blank">
                    <img src="{{ asset('images/users/'.$user->image) }}"  style="width: 50px"   class="rounded-circle" />
                </a>
            </td>

              <td>{!! $user->email!!}</td>
              <td>{!! $user->phone_no	!!}</td>
              <td>{{ $user->designations->name }}</td>

              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-outline-success">Edit</a>
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteUserModal{{ $user->id }}">
                    Delete
                </button>
                </div>
              </td>

              @endforeach
          </tbody>
        </table>

        @foreach ($users as $user)
        <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Are you sure to delete ?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{ route('admin.users.delete', $user->id) }}" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger ml-2">
                            Confirm, Delete
                        </button>
                        <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach



      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

@endsection

