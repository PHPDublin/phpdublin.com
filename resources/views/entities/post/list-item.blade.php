<div class="item item-blog">
    <div class="row">
        <div class="col-sm-3 side">
            <a target="__blank" href="{{ $post->author }}">
                <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{ $post->author }}"/>
                <span class="author">{{ $post->author }}</span>
            </a>
        </div>
        <div class="col-sm-9 main-content">
            <h3>
                <a href="#">
                    {{ $post->title }}
                </a>
            </h3>
            <div class="blog-content">
                <a class="pull-right btn btn-default read-more" href="#">Read more</a>
            </div>
        </div>
    </div>
</div>
