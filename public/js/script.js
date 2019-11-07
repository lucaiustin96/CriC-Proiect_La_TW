
//pentru meniu responsiv
function myFunction() {
    var x = document.getElementById("menu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
/*
var i = 0;
var listLength;
var lis = document.getElementById("slider").getElementsByTagName("img");
listLength = lis.length;

function openGallery(i) {
	document.getElementById("slider-full").style.display = "block";
	document.getElementById("left").style.display = "block";
	document.getElementById("right").style.display = "block";
	document.getElementById("close").style.display = "block";
	photoGallery(i);	
}

function photoGallery(i) {
	document.getElementById("slider-full").innerHTML = "<img src = '" + lis[i].getAttribute('src') + "'>";
}

function rightClick() {
	i = i + 1;
	if(i == listLength)
		i = -1;
	photoGallery(i);
}

function leftClick() {
	i = i - 1;
	if(i == -1)
		i = listLength - 1;
	photoGallery(i);
}

function closeGallery() {
	document.getElementById("slider-full").style.display = "none";
	document.getElementById("left").style.display = "none";
	document.getElementById("right").style.display = "none";
	document.getElementById("close").style.display = "none";
}
*/
function loadEvent() {
	var eventValue = document.getElementById("eveniment").value;
    var xhttp = new XMLHttpRequest();
	
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("optiune-selectata").innerHTML = this.responseText;
		}
	};
		xhttp.open("GET", "/git/CriC/views/content/content-optiuni/content-cutremur.php", true);
	if(eventValue == "inundatii")
		xhttp.open("GET", "/git/CriC/views/content/content-optiuni/content-inundatii.php", true);
	if(eventValue == "alunecari")
		xhttp.open("GET", "/git/CriC/views/content/content-optiuni/content-alunecari.php", true);
	if(eventValue == "incendiu")
		xhttp.open("GET", "/git/CriC/views/content/content-optiuni/content-incendiu.php", true);
	xhttp.send();
}