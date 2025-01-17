<x-layout meta-title='Create new animal' meta-description='Form to create a new animal'>
    <form method='POST' action="{{route('animals.store')}}">
      @csrf
        <div class="form-group row">
          <label for="text1" class="col-4 col-form-label">Name</label> 
          <div class="col-8">
            <input id="name" name="name" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="text2" class="col-4 col-form-label">Description</label> 
          <div class="col-8">
            <input id="description" name="description" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
</x-layout>

