<div class="item item-blog">
    <div class="row">
        <div class="col-sm-3">
            <div class="side">
                <a target="__blank" href="http://github.com/{{$post->author()->value()}}">
                    <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$post->author()->value()}}"/>
                    <span class="author">{{$post->author()->value()}}</span>
                </a>
            </div>
        </div>
        <div class="col-sm-9">
            <h2>
                <a href="{{ route('blog.show', [$post->id()->value(), $post->title()->slug()]) }}">
                    {{ $post->title()->value() }}
                </a>
            </h2>
            <div class="blog-content">
                <p>{!! $renderer->convertToHtml($post->content()->value()) !!} ...</p>
            </div>
        </div>
    </div>
</div>
