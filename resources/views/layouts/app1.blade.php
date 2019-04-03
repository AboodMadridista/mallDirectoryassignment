<html lang="en">
<nav>
<div class="jumbotron jumbotron-fluid">
<div class="container">
<title>Kuala Lumpur Mega Mall</title>
<h4><a href="/">Welcome to Kuala Lumpur Mega Shopping Mall</a></h4>

{{ Html::style('css/frontEnd.css')}}


<!--
  @if(count($FEtenants)>0)
  <h1>All tenants</h1>
  <table class="table1">
    <thead>
      <tr><th>id</th><th>Name</th><th>LotNo</th><th>Level</th><th>Zone</th><th>Category</th></tr>
    </thead>
    <tbody>
      @foreach($FEtenants as $FEtenant)
        <tr><td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> id}}</td>
            <td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> name}}</a></td>
            <td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> LotNo}}</a></td>
            <td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> Level}}</a></td>
            <td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> Zone}}</a></td>
            <td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> Category}}</a></td></tr>
      @endforeach
     </tbody>
  </table>
  @endif
  </div>
  </div>
  </div>
-->

<body>


<div class="jumbotron jumbotron-fluid">
<div class="container">
<div class="col justify-content-md-left">


<div class="dropdown">
  <button class="dropbtn">Tenant</button>
  <div class="dropdown-content">
      <table class="table1">
      <thead>
        <tr><th>Name</th></tr>
      </thead>
      <tbody>
    @if(count($FEtenants)>0)
        @foreach($FEtenants as $FEtenant)
          <tr><td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> name}}</a></td></tr>
        @endforeach
    @endif
      </tbody>
      </table>
    </div>
    </div>

<div class="dropdown">
  <button class="dropbtn">Zone</button>
  <div class="dropdown-content">
      <table class="table1">
      <thead>
        <tr><th>Zone</th></tr>
      </thead>
      <tbody>
    @if(count($FEtenants)>0)
        @foreach($FEtenants as $FEtenant)
          <tr><td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> Zone}}</a></td></tr>
        @endforeach
    @endif
      </tbody>
      </table>
    </div>
    </div>


<!--Zone-->
<div class="dropdown">
  <button class="dropbtn">Level</button>
  <div class="dropdown-content">
      <table class="table1">
      <thead>
        <tr><th>Level</th></tr>
      </thead>
      <tbody>
    @if(count($FEtenants)>0)
        @foreach($FEtenants as $FEtenant)
          <tr><td><a href='FE/{{$FEtenant -> id}}'>{{$FEtenant-> Level}}</a></td></tr>
        @endforeach
    @endif
      </tbody>
      </table>
    </div>
    </div>


<th>
<div class="dropdown">
  <button class="dropbtn">Categories</button>
  <div class="dropdown-content">
  <a href="#">Entertainment</a>
  <a href="#">SpecialityShops</a>
  <!--
  <div class="dropdown2">
        <button class="dropbtn2">Food And Beverages</button>
            <div class="dropdown-content2">
                <a href="#">burgerLab</a>
                <a href="#">Face2Face</a>
                <a href="#">MCD</a>
            </div>
    </div>
  -->
  </div>
</div>
</th>

<!--Jumbotron divs-->
</div>
</div>
</div>
<!--
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
              <a href="{{ url('/division') }}">Division</a>
                <a href="{{ url('/contacts') }}">Contacts</a>

            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif
  </div>
</div>
</div>
</nav>
-->
<!DOCTYPE html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<style>
.row div{padding: 20px 10px; border: 1px solid;}
.col div{padding: 20px 10px; border: 1px solid;}
.table1 table{padding: 10px 10px; border:2px solid;}
th{background-color: #ccc; padding: 10px 10px; border:2px solid;}
tr{padding: 10px 10px; border:2px solid;}
td{padding: 10px 10px; border:2px solid;}
</style>


  </head>
  <body>
    <div class="container">

    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

@yield('content')
</html>
