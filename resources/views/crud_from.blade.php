<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<body>

<div class="container">
  <h2>Add form</h2>

  @if(session('success'))
<div class="alert alert-success alert-dismissable" align="center" style="width: 331px; margin-left: 682px">
    <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Success !</strong> {{session('success')}}
  </div>
@endif   

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
  {{Form::open(['method'=>'post','url'=>"/"])}}
    <div class="form-group">

      {{Form::label('first_name','First Name',['class'=>'form-control-label'])}}
      {{Form::text('first_name','',['class'=>'form-control','title'=>'first_name','required'=>'required'])}}
      <span style></span>
    </div>
    <div class="form-group">
    {{Form::label('last_name','Last Name',['class'=>'form-control-label'])}}
    {{Form::text('last_name','',['class'=>'form-control','title'=>'last_name','required'=>'required'])}}
 
    </div>
    <div class="form-group">
    {{Form::label('father_name','Father Name',['class'=>'form-control-label'])}}
    {{Form::text('father_name','',['class'=>'form-control','title'=>'father_name','required'=>'required'])}}
    
    </div>
    <div class="form-group">
     {{Form::label('gender','Gender',['class'=>'form-control-label'])}}
    
     {{Form::select('gender',['Male'=>'Male','Female'=>'Female'],null,['class'=>'form-control','title'=>'department'])}}
      
    </div>
    <div class="form-group">
     {{Form::label('phone','Phone',['class'=>'form-control-label'])}}
  
      {{Form::text('phone','',['class'=>'form-control','title'=>'phone','required'=>'required'])}}
    </div>
  
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  {{Form::close()}}
 
</div>
<br><br>
<div class="container">
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Name</th>
            <th>Father Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    
    @php 
  
    
    @endphp
    
    @foreach($all_data as $data_fetch)
        <tr>
        @php
           $data=array($data_fetch);
         
        @endphp
            <td></td>
            <td></td>
        </tr>
      @endforeach
      
     
    </tbody>
</table>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
