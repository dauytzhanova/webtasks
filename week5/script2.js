
function changeImg(e){
	 var imgReplace = document.getElementsByTagName("img")[0].src = e.target.src;
	}


document.body.addEventListener('click', changeImg);