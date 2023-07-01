<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href={{ asset('fontend/css/bootstrap.css')}}>
   <script src="../js/bootstrap.js"></script>  

</head>
<body>
    
    <div class="container">
        <a href="{{url('ajaxDataInsert')}}">Add data</a>
        <div class="row">  
            
            <div class="col-sm-12">
                <table class="table table-bordered table-resposive">
                    <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th colspan="2">Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>

                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>