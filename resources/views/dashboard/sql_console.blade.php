@extends('layouts.dashboard')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          Welcome to sql console.
          This is an interactive console, that is similar to the MySQL CLI
        </div>

        <div class="panel panel-success">
            <div class="panel-heading">SQL Interactive Console</div>

            <div class="panel-body">
                <form method="POST" action="{{ route('execute-query') }}">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="query" required></textarea>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success pull-right">
                            Execute
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @if($result)
        result is : {{ $result }}
    @else
        no string yet
    @endif

    {{ strlen($result) }}

</div>
@endsection
