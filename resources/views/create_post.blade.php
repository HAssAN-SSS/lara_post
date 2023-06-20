<x-layout>
    @auth
        
        <form action="/create_post" method="POST" id="create_post_form">
            @csrf
            <input type="text" name="post_title" id="post_title" placeholder="title post" value="{{old('post_title')}}">
            @error('post_title')
                <h4>{{$message}}</h4>
            @enderror
            <textarea name="post_desc" id="post_desc" cols="100" rows="10" placeholder="desc post">{{old('post_desc')}}</textarea>
            @error('post_desc')
            <h4>{{$message}}</h4>
        @enderror
            <button type="submit">submit</button>
        </form>
    @endauth
</x-layout>