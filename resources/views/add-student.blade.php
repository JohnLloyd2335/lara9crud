<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> 
    <title>Add Student</title>
</head>
<body>
    <div class="container mt-5" >
        <div class="row">
            <div class="col-md-12">
                <h2>Add Student</h2>
                @if(Session::has("success"))
                <div class="alert alert-success" role="alert">
                    {{Session::get("success");}}
                </div>
                @endif
                <form action="{{url('save-student')}}" method="post">
                    @csrf
                    <div class="md-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                    </div>

                    <div class="md-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                    </div>

                    <div class="md-3">
                        <label class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone" value="{{old('phone')}}">
                        @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror

                    </div>

                    <div class="md-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control" cols="5" rows="5">{{old('address')}}</textarea>
                        @error('address')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-5">Save</button>
                    <a href="{{url('student-list')}}" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>