<x-layout>
    @auth
        @if (session('success'))
            <h3>{{session('success')}}</h3>
        @endif
        
        <h1>welcome <b> {{auth()->user()->name}}</b></h1>
    @else
        <form action="/register" id="register_form" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="name">
            @error('name')
                <h5>{{$message}}</h5>
            @enderror
            <input type="email" name="email" id="email" placeholder="email">
            @error('email')
                <h5>{{$message}}</h5>
            @enderror
            <input type="password" name="password" id="password" placeholder="password">
            @error('password')
                <h5>{{$message}}</h5>
            @enderror
            <button type="submit">submit</button>

        </form>
    @endauth
</x-layout>
