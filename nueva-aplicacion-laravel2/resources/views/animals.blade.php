@component('components.layout')
    <h1 class="animals-title text-center">Animals</h1>
    <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('animals.create') }}'">Add animal</button>

    <div class="container py-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($animals as $animal)
{{-- <h4>
    {{$animal['name']}}

</h4>

<p>{{$animal['description']}}</p> --}}
    <div class="col-md-4">
        <div class="card">
            {{-- <img src="images/"{{$animal['photo']}} class="card-img-top" alt="..."> --}}
            <img src="{{ asset('images/' . $animal['photo']) }}" class="card-img-top" alt="...">

            <div class="card-body">
            <h5 class="card-title">{{$animal['name']}}</h5>
            <p class="card-text">{{$animal['description']}}</p>
            {{-- <button href="{{ route('animals.show', $animal->id)}}" type="button" class="btn btn-success">Leer más</button> --}}
            <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('animals.show', $animal->id) }}'">Leer más</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('animals.edit', $animal) }}'">Edit animal</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('animals.destroy', $animal) }}'">Delete animal</button>

            </div>
        </div>
    </div>
{{-- <div class="card border-primary mb-3 align-center" style="max-width: 18rem;">
    <div class="card-header">Animal</div>
    <div class="card-body text-primary">
      <h5 class="card-title">{{$animal['name']}}</h5>
      <p class="card-text">{{$animal['description']}}</p>
    </div>
  </div> --}}

@endforeach
</div>
</div>

@endcomponent