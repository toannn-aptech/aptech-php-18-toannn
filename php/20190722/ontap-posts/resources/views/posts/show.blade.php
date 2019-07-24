@extends('layout.master')
@section('content')
<div class="container mt-3">
  <div class="row">
    <div class="col-12">

      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Title</th>
            <th scope="col" class="">Slug</th>
            <th scope="col" class="">Description</th>
            <th scope="col" class="">Content</th>
            <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->description}}</td>
            <td>{!!$post->content!!}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td class="d-flex border-0 align-items-center">
              <form action="{{route('posts.edit',$post->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('posts.destroy',$post->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger mx-2 rounded-0">
                  Delete
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
