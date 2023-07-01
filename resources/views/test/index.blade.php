<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('fontend/css/bootstrap.css')}}">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3 mt-3">
        <table class="table table-bordered table-resposive">
                    <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $item)
                    <tr id="allrecord">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td><a href="{{url('clsssForm',$item->id)}}" class="btn btn-success">Add class</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
<script src="{{asset('fontend/js/bootstrap.js')}}"></script>
</body>
</html>