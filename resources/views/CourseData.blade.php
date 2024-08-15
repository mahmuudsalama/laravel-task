<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1 class="text-info w-50 mt-5 m-auto"> {{$courses->name}} Data</h1>
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

            <tr>
        
               <td>{{ $courses->id }}</td>
                <td>{{ $courses->name }}</td>
                <td>{{ $courses->totalGrade }}</td>
                <td>{{ $courses->description }}</td>
                <td>
                    <a href="{{route('courses.index')}}">
                    <button class="btn btn-warning">Back</button>
                   </a>
                </td> 
            </tr>
    </tbody>
</table>
</body>
</html>