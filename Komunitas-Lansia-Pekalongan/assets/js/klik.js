function muatUlang() {
   var dua = document.getElementById("detDua");
   var tiga = document.getElementById("detTiga");
	  dua.style.visibility = 'hidden';
	  tiga.style.visibility = 'hidden';
	  dua.style.display = 'none';
	  tiga.style.display = 'none';
}

function duaDetail() {
   var dua = document.getElementById("detDua");
   var tiga = document.getElementById("detTiga");
	  dua.style.visibility = 'visible';
	  tiga.style.visibility = 'hidden';
	  dua.style.display = 'block';
	  tiga.style.display = 'none';
}

function tigaDetail() {
   var dua = document.getElementById("detDua");
   var tiga = document.getElementById("detTiga");
	  tiga.style.visibility = 'visible';
	  dua.style.visibility = 'hidden';
	  tiga.style.display = 'block';
	  dua.style.display = 'none';
}

