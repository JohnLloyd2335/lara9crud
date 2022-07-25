<!-- 2. Create a view -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Student List</title>
</head>
<body>
    <div class="container mt-5" >
        <div class="row">
            <div class="col-md-12">
                <h2>Student List</h2>
                <div class="container d-flex pr-5 align-items-center justify-content-end mb-4">
                    <a href="{{url('add-student')}}" class="btn btn-primary">Add Student</a>
                </div>
                @if(Session::has("success"))
                <div class="alert alert-success" role="alert">
                    {{Session::get("success");}}
                </div>
                @endif
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($data as $student)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->address}}</td>

                                <td><a href="{{url('edit-student/'.$student->id)}}" class="btn btn-success">Edit</a></td>

                                <td><a href="{{url('delete-student/'.$student->id)}}" class="btn btn-danger">Delete</a></td>

                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>