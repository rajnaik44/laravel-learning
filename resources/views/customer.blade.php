<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer form</title>
  <!-- Include Bootstrap CSS -->
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">WsTech</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/customer/create')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/customer/view')}}">Customer</a>
          </li>
        </form>
      </div>
    </div>
  </nav>

<div class="container mt-4">
  <form action="{{url('/')}}/customer" method="Post">
    @csrf
          {{-- <pre>
            @php
            print_r($errors->all());
                
            @endphp
          </pre> --}}
    <!-- Name -->
    <div class="form-group ">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" value="{{old('name')}}">     
    </div>

    <!-- Email -->
    <div class="form-group mt-4">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="{{old('email')}}">
    </div>

    <!-- Password -->
    <div class="form-group mt-4">
      <label for="password">Password:</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" >
    </div>

    <!-- Country -->
    <div class="form-group mt-4">
      <label for="country">Country:</label>
      <input type="text" name="country" class="form-control" id="country" placeholder="Enter your country" value="{{old('country')}}">
    </div>

    <!-- State -->
    <div class="form-group mt-4">
      <label for="state">State:</label>
      <input type="text" name="state" class="form-control" id="state" placeholder="Enter your state" value="{{old('state')}}">
    </div>

    <!-- Address -->
    <div class="form-group mt-4">
      <label for="address">Address:</label>
      <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter your address"></textarea>
    </div>

    <!-- Gender -->
    <div class="form-group mt-4">
      <label for="gender">Gender:</label>
      <select class="form-control" id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="female">other</option>
      </select>
    </div>

    <!-- Date of Birth -->
    <div class="form-group mt-4">
      <label for="dob">Date of Birth:</label>
      <input name="dob" type="date" class="form-control" id="dob">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary mt-4">Submit</button>
  </form>
</div>

<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
