aaaaaa
<form action="{{route('users.store')}}" method="post">
        <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
        <div class="form-group ">
          <label >name</label>
          <input type="text" id="name" placeholder="Name" name="name">
        </div>
        <div >
          <label>email</label>
          <input type="email"  id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group ">
          <label>password</label>
          <input type="password" id="password" placeholder="Password" name="password">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn ">
            confirm
          </button>
        </div>
      </form>
