<html>
<head>
<title> Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 
   <body>
   <h1> Add School Details</h1>
    <div class="container">
   <form action="{{ route('addschool')}}" method="POST">
   @csrf
   <div class="form-group">
    <label>School</label>
    <input type="text"  name="schoolname"class="form-control" placeholder="Enter the school">
      </div>
      <label>state Id</label>
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

 <div class="form-group">
    <label>status</label>
    <input type="text"  name="status"class="form-control" value="">
      </div>
  
 
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>