<div class="item item-meetup">
    <div class="row">
        <div class="col-sm-3">
            <div class="side">
                <a target="__blank" href="http://github.com/{{$article->author()->value()}}">
                    <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$article->author()->value()}}"/>
                    <span class="author">{{$article->author()->value()}}</span>
                </a>
            </div>
        </div>
        <div class="col-sm-9">
            <h2>
                <a href="{{ route('meetup.show', [$article->id()->value(), $article->title()->slug()]) }}">
                    {{ $article->title()->value() }}
                </a>
            </h2>
            <div class="meetup-content">
                <p>{!! $renderer->convertToHtml($article->content()->value()) !!}</p>
            </div>
        </div>
    </div>
</div>
