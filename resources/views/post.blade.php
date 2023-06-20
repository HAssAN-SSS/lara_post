<x-layout>
    <h1>{{$post->post_title}}</h1>
    <div id="post_data">
        posted by <a href="#">{{$post->pizza->name}}</a> on {{$post->updated_at->format('Y/m/d')}}
    </div>
    <p>{!!$post->post_desc!!}</p>
</x-layout>