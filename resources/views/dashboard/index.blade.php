@extends('layouts.dashboard')

@section('content')
{{ $server }}
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">HTTPS Option</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ url('toggle-https') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn {!! Request::is('HTTPSenabled') ? 'btn-danger' : 'btn-success' !!}">
                                {!! Request::is('HTTPSenabled') ? 'Disable HTTPS' : 'Enable HTTPS' !!}
                            </button>
                        </form>        
                    </div>
                    <div class="col-md-6">
                        <form action="{{ url('toggle-https') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-primary">
                                {!! Request::is('HTTPSenabled') ? 'Remove HTTPS enforcing' : 'Force HTTPS' !!}
                            </button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">HTTPS Option</div>

            <div class="panel-body">
                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection
