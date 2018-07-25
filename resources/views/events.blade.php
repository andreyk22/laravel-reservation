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
        <script src="http://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
             
        {!! $calendar_details->script() !!}
       
        
    </head>
    <body>
            <div class="content">
              <!-- CONTENT PART -->
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Send reservation request.</div>
                            <div class="panel-body">
                     {!! Form::open(array('route' => 'events.add', 'method'=>'POST', 'files'=>'true')) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @elseif (Session::has('warning'))
                                <div class="alert alert-danger">{{ Session::get('warning') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                            {!! Form::label('event_name', 'Event name:') !!}
                                <div class="">
                                {!! Form::text('event_name', null, ['class'=>'form-control']) !!}
                                {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                {!! Form::label('start_date', 'Start date:') !!}
                                    <div class="">
                                        {!! Form::date('start_date', null, ['class'=>'form-control']) !!}
                                        {!! $errors->first('start_name', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                {!! Form::label('end_date', 'End date:') !!}
                                    <div class="">
                                        {!! Form::date('end_date', null, ['class'=>'form-control']) !!}
                                        {!! $errors->first('end_name', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                {!! Form::label('start_time', 'Start time:') !!}
                                    <div class="">
                                        {!! Form::time('start_time', null, ['class'=>'form-control']) !!}
                                        {!! $errors->first('start_name', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <div class="form-group">
                                {!! Form::label('end_time', 'End time:') !!}
                                    <div class="">
                                        {!! Form::time('end_time', null, ['class'=>'form-control']) !!}
                                        {!! $errors->first('end_name', '<p class="alert alert-danger">:message</p>') !!}
                                    </div>
                            </div>
                        </div>


          

                        <div class="col-xs-1 col-sm-1 col-md-1"> &nbsp; <br/>
                        {!! Form::submit('Add Event', ['class'=>'btn btn-primary']) !!}
                        </div>

                            
                            
                            </div>
                            {!! Form::close() !!}
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Event details</div>
                            <div class="panel-body">
                                {!! $calendar_details->calendar() !!}
                            </div>
                    </div>

              </div>
            </div>
        </div>
        <!-- <script>
        {!! $calendar_details->script() !!}
        </script> -->
    </body>
    <footer class="page-footer font-small blue">
</html>
