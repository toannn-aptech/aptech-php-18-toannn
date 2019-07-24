
@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        
        
          @foreach($articles as $article)

            @foreach($article->categories as $category)
              <p>{{$category->name}}</p>
            @endforeach

          <div class="post-preview">
              <a href="post.html">
                <h2 class="post-title">
                    {{$article->id}}. {{$article->title}}
                </h2>
                <h3 class="post-subtitle">
                    {{$article->title_slug}}
                </h3>
                <h4 class="post-subtitle">
                    {{$article->description}}
                </h4>
              </a>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap {{$article->category}}</a>
                on {{$article->created_at}} </p>
            </div>
            <form action="{{route('articles.show',$article->id)}}" method="get">
                <button class="btn btn-sm btn-primary   rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('articles.edit',$article->id)}}" method="get">
                <button class="btn btn-sm btn-warning   rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('articles.destroy',$article->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger   rounded-0">
                  Delete
                </button>
              </form>
            <hr>
          @endforeach

          <div class="d-flex justify-content-center">{{$articles->links()}}</div>

        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Man must explore, and this is exploration at its greatest
            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 18, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Science has not yet mastered prophecy
            </h2>
            <h3 class="post-subtitle">
              We predict too much for the next year and yet far too little for the next ten.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on August 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              Failure is not an option
            </h2>
            <h3 class="post-subtitle">
              Many say exploration is part of our destiny, but it’s actually our duty to future generations.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on July 8, 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

{{-- <div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
                <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Title</th>
            <th scope="col" class="">Title_slug</th>
            <th scope="col" class="">Description</th>
            <th scope="col" class="">Content</th>
          </tr>
        </thead>
        <tbody>
          @foreach($articles as $article)
          <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->title_slug}}</td>
            <td>{{$article->description}}</td>
            <td>{{$article->content}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('articles.show',$article->id)}}" method="get">
                <button class="btn btn-sm btn-primary   rounded-0">
                  Show
                </button>
              </form>
              <form action="{{route('articles.edit',$article->id)}}" method="get">
                <button class="btn btn-sm btn-warning   rounded-0">
                  Edit
                </button>
              </form>
              <form action="{{route('articles.destroy',$article->id)}}" method="post">
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
      <div class="d-flex justify-content-center">{{$articles->links()}}</div>
    </div>
  </div>
</div> --}}
@endsection
