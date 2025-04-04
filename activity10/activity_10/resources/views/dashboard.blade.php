<div style="text-align: center; margin-top: 50px;">
    <h1>Welcome to Your Dashboard</h1>
    <p>You are logged in!</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    </div>
