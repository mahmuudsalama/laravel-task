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
{{-- @dump($courses); --}}
<h1 class="text-info w-50 mt-5 m-auto"> All courses Data</h1>
<a href="{{route('Course.create')}}"> <button class="btn btn-warning">create course</button></a>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">total grade</th>
            <th scope="col">description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($courses as $course)
            <tr>
                {{-- @dd($course) --}}
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->totalGrade }}</td>
                <td>{{ $course->description }}</td>
                <td>
                  
                    <a href="{{route('courses.view',$course->id)}}"> <button class="btn btn-warning">View</button></a>
                 
                    <a href="{{route('Course.delete',$course->id)}}"> <button class="btn  btn-outline-danger">delete</button></a>
                   
                   
                
                {{-- <a href="{{route('Track.edit',$course->id)}}"><button class="btn btn-warning">update</button></a> --}}
                </td>
            </tr>
        @endforeach



    </tbody>
</table>
<div class="w-50 m-auto mt-2">
    {{$courses->links()}}
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>
