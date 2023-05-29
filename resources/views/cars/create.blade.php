<form action="{{route('cars.store')}}" method="POST">
    @csrf

  <div class="mb-3">
    <label for="brand" class="form-label"> Brand </label>
    <input type="text" name="brand" class="form-control" id="brand">
  </div>
  <div class="mb-3">
    <label for="model" class="form-label"> Model </label>
    <input type="text" name="model" class="form-control" id="model">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label"> Price </label>
    <input type="text" name="price" class="form-control" id="price">
  </div>

  <div class="mb-3">
    <label for="cc" class="form-label"> CC </label>
    <input type="text" name="cc" class="form-control" id="cc">
  </div>

  <div class="mb-3">
    @foreach ($optionals as $optional)
        <div>
            <input class="form-check-input" type="checkbox" id="optional_{{$optional->id}}" name="optionals[]" value="{{$optional->id}}">
            <label class="form-check-label" for="optional_{{$optional->id}}">{{$optional->name}}</label>
        </div>
    @endforeach
  </div>

  <div class="mb-3">
    <label for="year_release" class="form-label"> year release </label>
    <input type="text" name="year_release" class="form-control" id="year_release">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
