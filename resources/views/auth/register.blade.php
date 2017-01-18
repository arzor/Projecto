@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
<button class="btn" type="button"><a href="{{ url('/search') }}">Usuario</a></a>
                                </button>
</div>
                             <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
<button class="btn" type="button"><a href="{{ url('/search') }}">Tecnicos</a></a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
