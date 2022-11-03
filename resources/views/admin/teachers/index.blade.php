


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
  <h3 align="center">Insert teacher information in  Mysql Database in Laravel 9</h3>
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

   
    <br />

    <div class="panel panel-default">
         <div class="panel-heading">
             <h3 class="panel-title">User Form</h3>
         </div>
         <div class="panel-body">
         <br />
         <form method="POST" action="{{ route('teachers.store') }}"  enctype="multipart/form-data">
          @csrf 
          <div class="form-group">
          <div class="row">
           <label class="col-md-4" align="right">Enter First  Name</label>
           <div class="col-md-8">
            <input type="text" name="name" class="form-control" />
            @error('name')
                        <div class="alert alert-danger" >{{$message}}</div>
                        @enderror
           </div>
          </div>
          <div class="row">
           <label class="col-md-4" align="right">job</label>
           <div class="col-md-8">
            <input type="text" name="job" class="form-control" />
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
           </div>
          </div>
         </div>
         <div class="form-group" align="center">
          <br />
          <br />
          <input type="submit" name="teachers" class="btn btn-primary  px8 " value="Save" />
         </div>

</form>

     <div class="panel panel-default">
         <div class="panel-heading">
         @if(session()->has('success'))
     <div class="alert alert-success">
     {{ session()->get('success') }}
     </div>
    @endif
             <h3 class="panel-title">User Data</h3>
         </div>
         <div class="panel-body">
         <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tr>
                     <th width="30%">Image</th>
                     <th width="50%">Name</th>
                     <th width="40%">job</th>
 
                  </tr>
                 @foreach($data as $item)
                 <tr>
                     <td width="30%"><img src="{{ asset('admin/images/teacher_pic/'.$item->pic)  }}" width="120" alt=""></td>
                     <td width="50%">{{$item->name}}</td>
                     <td width="40%">{{$item->job}}</td>
                     <!-- route for edit -->
                     <td><h3><a href="{{ route('teachers.edit',['id'=>$item->id]) }}">edite</a></h3></td>
                     <!-- route for delete -->
                     <td><h3><a href="" onclick="destroyUser(event,{{$item->id}})" >delete</a></h3>
                 <form action="{{route('teachers.destroy',$item->id)}}"  id="userdelete-{{$item->id}}" method="POST">
                 @csrf
                 @method('delete')
                 </form>
                 </td>
                  </tr>
                 @endforeach
              </table> 
             </div>                    
         </div> 
        </div>
    </div>
 </body>

</html>
@endsection

<!--js section for delete -->
@section('js')
<script>
    function destroyUser(event,id){
     event.preventDefault();
 document.querySelector('#userdelete-'+id).submit();

    }
</script>
@endsection







