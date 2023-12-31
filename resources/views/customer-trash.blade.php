<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Trash</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
        @if (session()->has('name'))
        {{session()->get('name')}}
        @else

        Guest
            
        @endif  
        </a>
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
    <div class="container">
      <a href="{{route('customer.create')}}">
      <button class="btn btn-primary d-inline-block m-2 float-right">ADD</button>
    </a>
      <a href="{{url('customer/view')}}">
      <button class="btn btn-primary d-inline-block m-2 float-right">Customer View</button>
    </a>



        {{-- displaying all data  --}}
         {{-- <pre>
            {{print_r($customer)}}
        </pre> --}}


        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">country</th>
                <th scope="col">state</th>
                <th scope="col">address</th>
                <th scope="col">Gender</th>
                <th scope="col">D-O-B</th>
                <th scope="col">status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($customer as $customer)
                
                <tr>
                <td>{{$customer->customer_id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->country}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->dob}}</td>
                <td>
                    @if ($customer->status == '1')
                    <a href="">
                        <span class="badge text-bg-success">Active</span>   
                      </a>
                        @else
                        <a href="">
                          <span class="badge text-bg-secondary">InActive</span>    
                        </a>
                        @endif
                </td>
                <td>
                  <a href="{{route('customer.force-delete', ['id'=> $customer->customer_id])}}">
                  <button class="btn btn-danger">Delete</button>
                </a>
                  <a href="{{route('customer.restore', ['id'=> $customer->customer_id])}}">
                  <button class="btn btn-primary">Restore</button>
                </a>
                </td>
            </tr>
                @endforeach
            </tbody>
          </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>