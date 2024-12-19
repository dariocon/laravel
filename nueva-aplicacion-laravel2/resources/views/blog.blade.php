@component('components.layout')
    <h1>Blog</h1>
@foreach ($posts as $post)
<h4>
    {{$post['title']}}

</h4>

<p>{{$post['body']}}</p>


@endforeach

@endcomponent