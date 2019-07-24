<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<form action="{{asset('categories')}}" method="get">
              <button class="btn btn-primary rounded-0 font-weight-bold my-3">Home</button>
            </form>

  <form action="{{route('categories.store')}}" method="post">

        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}

        <div class="form-group ">
          <label >Name</label>
          <input type="text" id="name" placeholder="name" name="name">
        </div>

          <button type="submit" class="btn btn-success">
          Submit
          </button>

      </form>

</body>

</html>
