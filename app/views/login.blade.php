@extends('base')
@section('title')
    Login
    @stop
    @section('body')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="row clearfix">
                <div class="col-md-4 column">
                </div>
                <div class="col-md-4 column">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Login
                            </h3>
                        </div>
                        <div class="panel-body">
                            {{ Form::open(array('url' => 'login')) }}
                                <div class="form-group">
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::text('email', Input::old('email'), ['class'=> 'form-control'])}}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('password', 'Senha') }}
                                    {{ Form::password('password', ['class'=> 'form-control'])}}
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" /> Lembre-se de mim!</label>
                                </div> <button type="submit" class="btn btn-default">Login</button>
                            {{ Form::close() }}
                        </div>
                        @if($errors->any())
                        <div class="panel-footer">
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <p>{{ $errors->first('email') }}</p>
                                 <p>{{ $errors->first('password') }}</p>
                            </div>
                        </div>
                        @endif
                        @if(isset($loginError))
                        <div class="panel-footer">
                            <div class="alert alert-danger alert-dismissable">
                            {{-- SE TEM ERROS @if($erros) --}}
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <p>{{ $loginError }}</p>
                            </div>
                            {{-- ENDIF @endif --}}
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
