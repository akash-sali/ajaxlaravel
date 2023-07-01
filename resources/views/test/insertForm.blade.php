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
            <form action="{{route('insertDatas')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <select name="sname[]" multiple id="" class="form-control">
                    <option value="Bca">Bca</option>
                    <option value="Bcom">Bcom</option>
                    <option value="Bsc">Bsc</option>
                    <option value="Bba">Bba</option>
                 </select>
             
                <div class="form-group mt-3">
                    <button class="btn btn-primary">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('fontend/js/bootstrap.js')}}"></script>
</body>
</html>