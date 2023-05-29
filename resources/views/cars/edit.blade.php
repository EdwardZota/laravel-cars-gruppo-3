<form action="{{route('cars.update', ['car'=>$car->id])}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="brand" class="form-label"> Brand </label>
    <input type="text" name="brand" class="form-control" id="brand" value="{{ old('brand',$car->brand) }}">
  </div>
  <div class="mb-3">
    <label for="model" class="form-label"> Model </label>
    <input type="text" name="model" class="form-control" id="model" value="{{ old('model',$car->model) }}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label"> Price </label>
    <input type="text" name="price" class="form-control" id="price" value="{{ old('price',$car->price) }}">
  </div>

  <div class="mb-3">
    <label for="cc" class="form-label"> CC </label>
    <input type="text" name="cc" class="form-control" id="cc" value="{{ old('cc',$car->cc) }}">
  </div>

  <div class="mb-3">
    @foreach ($optionals as $optional)
        <div>
            <input @if ($car->optionals->contains($optional->id)) checked @endif class="form-check-input" type="checkbox" id="optional_{{$optional->id}}" name="optionals[]" value="{{$optional->id}}">
            <label class="form-check-label" for="optional_{{$optional->id}}">{{$optional->name}}</label>
        </div>

    @endforeach
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
