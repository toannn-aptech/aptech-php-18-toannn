<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Post CRUD</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
  <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
</head>

<body>
      <form action="{{asset('categories')}}" method="get">
              <button class="btn btn-primary rounded-0 font-weight-bold my-3">Post Home</button>
      </form>


  <form action="{{route('posts.store')}}" method="post">

        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}

        <div class="form-group ">
          <label >title</label>
          <input type="text" id="title" placeholder="title" name="title">
        </div>
        <div >
          <label>slug</label>
          <input type="text"  id="slug" placeholder="slug" name="slug">
        </div>
        <div class="form-group ">
          <label>description</label>
          <input type="text" id="description" placeholder="description" name="description">
        </div>
       

        <textarea name="content" id="content">This is some sample content:</textarea>


          <button type="submit" class="btn ">
            submit
          </button>

      </form>

</body>
<script>
  CKEDITOR.replace('content', {
    filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
    filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"});
</script>


</html>
