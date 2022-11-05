<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Insert Image into Mysql Database in Laravel 6</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">    
  <br />
  <h3 align="center">edit post</h3>
    <br />
    @if($errors->any())
    <div class="alert alert-danger">
           <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
           </ul>
        </div>
    @endif

    @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
    <br />

    <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">Edit Form</h3>
         </div>
         <div class="panel-body">
         <br />
        <form method="post" action="/teachers/update/{{$teacher->id}}"  enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter Name</label>
           <div class="col-md-8">
            <input type="text" name="name" value="{{$teacher->name}}" class="form-control" />
           </div>
          </div>
             <div class="row">
           <label class="col-md-4" align="right">job</label>
           <div class="col-md-8">
            <input type="text" name="job" value="{{$teacher->job}}" class="form-control" />
           </div
          </div>
         </div>
         <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Select Profile Image</label>
           <div class="col-md-8">
            <input type="file" name="pic"  value="{{$teacher->pic}}" />

           </div>
             <img src="/teachers/fetch_image/{{$teacher->id}}"  class="img-thumbnail" width="75" />
          </div>
         </div>
         <div class="form-group" align="center">
          <br />
          <br />
          <input type="submit" name="teachers" class="btn btn-primary" value="Save" />
         </div>
        </form>
      </div>
     </div>
   
    </div>
 </body>
</html>
