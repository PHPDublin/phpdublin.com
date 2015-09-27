<div class="item item-blog">
    <div class="row">
        <div class="col-sm-3 side">
            <a target="__blank" href="http://github.com/{{ $blog->author()->value() }}">
                <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$blog->author()->value()}}"/>
                <span class="author">{{$blog->author()->value()}}</span>
            </a>
        </div>
        <div class="col-sm-9 main-content">
            <h3>
                <a href="{{ route('blog.show', [$blog->id()->value(), $blog->title()->slug()]) }}">
                    {{ $blog->title()->value() }}
                </a>
            </h3>
            <div class="blog-content">
                <p>{!! substr(strip_tags($renderer->convertToHtml($blog->content()->value())), 0, 350) !!} ...</p>
                <a class="pull-right btn btn-default read-more" href="{{ route('blog.show', [$blog->id()->value(), $blog->title()->slug()]) }}">Read more</a>
            </div>
        </div>
    </div>
</div>
