<html>
<head>
<title> Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
   <body>
   <h1> Add Student Details</h1>
    <div class="container">
   <form action="{{ route('addstudent')}}" method="POST">
   @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="studname"class="form-control" value="">
      </div>
  <div class="form-group">
    <label>MobileNo.</label>
    <input type="integer" name="mobnum" class="form-control"  value="">
  </div>

  <label>State Id</label>
  <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="state_id">
   @foreach($data as $val)
   {
      <option value="{{$val->id}}">{{$val->statename}}</option>
  }
  @endforeach
  </select>
 </div>
 <label>District Id</label>
  <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="district_id">
   @foreach($data1 as $val)
   {
      <option value="{{$val->id}}">{{$val->districtname}}</option>
  }
  @endforeach
  </select>
 </div>
 <label>City Id</label>
  <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="city_id">
   @foreach($data2 as $val)
   {
      <option value="{{$val->id}}">{{$val->cityname}}</option>
  }
  @endforeach
  </select>
 </div>
 <label>School Id</label>
  <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="school_id">
   @foreach($data3 as $val)
   {
      <option value="{{$val->id}}">{{$val->schoolname}}</option>
  }
  @endforeach
  </select>
 </div>
 <label>Class Id</label>
  <div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="class_id">
   @foreach($data4 as $val)
   {
      <option value="{{$val->id}}">{{$val->classname}}</option>
  }
  @endforeach
  </select>
 </div>
  
     <div class="form-group">
    <label>Status</label>
    <input type="text"  name="status"class="form-control"value="">
      </div>
      
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

