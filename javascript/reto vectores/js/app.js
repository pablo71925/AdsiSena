

// V a r i a b l e s - - - - - - - - - - - - - - - - - - -
var pks = document.querySelectorAll('.pokemons li');

var adf = document.getElementById('add-first');
var adl = document.getElementById('add-last');

var def = document.getElementById('del-first');
var del = document.getElementById('del-last');

var slt = undefined;
var arr = new Array();

var list   = document.getElementById('list');
var conten = "";

// A c t i v a r   P e r s o n a j e s - - - - - - - - -
for (var i = 0; i < pks.length; i++) {
	pks[i].onclick = function() {
		unselect();
		this.classList.add('active');
		slt = this.getAttribute('id');
	}
}

// A d i c i o n a r   P r i m e r o - - - - - - - - - -
adf.onclick = function() {
	if(slt != undefined) {
		arr.unshift(slt);
		unselect();
		fill();
	} else {
		alert('Debe seleccionar al menos un pokemon!');
	}
}
// A d i c i o n a r   U l t i m o - - - - - - - - - - -
adl.onclick = function() {
	if(slt != undefined) {
		arr.push(slt);
		unselect();
		fill();
	} else {
		alert('Debe seleccionar al menos un pokemon!');
	}
}
// E l i m i n a r   P r i m e r o - - - - - - - - - - -
def.onclick = function() {
	if(arr.length > 0) {
		arr.shift();
		fill();
	} else {
		alert('No hay pokemones para eliminar!');
	}
}
// E l i m i n a r   U l t i m o - - - - - - - - - - - -
del.onclick = function() {
	if(arr.length > 0) {
		arr.pop();
		fill();
	} else {
		alert('No hay pokemones para eliminar!');
	}
}


// Q u i t a r   C l a s e   A c t i v e - - - - - - - -
function unselect() {
	for (var c = 0; c < pks.length; c++) {
		pks[c].classList.remove('active');
	}
	slt = undefined;
}

// L l e n a r   L i s t a - - - - - - - - - - - - - - -
function fill() {
	conten = '';
	for (var i = 0; i < arr.length; i++) {
		conten += "<li class="+arr[i]+"></li>";
	}
	list.innerHTML = conten;
}

