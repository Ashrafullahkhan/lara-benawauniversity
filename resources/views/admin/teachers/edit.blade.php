


@extends('layouts.app')

@section('content')

<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Insert Image into Mysql Database in Laravel 6</title>

</head>
<body>
 <div class="container">    
  <br />
  <h3 align="center">Insert teacher information in  Mysql Database in Laravel 6</h3>
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
             <h3 class="panel-title">User Form</h3>
         </div>
         <div class="panel-body">
         <br />
         
         
         <form method="POST" action="{{ route('teachers.update',$data->id) }}"  enctype="multipart/form-data">
          @csrf 
          @method('PUT')
          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter First  Name</label>
           <div class="col-md-8">
            <input type="text" name="name" class="form-control" value='{{$data->name}}'/>
            @error('name')
                        <div class="alert alert-danger" >{{$message}}</div>
                        @enderror
           </div>
          </div>
          <div class="row">
           <label class="col-md-4" align="right">job</label>
           <div class="col-md-8">
            <input type="text" name="job" class="form-control" value='{{$data->job}}'/>
            @error('job')
                        <div class="alert alert-danger" >{{$message}}</div>
                        @enderror
           </div>
         
         </div>
         <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Select Profile Image</label>
           <div class="col-md-8">
            <input type="file" name="pic" />
            <p><img src="{{ asset('admin/images/teacher_pic/'.$data->pic)  }}" width="80"></p>
           </div>
          </div>
         </div>
         <div class="form-group" align="center">
          <br />
          <br />
          <input type="submit" name="teachers" class="btn btn-primary  px4 " value="Save" />
         </div>
         </form>
      </div>
     </div>

    
               
                 
              </table>
            




                  

          
                     
         </div>
  
  
        </div>
    </div>
 </body>
</html>
@endsection


