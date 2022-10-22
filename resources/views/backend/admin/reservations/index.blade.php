@extends('backend.layouts.master')
@section('title', 'Reservation | Admin')
@section('admin-content')






 {{-- Show validation error messages --}}
 @include('backend.layouts.partials.messages')
 <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            New Reservation
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
                    <th style="width: 10%">
                       No
                    </th>

                    <th style="width: 10%"> Name </th>
                    <th style="width: 10%">  Email </th>

                    <th style="width: 10%"> Date </th>
                    <th > Table </th>
                     <th > Guests </th>


                </tr>

            </thead>
            <tbody>


@foreach ($reservation as $key=>$reservations)


                     <tr>
                     <td>
                    {{$key+1}}
                      </td>
                      <td>
                        {{ $reservations->first_name }} {{ $reservations->last_name }}
                        </td>
                        <td>
                            {{ $reservations->email}}
                         </td>

                         <td>
                            {{ $reservations->res_date}}
                          </td>

                          <td>
                            {{ $reservations->table_id}}
                          </td>

                          <td>
                            {{ $reservations->	guest_number}}
                          </td>

                          <td>
                          <ul class="list-inline">





                    </ul>
                    </td>
                    </td>
                       <td class="project-actions text-right">
                           <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#updateModal{{ $reservations->id}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                       <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#DeleteModel{{ $reservations->id}}">
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




{{--  Add Reservation Modal  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Resevation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('admin.reservations.store')}}"  id="newModalForm">
             @csrf

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">First_name:</label>
              <input type="text" class="form-control" id="first_name" name="first_name"  placeholder="Enter first_name" >

            </div>



            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Last_name:</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name" required >
            </div>


            <div class="form-group">
              <label for="recipient-name" class="col-form-label">	Email:</label>
              <input type="email" class="form-control" id="	email" name="email" placeholder="Email" required >
            </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tel_number:</label>
                <input type="number" class="form-control" id="tel_number" name="tel_number" placeholder="tel_number" required >
              </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Reservation Date:</label>
                <input type="datetime-local" class="form-control" id="res_date" name="res_date" placeholder="res_date" required >
              </div>


            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Guest Number:</label>
                <input type="number" class="form-control" id="guest_number" name="guest_number" placeholder="Guest Number" required >
              </div>


              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Table_id:</label>
            <select id="table_id" name="table_id" class="form-control">


                    @foreach ($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->name }}
                        ({{ $table->guest_number }} Guests)
                    </option>
                   @endforeach

            </select>
            </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"  id="formSubmit">Store</button>
        </div>
    </form>
      </div>
    </div>
  </div>











{{--  Add reservations Update Modal  --}}
@foreach ($reservation as $key=>$reservations)

<div class="modal fade" id="updateModal{{ $reservations->id}}" tabindex="-1" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModal">Edit Revation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('admin.reservations.update',$reservations->id)}}"  id="newModalForm">
                @csrf
                @method('PUT')

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">First_name:</label>
              <input type="text" class="form-control" id="first_name" name="first_name"  placeholder="Enter first_name"  value="{{ $reservations->first_name }}">

            </div>



            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Last_name:</label>
              <input type="text" class="form-control" id="last_name" name="last_name" placeholder="last_name" required  value="{{ $reservations->last_name}}">
            </div>


            <div class="form-group">
              <label for="recipient-name" class="col-form-label">	Email:</label>
              <input type="email" class="form-control" id="	email" name="email" placeholder="Email" required value="{{ $reservations->email}}">
            </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tel_number:</label>
                <input type="number" class="form-control" id="tel_number" name="tel_number" placeholder="tel_number" required  value="{{$reservations->tel_number}}">
              </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Reservation Date:</label>
                <input type="datetime-local" class="form-control" id="res_date" name="res_date" placeholder="res_date" required  value="{{ $reservations->res_date}}">
              </div>


            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Guest Number:</label>
                <input type="number" class="form-control" id="guest_number" name="guest_number" placeholder="Guest Number" required  value="{{ $reservations->guest_number}}">
              </div>


              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Table_id:</label>
            <select id="table_id" name="table_id" class="form-control">

               @foreach ($tables as $table)
               <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                   {{ $table->name }}
                   ({{ $table->guest_number }} Guests)
               </option>
              @endforeach
            </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success"  id="formSubmit">Store</button>
        </div>
    </form>
      </div>
    </div>
  </div>

@endforeach




  {{--  Delete Modal  --}}


  @foreach ($reservation as $key=>$reservations)

  <div class="modal fade" id="DeleteModel{{ $reservations->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           Delete this ithem!
          </div>
          <div class="modal-footer">
              <form method="POST" action="{{ route('admin.reservations.destroy',$reservations->id)}}" style="display: inline">
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






</div>
@endsection


