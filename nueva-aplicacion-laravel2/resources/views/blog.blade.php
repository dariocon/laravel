@component('components.layout')
    <h1>Blog</h1>

    <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('blog.create') }}'">Add post</button>

    @foreach ($posts as $post)
        <a href="{{ route('blog.show', $post->id)}}">
            <h4>{{ $post['title'] }}</h4>
        </a>
        <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('blog.edit', $post) }}'">Edit post</button>

        <p>{{ $post['body'] }}</p>
    @endforeach
@endcomponent
