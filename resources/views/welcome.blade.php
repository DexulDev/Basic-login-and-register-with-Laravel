<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi</title>
</head>
<body>
    @if(session('username'))
        <p>Hi!, {{ session('username') }}</p>
    @endif

    <br>
    Welcome, you have successfully logged in, but unfortunately I don't know how to create a frontend, so here is 😁
    <br>
    <form id="logout-form" action="{{ route('login.logout') }}" method="POST" style="display: none;">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </button>
    </form>
</body>
</html>
