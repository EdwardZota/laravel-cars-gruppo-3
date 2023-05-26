<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container">
    <a href="{{route('cars.create')}}" class="btn btn-warning">Crea</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Brand</th>
                <th scope="col">Model</th>
                <th scope="col">Price</th>
                <th scope="col">cc</th>
                <th scope="col">Azioni</th>
    
              </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{$car->id}}</td>
                        <td>{{$car->brand}}</td>
                        <td>{{$car->model}}</td>
                        <td>{{$car->price}}</td>
                        <td>{{$car->cc}}</td>    
                        <td><a href="{{route('cars.edit', ['car'=>$car->id])}}" class="btn btn-warning">Modifica</a></td>   
       
                       
                    </tr>

                @endforeach
            </tbody>
          </table>


    </div>

    

</body>
</html>