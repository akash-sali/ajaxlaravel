<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{ asset('fontend/css/bootstrap.css')}}>
    
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-3">
        <button id=add data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mb-3">Add</button>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-12">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="data">
                    
                </tbody>
            </table>

            <!-- Button trigger modal -->


<!-- add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="formdata" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" type="text" name="name" id="name">
          </div>
          <div class="form-group">
              <label for="contact">Phone</label>
              <input class="form-control" type="text" name="phone" id="id">
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
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input class="btn btn-primary" name="submit" type="submit" id="add_submit" value="submit">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end add modal  -->

<!-- edit modal  -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
      <form id="editForm" method="post" enctype="multipart/form-data">
      @csrf
      
      
    </div>
  </div>
</div>

<!-- edit modal end  -->

        </div>
    </div>
</div>
<script src={{ asset('fontend/js/bootstrap.js')}}></script>
    <script src={{ asset('fontend/js/jquery-.min.js')}}></script>
<script>
    function reload(){
        $.ajax({
            url:"{{route('index')}}",
            cache: false,
            type:"GET",
            success: function (data) {           
                   
                   $('#data').html(data);                                  
                
            }

        });
    }
    reload();
   
        $("#formdata").submit(function(e){
            e.preventDefault()
           $.ajax({
            url:"{{url('store')}}",
            cache: false,
            type:"POST",
            data: $(this).serialize(),
            success: function (data) {
                reload();
             }
           })
        });

        $("#editForm").submit(function(e){
          alert("hello");
            e.preventDefault();
            var data = $(this).serialize();

           $.ajax({
            type:"POST", 
            url:"{{route('update')}}",
            data: $(this).serialize(),
            success: function (data) {
                reload();
             }
           })
        });

        function editemployee(id){            
            var url  = "{{route('edit','@')}}";
           url = url.replace('@', id);
           $.ajax({
            url:url,
            cache: false,
            type:"GET",
            success: function (data) {             
                   console.log(data);
                   $('#editForm').html(data);                                  
                
            }

        });
           
        }
    
    
 
</script>
</body>
</html>