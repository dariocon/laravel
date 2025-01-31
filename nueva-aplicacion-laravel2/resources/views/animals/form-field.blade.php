<div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Name</label> 
    <div class="col-8">
      <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $animal->name) }}">
      @error('name')
        <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Description</label> 
    <div class="col-8">
      <input id="description" name="description" type="text" class="form-control" value="{{old('description',$animal->description)}}">
      @error('description')
       <small class="text-danger">{{$message}}</small>
      @enderror
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Borrar</button>
    </div>
  </div>