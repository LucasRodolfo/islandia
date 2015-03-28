@extends('base')
@section('title')
    List
@stop

@section('body')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <form role="form">
                <div class="form-group">
                    <label for="exampleInputEmail1">Search</label><input class="form-control" id="exampleInputEmail1" type="email" />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>
                        Capítulo
                    </th>
                    <th>
                        Comentários
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                <tr>
                    <td>
                        {{HTML::link("post/$item->id",$item->title)}}
                    </td>
                    <td>
                        {{$item->replies->count()}}
                    </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop
