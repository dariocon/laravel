<x-layout>
    <h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
</x-layout>


{{-- @component('components.layout')
    <h1>Detalles</h1>
@foreach ($posts as $post)
{{-- <a href="{{ route(name: 'view') }}">    --}}

{{-- <h4>{{$post['title']}}</h4> 

<p>{{$post['body']}}</p> --}}

{{-- <h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>


@endforeach

@endcomponent --}} 

