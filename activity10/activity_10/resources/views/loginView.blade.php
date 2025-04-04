<div>
<form method="POST" action="/loggingIn">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" required>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
<div>Click <a href="/register">here</a> to register  </div>

</div>
