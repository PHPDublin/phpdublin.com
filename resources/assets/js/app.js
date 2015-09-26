window.$ = window.jQuery = require('jquery');
var bootstrap = require('bootstrap');

$(function(){
    $(".github-avatar").each(fetchAvatar);
});

function fetchAvatar()
{
    var $this = $(this);
    var username = $this.attr("data-github-username");
    $.get("https://api.github.com/users/"+username, function(githubUserData) {
        $this.attr('src', githubUserData.avatar_url + '&s=140');
        $this.show();
    });
}

