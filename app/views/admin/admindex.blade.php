@extends('base')
@section('title')
    Admin
@stop
@section('body')
    <div class="row clearfix">
        <div class="col-md-10 column">
        </div>
        <div class="col-md-2 column">
            <a href="#"><button type="button" class="btn btn-default">Add </button></a>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>
                        User
                    </th>
                    <th>
                        Content
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Votes
                    </th>
                    <th>
                        Block?
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($content as $c)
                    @foreach($c as $p)
                <tr>
                    <td>
                        {{ $p->user()->get()->first()->name }}
                    </td>
                    <td>
                        {{ $p->content }}
                    </td>
                    <td>
                        {{ $p->updated_at }}
                    </td>
                    <td>
                        {{ $p->votes->count() }}
                    </td>
                    <td>
                        @if(get_class($p)=='Reply')
                            <a href="{{ url('admin/block/reply/'.$p->id) }}">
                                <button class="btn btn-danger btn-md">Block This</button></a>
                        @else
                            <a href="{{ url('admin/block/comment/'.$p->id) }}">
                                <button class="btn btn-danger btn-md">Block This</button></a>
                        @endif
                    </td>
                </tr>
                @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop