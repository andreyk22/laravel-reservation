<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

    </head>
    <body>
    
<div class="container">
<div class="jumbotron"><h2 align="center">Admin panel</h2>
<p align="center" class="text text-muted">Welcome mr. {{ Auth::user()->name }}.</p></div>
<div class="container-fluid">
        <div class="row">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="/admin" class="btn btn-info" role="button">Dashboard</a></li>
                <li class="list-inline-item"><a href="/admin/finished" class="btn btn-success" role="button">Finished events</a></li>
                <li class="list-inline-item"><a href="/admin/denied" class="btn btn-danger" role="button">Denied events</a></li>
                <li class="list-inline-item"><a href="/logout" class="btn btn-default" role="button">Logout</a></li>
            </ul>
            <br>
        </div>
    </div>
    <hr>
    
    <table class="table">
    <h3>Finished events</h3>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Organizer</th>
      <th scope="col">Email</th>
      <th scope="col">Type</th>
      <th scope="col">Number of participants</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($events as $event)
    <tr>
      <th scope="row">{{$event->id}}</th>
      <td>{{ $event->event_name }}</td>
      <td>{{$event->organizer}}</td>
      <td>{{$event->email}}</td>
      <td>{{$event->type}}</td>
      <td>{{$event->participants}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</div>
    </body>
    <div class="container">
    <div class="footer-copyright text-center py-3">© 2018 Development:
      <a href="mailto:andrej.kastratovic@gmail.com"> Andrej Kastratovic</a>
    </div>
    </div>
    
</html>
