<x-layout meta-title='Create new post' meta-description='Form to create a new post'>
    <form method='POST' action="{{route('blog.update', parameters: $post)}}">
      @csrf
      @method('PATCH')
      @include('animals.form-field')
      </form>
</x-layout>

