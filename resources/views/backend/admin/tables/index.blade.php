@extends('backend.layouts.master')
@section('title', 'Menu | Admin')
@section('admin-content')

<section class="content">
 {{-- Show validation error messages --}}
 @include('backend.layouts.partials.messages')
 <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tableModal">
            Add Table
          </button>
          {{--  <a href="{{ url('admin/menus/create') }}" class=" btn btn-primary">add Menus</a>  --}}

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 20%">
                       No
                    </th>

                    <th style="width: 20%">
                       Name
                    </th>

                    <th style="width: 10%">
                        guest_number
                    </th>

                     <th >
                        location
                    </th>
                    <th >
                        status
                    </th>


                </tr>

            </thead>
            <tbody>


@foreach ($table as $key=>$tables)


                     <tr>
                     <td>
                      {!! $key+1 !!}
                      </td>
                      <td>
                        {{ $tables->name}}
                        </td>
                        <td>
                            {{ $tables->guest_number}}
                         </td>

                         <td>
                            {{ $tables->location->name }}
                          </td>


                         <td>
                            {{ $tables->status->name }}
                          </td>





                    </td>
                    </td>
                       <td class="project-actions text-right">

                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#EdittableModal{{ $tables->id}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                       <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#DeleteModel{{ $tables->id}}">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>

                @endforeach


            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </section>

  {!! $table->withQueryString()->links('pagination::bootstrap-4')!!}







{{--  Add Table Modal  --}}
<div class="modal fade" id="tableModal" tabindex="-1" aria-labelledby="tableModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tableModal">Add Table</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('admin.tables.store') }}" >
             @csrf

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Name!" required >
            </div>



              <div class="form-group">
                <label for="recipient-name" class="col-form-label">guest_number:</label>
                <input type="number" class="form-control" id="guest_number" name="guest_number" placeholder="guest_number" required >
              </div>


             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Status:</label>
                <select id="status"  name="status" class="form-control">
                    <option id="status" name="status">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                          @endforeach

                    </option>
                </select>
                </div>



            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Location:</label>
            <select id="location" name="location" class="form-control">
                <option id="location" name="location">
                    @foreach (App\Enums\TableLocation::cases() as $location)
                    <option value="{{ $location->value }}">{{ $location->name }}</option>
                   @endforeach
                </option>
            </select>
            </div>



           </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>


{{--  editTable Modml  --}}



@foreach ($table as $key=>$tables)

<div class="modal fade" id="EdittableModal{{ $tables->id}}" tabindex="-1" aria-labelledby="EdittableModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tableModal">Add Table</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('admin.tables.update',$tables->id) }}" >
                @csrf
                @method('PUT')

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" value="{{$tables->name}}" placeholder="Name!" required >
            </div>



              <div class="form-group">
                <label for="recipient-name" class="col-form-label">guest_number:</label>
                <input type="number" class="form-control" id="guest_number" name="guest_number" placeholder="guest_number" required value="{{$tables->guest_number}}">
              </div>

               <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                        <select id="status" name="status" class="form-control">


                                @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>
                                            {{ $status->name }}</option>
                                 @endforeach

                        </select>
                        </div>



              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Location:</label>
            <select id="location" name="location" class="form-control">

                    @foreach (App\Enums\TableLocation::cases() as $location)
                    <option value="{{ $location->value }}"@selected($table->location->value == $location->value)>
                        {{ $location->name }}</option>
                   @endforeach

            </select>
            </div>




           </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
      </div>
    </div>
  </div>


@endforeach









 {{--  Delete Modal  --}}


 @foreach ($table as $key=>$menu)

 <div class="modal fade" id="DeleteModel{{ $menu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">

          Do you Want Delete this ithem ?

         </div>
         <div class="modal-footer">
             <form method="POST" action="{{ route('admin.tables.destroy',$menu->id)}}" style="display: inline">
                 @csrf
                 @method('DELETE')
           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           <button type="submit" class="btn btn-outline-danger ml-2">
             Confirm, Delete
         </button>
           <form>
         </div>
       </div>
     </div>
   </div>

   @endforeach









{{--  -----------  --}}



</section>
</div>



@endsection

