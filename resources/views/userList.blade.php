<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('fontend/css/bootstrap.css')}}>
    <script src={{ asset('fontend/js/bootstrap.js')}}></script>
    <script src={{ asset('fontend/js/jquery-.min.js')}}></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="container">
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
            </form>
            <table class="table">
            <tr>
                    <th colspan="3">
                        List Of Users
                        <a class="btn btn-warning float-end" href="{{ route('export') }}">Export User Data</a>
                    </th>
                </tr>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                    <tr>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->password}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>