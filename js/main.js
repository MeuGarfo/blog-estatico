function filtrarPosts() {
    var input, filter, listaDePosts, status, post, link, i;
    input = document.getElementById("buscaDePost");
    filter = input.value.toUpperCase();
    listaDePosts = document.getElementById("posts");
    status = document.getElementById("status");
    post = listaDePosts.getElementsByTagName("li");
    for (i = 0; i < post.length; i++) {
        link = post[i].getElementsByTagName("a")[0];
        if (link) {
            if (link.innerHTML.toUpperCase().indexOf(filter) > -1) {
                post[i].style.display = "";

            } else {
                post[i].style.display = "none";
            }
        }
    }

	posts = document.querySelectorAll('#posts > li');
	var postsArray = [].slice.call(posts);
	var displayNone = postsArray.filter(function(el) {
		return getComputedStyle(el).display === "none"
	});
	var displayShow = postsArray.filter(function(el) {
		return getComputedStyle(el).display !== "none"
	});
	var numberOfHiddenPosts = displayNone.length;
	var numberOfVisiblePosts = displayShow.length;

    if(numberOfVisiblePosts>0){
    	status.style.display = "none";
    }else{
        status.style.display = "block";
    }
}
