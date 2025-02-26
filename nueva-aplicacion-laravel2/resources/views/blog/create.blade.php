<x-layout meta-title='Create new post' meta-description='Form to create a new post'>
    <form method='POST' action="{{route('blog.store')}}">
      @csrf
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Title</label> 
          <div class="col-8">
            <input id="title" name="title" type="text" class="form-control">
            @error('title')
                  <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="text2" class="col-4 col-form-label">Body</label> 
          <div class="col-8">
            <input id="body" name="body" type="text" class="form-control">
            @error('body')
                  <small class="text-danger">{{$message}}</small>
            @enderror
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
</x-layout>

