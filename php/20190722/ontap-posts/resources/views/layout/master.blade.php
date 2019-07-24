<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('./favicon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <title>Posts CRUD</title>
  
    <!-- Bootstrap core CSS -->
    <link href="{{asset('./css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('./css/styles.css')}}" rel="stylesheet">
  
    <!-- Custom fonts for this template -->
    <link href="{{asset('./css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  
    <!-- Custom styles for this template -->
    <link href="{{asset('./css/clean-blog.min.css')}}" rel="stylesheet">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
     
      <div class="collapse navbar-collapse" id="navbarResponsive">

              <form action="{{route('posts.index')}}" method="get">
                  <button class="btn btn-primary rounded-0 font-weight-bold">Post Home</button>
                </form>
   
      </div>
      <form action="{{route('posts.create')}}" method="get">
        <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
      create Post
        </button>
      </form>
    </div>
  </nav>


<!-- Page Header -->


  <!-- Main Content -->
@section('content') @show
  <hr>

 

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('./js/jquery.min.js')}}"></script>
  <script src="{{asset('./js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
</body>
</html>

