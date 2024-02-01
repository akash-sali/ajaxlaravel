<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('fontend/css/bootstrap.css')}}>
    <script src={{ asset('fontend/js/bootstrap.js')}}></script>
    <script src={{ asset('fontend/js/jquery-.min.js')}}></script>
</head>

<body>
<div class="container">
<div class="row">
<form method="POST">
    <div class="row">
     <div class="col-sm-6">
     <form method="POST">
         <div class="input-group rounded">
             <input type="search" class="form-control rounded" placeholder="Search" name="record-search"
                 id="searchInput">
         </div>
     </form>
     </div>
    </div>
                   
<form id="formdata" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" id="name">
          </div>
          <div class="form-group">
              <label for="address">Address</label>
          <input class="form-control" type="text" name="address" id="address">
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" id="email">
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" id="password">
          </div>
          <div class="form-group">
              <label for="contact">Contact</label>
              <input class="form-control" type="text" name="contact" id="id">
          </div>
          <div class="form-group">
              <label for="contact">Upload Image</label>
              <input class="form-control" type="file" name="images" id="images">
          </div> <br>
          <input class="btn btn-primary" name="submit" type="submit" id="submit" value="submit">
      </form>
</div class="row">
           <h1>add data</h1>
            <div class="col-sm-12">
                <table class="table table-bordered table-resposive">
                    <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>                        
                        <th>Contact</th>
                        <th>Image</th>
                        <th colspan="2">Action</th>
                        
                    </tr>
                    </thead>
                    <tbody id="allrecord">
                    
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>

    
  
    <script>
    

        $(document).ready(function () {
           
            $("#formdata").submit(function (e) {
                e.preventDefault(); 
                            
                $.ajax({
                    url: "{{url('ajaxDataInsert')}}",
                    type: "POST",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        
                        reload();
                    }

                })
            })
            $(document).on("click", "#add_button", function () {
                $("#savedata-modal").modal("show");
            })
            $(document).on("click", "#submit", function () {
                $("#savedata-modal").modal("hide");
            })
            // updata script 

            $(document).on("click", "#edit", function () {
                $("#Updatedata-modal").modal("show");
            })
            $(document).on("click", "#update", function () {
                $("#Updatedata-modal").modal("hide");
            })
        })

        function reload() {
            
                 $.ajax({                   
                     url: "{{route('listingdata')}}",
                     type: "GET",
                         success:function(data){
                            $('#allrecord').html(data);  
                        }
                         
                     })
                 }
        
                 reload();
    </script>
</body>

</html>