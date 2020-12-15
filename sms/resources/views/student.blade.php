<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Student management system</title>
  </head>
  <body>
    @include('navbar')
    <div class="row header-container justify-content-center">
        <div class="header">
          <h1>Student Management System</h1>
        </div>
    </div>
  @if($layout == 'index')
    <div class="container-fluid mt-4">
      <div class="container-fluid mt-4">
        <div class="row justify-content-center">
          <section class="col-md-7">
            @include('studentslist')
          </section>
      </div>
    </div>
    
  @elseif($layout == 'create')
    <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
          @include('studentslist')
        </section>
        <section class="col-md-5">

          <div class="card mb-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ05lglPYc50A1dXdRnbGlh7NtLT9H_0P-FVg&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">List of Student</h5>
              <form action="{{ url('store') }}" method="post">
                @csrf
                <div class="form-group">
                  <label>CNE</label>
                  <input name='cne' type="text" class="form-control" placeholder="Enter cne">
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input name='firstName' type="text" class="form-control" placeholder="Enter firstName">
                </div>
                <div class="form-group">
                  <label>Second Name</label>
                  <input name='secondName' type="text" class="form-control" placeholder="Enter secondname">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input name='age' type="text" class="form-control" placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input name='speciality' type="text" class="form-control" placeholder="Enter speciality">
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-warning" value="reset">
              </form>
            </div>
          </div>

          
        </section>
      </div>
    </div>
  @elseif($layout == 'show')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-md-7">
        @include('studentslist')
      </section>
      <section class="col-md-5"></section>
    </div>
  </div>
  @elseif($layout == 'destroy')
  <div>
   <div class="container-fluid mt-4">
      <div class="row">
        <section class="col-md-7">
          @include('studentslist')
        </section>
        <section class="col-md-5">
          <form action="{{ url('/destroy/'.$student->id) }}" method="post">
            @csrf
          </form>
        </section>
      </div>
    </div>
  </div>
  @elseif($layout == 'edit')
  <div class="container-fluid mt-4">
    <div class="row">
      <section class="col-md-7">
        @include('studentslist')
      </section>
      <section class="col-md-5">

        <div class="card mb-3">
          <img src="https://images2.sakalmediagroup.com/eSakal-Prod/s3fs-public/blog/cover-images/2stu.jpg?TZbZdMcJI6V0PceE7i39Vs2_73tP_dqi" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Update</h5>
            <form action="{{ url('/update/'.$student->id) }}" method="post">
              @csrf
              <div class="form-group">
                <label>CNE</label>
                <input value="{{ $student->cne }}" name='cne' type="text" class="form-control" placeholder="Enter cne">
              </div>
              <div class="form-group">
                <label>First Name</label>
                <input value="{{ $student->firstName }}" name='firstName' type="text" class="form-control" placeholder="Enter firstName">
              </div>
              <div class="form-group">
                <label>Second Name</label>
                <input value="{{ $student->secondName }}" name='secondName' type="text" class="form-control" placeholder="Enter secondname">
              </div>
              <div class="form-group">
                <label>Age</label>
                <input value="{{ $student->age }}" name='age' type="text" class="form-control" placeholder="Enter Age">
              </div>
              <div class="form-group">
                <label>Speciality</label>
                <input value="{{ $student->speciality }}" name='speciality' type="text" class="form-control" placeholder="Enter speciality">
              </div>
              <input type="submit" class="btn btn-info" value="Update">
              <input type="reset" class="btn btn-warning" value="reset">
            </form>
          </div>
        </div>

        
      </section>
    </div>
  </div>
  @endif
  <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>