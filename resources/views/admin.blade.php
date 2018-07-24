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
    <h1 align="center"> This is admin page.</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Approve?</th>
      <th scope="col">Deny?</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($events as $event)
    <tr>
      <th scope="row">{{$event->id}}</th>
      <td>{{ $event->event_name }}</td>
      <td>Otto</td>
      <td>
      <form action="{{route('events.approve', $event->id) }}" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-success">APPROVE</button>
      </form>
      </td>
      <td>
      <form action="{{route('events.deny', $event->id) }}" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">
        <button type="submit" class="btn btn-danger">DENY</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</div>
    </body>
</html>
