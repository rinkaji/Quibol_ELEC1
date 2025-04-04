<div>
    <form action="/registering" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" id="" value="{{old('name')}}" required autofocus>
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" id="" value="{{old('email')}}" required>
            </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="" value="{{old('password')}}" required>
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" id="" value="{{old('password_confirmation')}}" required>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <div>Click <a href="/login">here</a> to login  </div>
</div>
