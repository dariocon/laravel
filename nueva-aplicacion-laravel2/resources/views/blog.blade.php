@component('components.layout')
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <a href="{{ route('blog.show', $post->id)}}">
            <h4>{{ $post['title'] }}</h4>
        </a>
        <p>{{ $post['body'] }}</p>
    @endforeach
@endcomponent
