addEventListener(onload, getposts());

var title = document.getElementById('title');
var content = document.getElementById('content');

function getposts()
{
    var xhr = new XMLHttpRequest()
    
    xhr.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            //request finished - parse JSON and display it 
            var data = JSON.parse(xhr.responseText);
            title.innerHTML = data.title;
            content.innerHTML = data.content;
        }
    };

    xhr.open("GET", "get_post.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.send();
}