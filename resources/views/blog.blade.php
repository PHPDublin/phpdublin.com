@extends('layout.master')

@section('content')

    @foreach($posts as $post) 
        <h2>{{$post->title()->value()}}</h2>
        <h4>
            <a target="__blank" href="http://github.com/{{$post->author()->value()}}">
                <img src="" style="display:none" class="github-avatar img img-circle img-responsive" data-github-username="{{$post->author()->value()}}"/>
                <span class="author">{{$post->author()->value()}}</span>
            </a>
        </h4><br>
        {!!$renderer->convertToHtml($post->content()->value())!!}
    @endforeach
    
    <script type="text/javascript">
    
    $(function(){
        $(".github-avatar").each(fetchAvatar);
    });
    
    function fetchAvatar()
    {
        var $this = $(this);
        var username = $this.attr("data-github-username");
        $.get("https://api.github.com/users/"+username, function(githubUserData) {
            $this.attr('src', githubUserData.avatar_url);
            $this.show();
        });
    }

    </script>

@endsection
