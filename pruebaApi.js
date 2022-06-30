// OBTENER ELEMENTOS DEL DOM
let obtenerNombre = document.getElementById("nombre");
let obtenerHabilidades = document.getElementById("habilidades");
let pokefoto = document.getElementById("pokefoto");
let pokefotoAtras = document.getElementById("pokefoto");
let form = document.forms["form"];
let pokemonId = 151;

let pokeFotoAtras =
  "https://img.pokemondb.net/sprites/black-white/anim/back-normal/onix.gif";
let pokeFotoFrente =
  "https://img.pokemondb.net/sprites/black-white/anim/normal/onix.gif";
const pokeSig = document.getElementById("ObtenerId");

// TRAER EL VALOR INGRESADO EN EL FORMULARIO
form.onsubmit = function (e) {
  e.preventDefault();
  let pokemonName = document.form.nombrePokemon.value.toLowerCase();
  buscarPokemon(pokemonName);
};

// DESDE LA API BUSCAMOS POKEMON CON NOMBRE O ID INGRESADO EN EL FORMULARIO
function buscarPokemon(pokemonName) {
  fetch("https://pokeapi.co/api/v2/pokemon/" + pokemonName)
    .then((response) => {
      if (!response.ok) throw Error(response.status);
      return response;
    })
    .then((response) => response.json())
    .catch((error) =>
      alert(
        "No se encuentra el Pokemon " +
          pokemonName +
          " eso no es muy Pokeamigo de tu parte"
      )
    )
    .then((pokemon) => {
      pokemonName = pokemon.name;
      pokemonId = pokemon.id;
      pokeFotoFrente =
        "https://img.pokemondb.net/sprites/black-white/anim/normal/" +
        pokemonName +
        ".gif";
      pokeFotoAtras =
        "https://img.pokemondb.net/sprites/black-white/anim/back-normal/" +
        pokemonName +
        ".gif";
      pokefoto.setAttribute("src", pokeFotoFrente);

      obtenerNombre.innerHTML = pokemonName.toUpperCase();

      let obtenerId = document.getElementById("ObtenerId"); // obtengo la id

      while (obtenerId.hasChildNodes()) {
        obtenerId.removeChild(obtenerId.firstChild);
      }

      let textoIdPokemon = document.createTextNode("ID: " + pokemon.id);
      let crearIdPokemon = document.createElement("h1");
      crearIdPokemon.appendChild(textoIdPokemon);
      obtenerId.appendChild(textoIdPokemon);

      let listaOrdenadaHabilidades = document.getElementById("habilidades");

      while (listaOrdenadaHabilidades.hasChildNodes()) {
        listaOrdenadaHabilidades.removeChild(
          listaOrdenadaHabilidades.firstChild
        );
      }
      pokemon.moves.map((nombreHabilidad, index) => {
        if (index < 4) {
          let textoNombreHabilidad = document.createTextNode(
            nombreHabilidad.move.name
          );
          let crearNombreHabilidad = document.createElement("li");
          crearNombreHabilidad.appendChild(textoNombreHabilidad);
          obtenerHabilidades.appendChild(textoNombreHabilidad);
          listaOrdenadaHabilidades.appendChild(crearNombreHabilidad);
        }
      });
    });
}

let estadoFoto = false;

$("#pokefoto").click(function () {
  if (estadoFoto == true) {
    $("#pokefoto").attr("src", pokeFotoFrente);
    estadoFoto = false;
  } else {
    $("#pokefoto").attr("src", pokeFotoAtras);
    estadoFoto = true;
  }
});

$(".fakeimg").hover(
  function () {
    $(this).addClass("grande");
  },
  function () {
    $(this).removeClass("grande");
  }
);

$("#anterior").click(function () {
  pokemonId--;
  buscarPokemon(pokemonId);
});

$("#siguiente").click(function () {
  pokemonId++;
  buscarPokemon(pokemonId);
});
