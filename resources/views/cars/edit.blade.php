<form action="{{route('cars.update', ['car'=>$car->id])}}" method="POST">
    @csrf
    @method('PUT')
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
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>