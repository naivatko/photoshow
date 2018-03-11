@extends('layouts.app')

@section('content')
    <?php if(count($albums) > 0) :?>
        <?php $colcount = count($albums) ?>
        <?php $i = 1 ?>
        <div id="albums">
            <div class="grid-x text-center">
                <?php foreach($albums as $album) :?>
                    <?php if($i == $colcount) :?>
                        <div class="columns medium-4 end">
                            <a href="/albums/{{$album->id}}">
                                <img class="thumbnail" src="/storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                            </a>
                            <br>
                            <h4>{{$album->name}}</h4>
                    <?php else :?>
                        <div class="columns medium-4">
                            <a href="/albums/{{$album->id}}">
                                <img class="thumbnail" src="/storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                            </a>
                            <br>
                            <h4>{{$album->name}}</h4>
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
        <h3>No album to display</h3>    
    <?php endif ?>    
@endsection