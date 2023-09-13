let posts = document.currentScript.getAttribute('posts');
let divCards = document.getElementById('cardes');
console.log(posts)
function createCard(){
	
}
if(posts != '') {
	posts = JSON.parse(posts)[0].SavedPosts;
	
}  