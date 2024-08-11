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
{{-- @dump($students); --}}
<h1 class="text-info w-50 mt-5 m-auto"> All Students Data</h1>
<a href="{{route('Track.create')}}"> <button class="btn btn-warning">create student</button></a>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">gender</th>
            <th scope="col">pic</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tracks as $student)
            <tr>
                {{-- @dd($student) --}}
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->gender }}</td>
                <td> @if ($student->image)
                    <img src="{{asset('uploads/'.$student->image)}} " class="rounded-circle" width="75" height="75" alt="">
                @endif</td>
                <td>
                  
                    <a href="{{route('students.view',$student->id)}}"> <button class="btn btn-warning">View</button></a>
                 
                    <a href="{{route('Track.delete',$student->id)}}"> <button class="btn  btn-outline-danger">delete</button></a>
                   
                   
                
                <a href="{{route('Track.edit',$student->id)}}"><button class="btn btn-warning">update</button></a>
                </td>
            </tr>
        @endforeach



    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
