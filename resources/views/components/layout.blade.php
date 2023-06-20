<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/welcome.css")}}">
    <title>Document</title>
</head>
<body>
    <nav>
        <h2>Logo</h2>
            @auth
            <span>{{auth()->user()->name}}</span>
            <form action="/create_post" method="GET">
                <button type="submit">Create Post</button>
            </form>
            <form action="/logout" method="GET">
                <button type="submit">logout</button>
            </form>
            @else
                <form action="/login" method="POST">
                    @csrf
                    <input type="email" name="email_login" id="email_login" value="{{old('email_login')}}">
                    <input type="password" name="password_login" id="password_login" value="{{old('password_login')}}">
                    <button type="submit">Login</button>
                </form>
            @endauth

    </nav>
    <main id="layout_register">
        {{$slot}}
    </main>

    <footer>
        <p>copy right 2023</p>
    </footer>
</body>
</html>