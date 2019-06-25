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
  {{Form::open(['method'=>'post','url'=>"/",'id'=>'my-form'])}}
    <div class="form-group">

      {{Form::label('title','Title',['class'=>'form-control-label'])}}
      {{Form::text('title','',['class'=>'form-control','title'=>'title','required'=>'required'])}}
      <span style></span>
    </div>
    <div class="form-group">
    {{Form::label('description','Description',['class'=>'form-control-label'])}}
    {{Form::text('description','',['class'=>'form-control','title'=>'description','required'=>'required','cols'=>'5','rows'=>'5'])}}
 
    </div>
    <div class="form-group">
     {{Form::label('entry_by','Entry By',['class'=>'form-control-label'])}}
  
      {{Form::text('entry_by','',['class'=>'form-control','title'=>'entry_by','required'=>'required'])}}
    </div>
   
    <div class="form-group">
     {{Form::label('status','Status',['class'=>'form-control-label'])}}
  
      {{Form::text('status','',['class'=>'form-control','title'=>'phone','required'=>'required'])}}
    </div>
  
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  {{Form::close()}}
 
</div>
<br><br>
<!-- <div class="container">
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
    
 
      
     
    </tbody>
</table>
</div> -->
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

 <!-- Laravel Javascript Validation -->
 <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! $validate->selector('#my-form') !!}
</body>


</html>
