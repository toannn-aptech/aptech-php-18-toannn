@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        
        
          @foreach($posts as $post)

            

          <div class="post-preview">
              <a href="#">
                <h2 class="post-title">
                    {{$post->id}}. {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                    {{$post->slug}}
                </h3>
                <h4 class="post-subtitle">
                    {{$post->description}}
                </h4>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                on {{$post->created_at}} </p>
            </div>
            <form action="{{route('posts.show',$post->id)}}" method="get">
                <button class="btn btn-sm btn-primary   rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('posts.edit',$post->id)}}" method="get">
                <button class="btn btn-sm btn-warning   rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('posts.destroy',$post->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger   rounded-0">
                  Delete
                </button>
              </form>
            <hr>
          @endforeach

          <div class="d-flex">{{$posts->links()}}</div>


       
      </div>
    </div>
  </div>

@endsection