@extends('layout.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <table>
        <thead>
         <tr>
           <th> ID</th>
           <th> Email</th>
            <th> Name</th>
            <th> Action</th>
         </tr>
        </thead>
       <tbody>

       @foreach($users as $user)
{{-- <a href="http://localhost/aptech-php-18-toannn/php/20190628/model/public/users/{{$user->id}}">{{$user->email}}
  --}}

  {{-- <a href={{asset("users/".$user->id)}}>{{$user->email}} </a> --}}

<tr>
<th>{{$user->id}} </th>
<td>{{$user->email}}</td>
<td>{{$user->name}}</td>
<td>
<form action="{{asset('users/'.$user->id)}}" method="GET">
    <button type="submit">Xem Chi Tiet</button>
  </form>
  <form action="{{asset('users/'.$user->id)}}" method="POST">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <button type="submit">Xoa</button>
  </form>
  <form action="{{asset('users/'.$user->id.'/edit')}}" method="GET">
    <button type="submit">edit</button>
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
