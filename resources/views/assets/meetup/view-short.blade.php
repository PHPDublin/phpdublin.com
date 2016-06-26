<div class="item item-meetup">
    <div class="row">
        <div class="col-sm-3 side">
            <a target="__blank" href="http://github.com/{{ $meetup->author()->value() }}">
                <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$meetup->author()->value()}}"/>
                <span class="author">{{$meetup->author()->value()}}</span>
            </a>
        </div>
        <div class="col-sm-9 main-content">
            <h3>
                <a href="{{ route('meetup.show', [$meetup->id()->value(), $meetup->title()->slug()]) }}">
                    {{ $meetup->title()->value() }}
                </a>
            </h3>
            <div class="meetup-content">
                <p>{!! substr(strip_tags($renderer->convertToHtml($meetup->content()->value())), 0, 350) !!} ...</p>
                <a class="pull-right btn btn-default read-more" href="{{ route('meetup.show', [$meetup->id()->value(), $meetup->title()->slug()]) }}">Read more</a>
            </div>
        </div>
    </div>
</div>
