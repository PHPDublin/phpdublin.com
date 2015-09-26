<div class="item item-blog">
    <div class="row">
        <div class="col-sm-3 side">
            <a target="__blank" href="http://github.com/{{$post->author()->value()}}">
                <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$post->author()->value()}}"/>
                <span class="author">{{$post->author()->value()}}</span>
            </a>
        </div>
        <div class="col-sm-9 main-content">
            <h3>
                <a href="{{ route('blog.show', [$post->id()->value(), $post->title()->slug()]) }}">
                    {{ $post->title()->value() }}
                </a>
            </h3>
            <div class="blog-content">
                <p>{!! substr(strip_tags($renderer->convertToHtml($post->content()->value())), 0, 350) !!} ...</p>
                <a class="pull-right btn btn-default read-more" href="/blog/post/{{$post->id()->value()}}/{{str_slug($post->title()->value(), '-')}}">Read more</a>
            </div>
        </div>
    </div>
</div>
