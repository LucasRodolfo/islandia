@extends('base')

@section('title')
    Home
@stop

@section('body')
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="center">
                {{ HTML::image('bootstrap/img/logoUnicamp.png', '', array('class'=>'img-circle big-landing-image', 'alt'=>'logo unicamp')) }}
                <h3>
                    Project Iceland
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                </p>
            </div>
        </div>
    </div>
@stop
