@extends('layouts.app')
<meta http-equiv="refresh" content="2;url=/admin">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Uspešno ste se logovali {{ Auth::user()->name }}. Uskoro ćete biti redirektovani na admin panel.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
