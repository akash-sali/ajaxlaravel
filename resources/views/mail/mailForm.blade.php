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
           
            <div class="col-md-6 offset-3 mt-3">
            <h4>Send Email</h4>   
            <form action="{{route('sendEmail')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
              <label for="email">Form</label>
              <input class="form-control" type="email" name="from" id="form">
          </div>
          <div class="form-group">
              <label for="email">To</label>
              <input class="form-control" type="email" name="to" id="to">
          </div>
          <div class="form-group">
              <label for="email">Subject</label>
              <input class="form-control" type="text" name="subject" id="subject">
          </div>
          <div class="form-group">
              <label for="compose">Compose Email</label>
             <textarea class="form-control"  name="compose" id="" cols="30" rows="10"></textarea>
          </div>
       
          <div class="form-group">
              <label for="contact">Attachments</label>
              <input class="form-control" type="file" name="attachement" id="attachement">
          </div> <br>
          <input class="btn btn-success" name="submit" type="submit" id="submit" value="send">
      </form>
            </div>
        </div>
    </div>

</body>
</html>