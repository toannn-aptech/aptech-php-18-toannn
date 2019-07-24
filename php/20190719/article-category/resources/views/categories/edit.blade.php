@extends('layout.master')
@section('content')

<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('categories.update',$category->id)}}" method="post">
        <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">name</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="name" name="name" value="{{$category->name}}">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection
