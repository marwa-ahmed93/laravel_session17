<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
     <thead>
           <th>id</th>
            <th>Name</th>
            <th>email</th>
            <!-- <td>password</td> -->
            <th><a href="">show</a></th>
            <th><a href="">restore</a></th>
     
     </thead>


        
    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$car->name}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->price}}</td>
            <td><img style="width: 150px;" src="{{ asset('storage/'.$car->image) }}" alt=""></td>
            <td><a href="{{route('showUser',$car->id)}}">Show</a></td>
            <td><a href="{{route('deleteCar',$car->id)}}">Delete</a></td>
            <td><a href="{{route('restoreCar',$car->id)}}">restore</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    
    

</body>
</html>