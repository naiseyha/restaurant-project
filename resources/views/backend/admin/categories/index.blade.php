@extends('backend.layouts.master')
@section('title', 'Category | Admin')
@section('admin-content')

<section class="content">
 {{-- Show validation error messages --}}
 @include('backend.layouts.partials.messages')
 <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Add Category
          </button>

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
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                         Name
                    </th>
                    <th style="width: 30%">
                        Image
                    </th>

                    <th style="width: 20%">
                       Decription
                    </th>

                </tr>

            </thead>
            <tbody>

                @foreach ($categories as $key=>$category)


                <tr>
                    <td>
                        {!! $key+1 !!}
                    </td>
                    <td>

                            {{ $category->name }}


                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{ asset('images/Categories/'.$category->image) }}">
                            </li>

                        </ul>
                    </td>
                    <td class="project_progress">
                        <div>
                            {!! $category->description !!}

                        </div>
                        </div>

                        </td>

                    <td class="project-state">


                    </td>


                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#EditModal{{$category->id}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#DeleteModel{{ $category->id }}">
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




{{--  Add category Modal  --}}




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
             @csrf

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Category Name!" required >
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" required >
              </div>

             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Description:</label>
                <textarea  class="form-control" id="recipient-name" name="description" placeholder="Description" required ></textarea>
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


  {{--  Update Modal --}}

  @foreach ($categories  as $category )

<div class="modal fade" id="EditModal{{$category->id}}" tabindex="-1" aria-labelledby="EditModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.categories.update',$category->id)}}" enctype="multipart/form-data">
             @csrf
             @method('put')

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Category Name!" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" {!! $category->image !!}>

               </div>

               <p>
                @if (!is_null($category->image))
                <img src="{{ asset('images/Categories/'.$category->image) }}" alt="" style="width: 100px">
                @endif
            </p>


             <div class="form-group">
                <label for="recipient-name" class="col-form-label">Description:</label>
                <textarea  class="form-control" id="recipient-name" name="description" placeholder="Description">{{ $category->description }}</textarea>
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


@foreach ($categories  as $category )


{{--  Delete Modale  --}}
<!-- Delete--Modal -->


<div class="modal fade" id="DeleteModel{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Categories </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete ?  {{ $category->name}}
      </div>
      <div class="modal-footer">
        <form method="POST" action="{{ route('admin.categories.destroy',$category->id)}}" style="display: inline">
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

