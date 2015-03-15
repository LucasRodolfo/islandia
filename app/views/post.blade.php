@extends('base')
@section('title')
    Post
@stop
@section('body')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="jumbotron">
                <h1>
                    {{$item->title}}
                </h1>
                <p>
                    {{$item->content}}
                </p>
               </div>
        </div>
    </div>
    <div class="row clearfix">
        @foreach($item->replies()->get() as $reply)

        <div class="col-md-12 column">
            <div class="col-md-10 column">
                <p>
                    {{$reply->content}}
                </p>
            </div>
            <div class="col-md-2 column">
                <button type="button" class="btn btn-success btn-sm">+1</button>
                <button type="button" class="btn btn-danger btn-sm">-1</button>
            </div>
            <div class="row clearfix">
                @foreach($reply->comments()->get() as $comment)
                <div class="col-md-12 column">
                    <div class="col-md-10 column">
                        <p class="text-muted">
                            {{$comment->content }}
                        </p>
                    </div>
                    <div class="col-md-2 column">
                        <button type="button" class="btn btn-success btn-sm">+1</button>
                        <button type="button" class="btn btn-danger btn-sm">-1</button>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        @endforeach
    </div>
    <div class="row clearfix">
        <div class="col-md-12 column">
            <ul class="pagination">
                <li>
                    <a href="#">Prev</a>
                </li>
                <li>
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li>
                    <a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
@stop
