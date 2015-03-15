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
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label><input class="form-control" id="exampleInputEmail1" type="email" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label><input class="form-control" id="exampleInputPassword1" type="password" />
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            {{-- SE TEM ERROS @if($erros) --}}
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4>
                                    Alert!
                                </h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
                            </div>
                            {{-- ENDIF @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 column">
            </div>
        </div>
    </div>
@stop
