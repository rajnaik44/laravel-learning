<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <h1 class="text-center">Registration Form</h1>
        <form action="{{url('/')}}/register" method="POST">
          @csrf
          {{-- <pre>
            @php
            print_r($errors->all());
                
            @endphp
          </pre> --}}
              <x-input type="text" name="name" label="please enter your name" />
              <x-input type="email" name="email" label="please enter your email" />
              <x-input type="password" name="password" label="please enter your password" />
              <x-input type="password" name="confirm_password" label="please enter your confirm password" />

              <button type="submit">Submit</button>
              
          </form>



    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>