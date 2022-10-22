@extends('backend.layouts.master')
@section('title', 'Menu | Admin')
@section('admin-content')


 {{-- Show validation error messages --}}
 @include('backend.layouts.partials.messages')
 <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Menu
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

                    <th style="width: 10%">
                       Name
                    </th>

                    <th style="width: 10%">
                       Price
                    </th>

                     <th >
                        Description
                    </th>
                        <th >
                        Photo
                       </th>
                </tr>

            </thead>
            <tbody>


@foreach ($menus as $key=>$menu)


                     <tr>
                     <td>
                        {{$key+1}}
                      </td>
                      <td>
                        {{ $menu->name}}
                        </td>
                        <td>
                            {{ $menu->price}}
                         </td>
                         <td>
                            {{ $menu->description}}
                          </td>
                          <td>
                          <ul class="list-inline">
                          <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('images/Menu/'.$menu->image) }}">
                            </li>

                            {{--  <img src="{{Storage::url($menu->image)}}" class"w-16 h-16 round">   --}}


                    </ul>
                    </td>
                    </td>
                       <td class="project-actions text-right">
                           <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#EditleModal{{ $menu->id}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                       <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#DeleteModel{{ $menu->id}}">
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



{{--  ----  --}}

</section>
</div>




{{--  Add menu Modal  --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
             @csrf

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Menus Name!" required >
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required >
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="number" class="form-control" id="recipient-name" name="price" placeholder="price" required >
              </div>



            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Description:</label>
                <textarea  class="form-control" id="recipient-name" name="description" placeholder="Description" required ></textarea>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
    </div>
  </div>





{{--  Update Menu Modal  --}}
@foreach ($menus as $key=>$menu)

<div class="modal fade" id="EditleModal{{ $menu->id}}" tabindex="-1" aria-labelledby="EditleModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="EditleModal">Edit Menu </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">

            <form method="POST" action="{{ route('admin.menus.update',$menu->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')


            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Menus Name!" required  value="{{ $menu->name}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image:</label>

                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" {!! $menu->image !!}>

              </div>

              <p>
                @if (!is_null($menu->image))
                <img src="{{ asset('images/Menu/'.$menu->image) }}" alt="" style="width: 100px">
                @endif
            </p>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Price:</label>
                <input type="number" class="form-control" id="recipient-name" name="price" placeholder="price" required  value="{{ $menu->price }}">
              </div>



            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Description:</label>
                <textarea  class="form-control" id="recipient-name" name="description" placeholder="Description" required >{{ $menu->description }}</textarea>
            </div>


           {{--  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Catogory Name:</label>
            <select class="user-form selectpicker show-tick form-control" data-live-search="true" id="categories" name="categories[]">
            @foreach ($categories as $category)
            <option value="{{ $category->id}} @selected($menu->categories->contains($category))">

                    {!! $category->name !!}

             </option>
            @endforeach
            </select>
           </div>  --}}



           <div class="form-group"
            <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
            <div class="mt-3">

                <select id="categories" name="categories[]" class="form-multiselect block w-full mt-12"
                    multiple>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($menu->categories->contains($category))>
                        {{ $category->name }}</option>
                    @endforeach
                </select>

            </div>
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


@foreach ($menus as $key=>$menu)

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
         Delete this ithem!
        </div>
        <div class="modal-footer">
            <form method="POST" action="{{ route('admin.menus.destroy',$category->id)}}" style="display: inline">
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
@endsection

