
@extends('layout.master')
@section('content')

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr class="text-center">
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('categories.show',$category->id)}}" method="get">
                <button class="btn btn-sm btn-primary   rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('categories.edit',$category->id)}}" method="get">
                <button class="btn btn-sm btn-warning   rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('categories.destroy',$category->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger   rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>
@endsection
