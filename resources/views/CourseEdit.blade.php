<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <form method="POST" action=" {{route('Course.update',$course->id)}}" >
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" class="form-control" name="name" value="{{$course->name}}">
            
          </div>   
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tota Grade</label>
            <input type="number" class="form-control" name="address"  value="{{$course->totalGrade}}">
            
          </div>   
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1"  name="email" value="{{$course->description}}" >
            
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>