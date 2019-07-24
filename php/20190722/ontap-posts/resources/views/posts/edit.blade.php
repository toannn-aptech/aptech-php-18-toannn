@extends('layout.master')
@section('content')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckfinder/ckfinder.js')}}"></script>

<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('posts.update',$post->id)}}" method="post">
        <input type="hidden" name="_method" value="put" /> {{csrf_field()}}
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">title</label>
          <input type="text" class="form-control rounded-0" id="title" placeholder="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">slug</label>
          <input type="text" class="form-control rounded-0" id="slug" placeholder="slug" name="slug" value="{{$post->slug}}">
        </div>
        <div class="form-group ">
          <label>description</label>
          <input type="text" id="description" placeholder="description" name="description" value="{{$post->description}}">
        </div>


        <textarea name="content" id="content">{{$post->content}}</textarea>


        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
            save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>



<script>
  CKEDITOR.replace('content', {
    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
</script>

@endsection
