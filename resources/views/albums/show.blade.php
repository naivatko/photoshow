@extends('layouts.app')

@section('content')
    <h1>{{$album->name}}</h1>
    <a class="button secondary" href="/">Go Back</a>
    <a class="button" href="/photos/create/{{$album->id}}">Upload Photo</a>
    <hr>
    <?php if(count($album->photos) > 0) :?>
        <?php $colcount = count($album->photos) ?>
        <?php $i = 1 ?>
        <div id="photos">
            <div class="grid-x text-center">
                <?php foreach($album->photos as $photo) :?>
                    <?php if($i == $colcount) :?>
                        <div class="columns medium-4 end">
                            <a href="/photos/{{$photo->id}}">
                                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$album->title}}">
                            </a>
                            <br>
                            <h4>{{$photo->title}}</h4>
                    <?php else :?>
                        <div class="columns medium-4">
                            <a href="/photos/{{$photo->id}}">
                                <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$album->title}}">
                            </a>
                            <br>
                            <h4>{{$photo->title}}</h4>
                    <?php endif ?>
                    <?php if ($i % 3 == 0) :?>
                        </div>
                    </div>
                    <div class="row text-center">
                    <?php else :?>
                        </div>
                    <?php endif ?>
                    <?php $i++; ?>
                <?php endforeach ?>
            </div>
        </div>
    <?php else :?>
        <h3>No Photos to display</h3>    
    <?php endif ?>  
@endsection