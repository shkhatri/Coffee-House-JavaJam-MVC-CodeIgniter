// Put your Last.fm API key here
var api_key = "c5878ac03973e03dfbc76b4198122308";

function sendRequest () {
    var xhr = new XMLHttpRequest();
	var xhr1 = new XMLHttpRequest();
    var method = "artist.getinfo";
	var method1 = "artist.getTopAlbums";
	var images = '';
    
	
    var artist = encodeURI(document.getElementById("form-input").value);
    xhr.open("GET", "/Khatri_JavaJam/assets/js/proxy.php?method="+method+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
    xhr.setRequestHeader("Accept","application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
        	var xyz = xhr.responseText;
            var json = JSON.parse(xhr.responseText);
            var str = JSON.stringify(json,undefined,2);
			document.getElementById("name").innerHTML=json.artist.name;
			document.getElementById("link").innerHTML=json.artist.url;
			document.getElementById("info").innerHTML=json.artist.bio.content;
			images = '<img src="' + json.artist.image[2]['#text'] + '" />';
			document.getElementById("pic").innerHTML=images;
			document.getElementById("info").innerHTML=json.artist.bio.content;
			document.getElementById("simiArtist1").innerHTML=json.artist.similar.artist[0].name;
			document.getElementById("simiArtist2").innerHTML=json.artist.similar.artist[1].name;
			document.getElementById("simiArtist3").innerHTML=json.artist.similar.artist[2].name;
           
        }
    };
	
	xhr1.open("GET", "/Khatri_JavaJam/assets/js/proxy.php?method="+method1+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
	xhr1.setRequestHeader("Accept","application/json");
    xhr1.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
			var images1 = '';
			var images2 = '';
			var images3 = '';
			document.getElementById("album1").innerHTML=json.topalbums.album[0].name;
			images1 = '<img src="' + json.topalbums.album[0].image[2]['#text'] + '" />';
			document.getElementById("pic1").innerHTML=images1;
			document.getElementById("album2").innerHTML=json.topalbums.album[1].name;
			images2 = '<img src="' + json.topalbums.album[1].image[2]['#text'] + '" />';
			document.getElementById("pic2").innerHTML=images2;
			document.getElementById("album3").innerHTML=json.topalbums.album[2].name;
			images3 = '<img src="' + json.topalbums.album[2].image[2]['#text'] + '" />';
			document.getElementById("pic3").innerHTML=images3;
           
        }
    };
    xhr1.send(null);
	xhr.send(null);
}


