@if($postsPopular)
    @foreach($postsPopular as $postPopular)
        <div class="row">
            <div class="col-xs-1 text-left">
                {{--                                <img height="40px" src="{{$postsPopular->photo ? asset($postsPopular->photo->file) : 'https://placehold.it/400x400'}}">--}}
                <img height="40px" src="https://placehold.it/400x400">
            </div>
            <div class="col-xs-11 text-right">
                {{$postPopular->title}}
            </div>
        </div>
    @endforeach
@endif