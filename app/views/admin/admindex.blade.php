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
            <table class="table">
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
                </tr>
                </thead>
                <tbody>
                @foreach($replies as $reply)
                <tr>
                    <td>
                        {{ $reply->user()->get()->first()->name }}
                    </td>
                    <td>
                        {{ $reply->content }}
                    </td>
                    <td>
                        {{ $reply->updated_at }}
                    </td>
                    <td>
                        Blank
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop