<x-layout meta-title='Create new animal' meta-description='Form to create a new animal'>

    
    <form method='POST' action="{{route('animals.destroy', $animal)}}">
      @csrf
      @method('delete')
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Borrar</button>
          </div>
        </div>
      </form>
</x-layout>

