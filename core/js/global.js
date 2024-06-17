jQuery(document).ready(function($) {

$('.carousel').slick({
  dots: true,
  autoplay: false,
  autoplaySpeed: 1000,
  arrows: true,
  infinite: false,
  slidesToShow: 4,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        dots: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2, // Cambiado a 2 para mostrar 2 imágenes en dispositivos de ese tamaño
        slidesToScroll: 1, // Cambiado a 1 para evitar que salte una carta en la versión móvil
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }
  ]
});

 window.addEventListener('mousemove', function(e) {
    let parallaxElements = document.querySelectorAll('.parallax');

    parallaxElements.forEach(function(element) {
      let rect = element.getBoundingClientRect();
      let offsetX = (e.clientX - rect.left) / rect.width - 0.5;
      let offsetY = (e.clientY - rect.top) / rect.height - 0.5;

      let xAngle = offsetY * 5; // Ajusta los valores según el efecto deseado
      let yAngle = offsetX * -5;

      element.querySelector('.inner').style.transform = 'translateZ(-50px) scale(1.05) rotateX(' + xAngle + 'deg) rotateY(' + yAngle + 'deg)';
    });
  });


});

jQuery(document).ready(function($) {

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      // Verificar si entry.target no es null
      if (entry.isIntersecting && entry.target) {
        // Verificar si el elemento existe en el DOM y no pertenece al slider
        const $target = $(entry.target);
        if ($target.length > 0 && !$target.hasClass('slick-slide')) {
          // Agregar la clase si el elemento es válido
          $target.addClass('animate__animated animate__fadeIn');
          observer.unobserve(entry.target); // Detiene la observación una vez que se ha añadido la animación
        }
      }
    });
  }, { threshold: 0.5 }); // Cambia este valor si deseas ajustar la sensibilidad de la intersección

  $('.appear').each(function() {
    observer.observe(this);
  });

});

jQuery(document).ready(function($) {

// Slider 1
var slideIndex = 0;
var slides = $('.carta-porque');

showSlide(slideIndex);

$('.prev-porque').click(function() {
  slideIndex = (slideIndex - 1 + slides.length) % slides.length;
  showSlide(slideIndex);
});

$('.next-porque').click(function() {
  slideIndex = (slideIndex + 1) % slides.length;
  showSlide(slideIndex);
});

function showSlide(index) {
  slides.hide();
  slides.eq(index).show();
}

// Slider 2
var slideIndexNuevo = 0;
var slidesNuevo = $('.card-nuevo');

showSlideNuevo(slideIndexNuevo);

$('.prev-nuevo').click(function() {
  slideIndexNuevo = (slideIndexNuevo - 1 + slidesNuevo.length) % slidesNuevo.length;
  showSlideNuevo(slideIndexNuevo);
});

$('.next-nuevo').click(function() {
  slideIndexNuevo = (slideIndexNuevo + 1) % slidesNuevo.length;
  showSlideNuevo(slideIndexNuevo);
});

function showSlideNuevo(index) {
  slidesNuevo.hide();
  slidesNuevo.eq(index).show();
}

// Slider 3
var slideIndexTercero = 0;
var slidesTercero = $('.card');

showSlideTercero(slideIndexTercero);

$('.prev').click(function() {
  slideIndexTercero = (slideIndexTercero - 1 + slidesTercero.length) % slidesTercero.length;
  showSlideTercero(slideIndexTercero);
});

$('.next').click(function() {
  slideIndexTercero = (slideIndexTercero + 1) % slidesTercero.length;
  showSlideTercero(slideIndexTercero);
});

function showSlideTercero(index) {
  slidesTercero.hide();
  slidesTercero.eq(index).show();
}



var slideIndexContenedor = 0;
var slidesContenedor = $('.contenedor');

showSlideContenedor(slideIndexContenedor);

$('.prev').click(function() {
  slideIndexContenedor = (slideIndexContenedor - 1 + slidesContenedor.length) % slidesContenedor.length;
  showSlideContenedor(slideIndexContenedor);
});

$('.next').click(function() {
  slideIndexContenedor = (slideIndexContenedor + 1) % slidesContenedor.length;
  showSlideContenedor(slideIndexContenedor);
});

function showSlideContenedor(index) {
  slidesContenedor.hide();
  slidesContenedor.eq(index).show();
}


var slideIndexContenedorMobile = 0;
var slidesContenedorMobile = $('.contenedor-mobile');

showSlideContenedorMobile(slideIndexContenedorMobile);

$('.prev').click(function() {
  slideIndexContenedorMobile = (slideIndexContenedorMobile - 1 + slidesContenedorMobile.length) % slidesContenedorMobile.length;
  showSlideContenedorMobile(slideIndexContenedorMobile);
});

$('.next').click(function() {
  slideIndexContenedorMobile = (slideIndexContenedorMobile + 1) % slidesContenedorMobile.length;
  showSlideContenedorMobile(slideIndexContenedorMobile);
});

function showSlideContenedorMobile(index) {
  slidesContenedorMobile.hide();
  slidesContenedorMobile.eq(index).show();
}


let questions = document.querySelectorAll(".faq_question");

questions.forEach((question) => {
  let icon = question.querySelector(".icon-shape");

  question.addEventListener("click", (event) => {
    const active = document.querySelector(".faq_question.active");
    const activeIcon = document.querySelector(".icon-shape.active");

    if (active && active !== question) {
      active.classList.toggle("active");
      activeIcon.classList.toggle("active");
      
      active.nextElementSibling.style.maxHeight = 0;
    }

    question.classList.toggle("active");
    icon.classList.toggle("active");

    const answer = question.nextElementSibling;

  
  if (question.classList.contains("active")) {
      answer.style.maxHeight = "630px"; // Height of active box

      // Scroll to the end of the active box only when activated
      setTimeout(() => {
        answer.scrollIntoView({ behavior: 'smooth', block: 'end' });
      }, 180); // Adjust the delay as needed
    } else {
      answer.style.maxHeight = 0;
    }
  });
});

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
    document.getElementById("header").style.transition = ".3s";
    document.getElementById("logo").style.transform = "translateX(0px)";
  } else {
    document.getElementById("header").style.top = "-80px"; // Cambia 80px al tamaño de tu menú
    document.getElementById("logo").style.transform = "translateX(-230px)"; //130px
  }
  prevScrollpos = currentScrollPos;
}




$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });

});

jQuery(document).ready(function($) {
  // Obtenemos la URL de la página actual
  var currentPage = window.location.href;

  // Obtenemos todos los elementos <a> dentro del menú
  var menuLinks = document.querySelectorAll('.nav-link');

  // Recorremos los enlaces del menú
  menuLinks.forEach(function(link) {
    // Comparamos la URL del enlace con la URL de la página actual
    if (link.href === currentPage) {
      // Agregamos la clase 'activo' al enlace si la URL coincide
      link.classList.add('activo');
    }
  });
  
  
});

jQuery(document).ready(function($) {
  // Agregar un manejador de eventos clic a los enlaces con la clase 'custom-btn'
  $('.custom-btn').click(function(event) {
    // Evitar el comportamiento predeterminado del enlace
    event.preventDefault();
    
    // Obtener la URL del PDF desde el atributo href del enlace
    var pdfURL = $(this).attr('href');
    
    // Abrir el PDF en una nueva pestaña
    window.open(pdfURL, '_blank');
  });

});


function initMap() {
const map = new google.maps.Map(document.getElementById("map-dos"), {
    center: { lat: -33.46421886408509, lng: -70.61547214236565 },
    zoom: 16,
});



const infoWindow = new google.maps.InfoWindow();

// Inicializa el mapa con los valores de latitud y longitud específicos
function initMap2(lat, lng, nombre) {
    map.setCenter({ lat, lng });
    map.setZoom(16);

    // Abre la ventana de información con los detalles del nombre
    infoWindow.setContent(nombre);
    infoWindow.setPosition({ lat, lng });
    infoWindow.open(map);
}

// Obtén todos los elementos <path> con el id "path1"
var paths = document.querySelectorAll("#path1");

// Itera sobre cada elemento <path>
paths.forEach(function(path) {
    // Agrega un event listener para el clic en cada elemento <path>
    path.addEventListener("click", function() {
        const lat = parseFloat(this.getAttribute("data-lat"));
        const lng = parseFloat(this.getAttribute("data-lng"));
        const nombre = this.getAttribute("data-nombre");

        // Actualiza el mapa con las nuevas coordenadas y nombre
        initMap2(lat, lng, nombre);
    });
});

const activePath = document.querySelector('.mapa.active');
const lat = parseFloat(activePath.getAttribute("data-lat"));
const lng = parseFloat(activePath.getAttribute("data-lng"));
const nombre = activePath.getAttribute("data-nombre");

// Llama a la función initMap2 para mostrar la ubicación de Santiago al cargar la página
initMap2(lat, lng, nombre);

}

//Obtener todos los elementos <path> dentro del SVG
const paths = document.querySelectorAll('#mapa-svg path');

// Función para manejar clics en los elementos <path>
function handleClick(event) {
// Deseleccionar todos los elementos
paths.forEach(path => {
  path.classList.remove('active');
  path.classList.add('disable');
});

// Seleccionar el elemento clicado
event.target.classList.remove('disable');
event.target.classList.add('active');
}

// Agregar event listeners para clics en cada elemento <path>
paths.forEach(path => {
path.addEventListener('click', handleClick);
});


// COBERTURA
function initMap1() {
    const mapDiv = document.getElementById("mapa-uno");
    const defaultPosition = { lat: -33.46421886408509, lng: -70.61547214236565 };

    const map = new google.maps.Map(mapDiv, {
        zoom: 16,
        center: defaultPosition,
    });

    let mapMarker = null;
    const infoWindow = new google.maps.InfoWindow();

    function addMarker(position, title) {
        if (mapMarker) {
            mapMarker.setMap(null);
        }
        mapMarker = new google.maps.Marker({
            position,
            map,
            title,
        });
    }

    function updateMapAndInfo() {
        const regionSelector = document.getElementById("regionSelector");
        const selectedRegion = regionSelector.value;
        const regionCoordinates = {
            // Coordenadas de las regiones
            "Arica": { lat: -18.4783, lng: -70.3126 },
            "Iquique": { lat: -20.2208, lng: -70.1431 },
            "Antofagasta": { lat: -23.6509, lng: -70.3975 },
            "Calama": { lat: -22.4544, lng: -68.929 },
            "La Serena": { lat: -29.9045, lng: -71.2489 },
            "Valparaíso": { lat: -33.0472, lng: -71.6127 },
            "Quillota": { lat: -32.8836, lng: -71.248 },
            "Viña del Mar": { lat: -33.0153, lng: -71.5506 },
            "Rancagua": { lat: -34.1703, lng: -70.7408 },
            "Santiago": { lat: -33.46421886408509, lng: -70.61547214236565 },
            "Talca": { lat: -35.4264, lng: -71.6554 },
            "Chillán": { lat: -36.6066, lng: -72.1034 },
            "Los Ángeles": { lat: -37.4713, lng: -72.3486 },
            "Curicó": { lat: -34.9829, lng: -71.2394 },
            "Concepción": { lat: -36.8201, lng: -73.044 },
            "Temuco": { lat: -38.7397, lng: -72.5984 },
            "Valdivia": { lat: -39.8196, lng: -73.2452 },
            "Osorno": { lat: -40.5742, lng: -73.133 },
            "Puerto Montt": { lat: -41.4711, lng: -72.9369 },
            "Coyhaique": { lat: -45.5712, lng: -72.0683 },
            "Punta Arenas": { lat: -53.1548, lng: -70.9167 }
        };

        const ramales = {
            "Arica": ["AZAPA", "CAMARONES", "GRAL LAGOS", "POCONCHILE", "PUTRE", "VALLE LLUTA", "CHIRONTA", "GENERAL LAGOS"],
            "Iquique": ["ALTO HOSPICIO", "COLCHANE", "CAMIÑA", "LA HUAICA", "LA TIRANA", "MATILLA", "PICA", "POZO AL MONTE", "HUARA"],
            "Antofagasta": ["BAQUEDANO", "MEJILLONES", "MARIA ELENA", "TALTAL", "LA NEGRA", "VERGARA", "TOCOPILLA", "CERRO MORENO"],
            "Calama": ["OLLAGUE", "SAN PEDRO DE ATACAMA", "SIERRA GORDA", "CHUQUICAMATA"],
            "La Serena": ["ANDACOLLO", "COQUIMBO", "LA HIGUERA", "PAIHUANO", "TONGOY", "CHAÑARAL ALTO", "El Arenal", "EL PALQUI", "LA HERRADURA", "VICUÑA", "Pelicano", "GUANAQUEROS", "LA COMPAÑÍA", "LAS TACAS", "MINCHA", "PAN DE AZUCAR", "PUERTO VELERO", "TOTORALILLO", "VALLE DEL ELQUI"],
            "Valparaíso": ["LAGUNA VERDE", "CURAUMA", "PLACILLA QUINTA REGION"],
            "Quillota": ["OLMUE", "VILLA ALEMANA", "LIMACHE", "SAN FRANCISCO DE LIMACHE", "SAN PEDRO QUINTA REGION"],
            "Viña del Mar": ["EL BELLOTO", "QUILPUE", "REÑACA", "CONCON", "SAN SEBASTIAN"],
            "Rancagua": ["LITUECHE", "LA ESTRELLA", "CHIMBARONGO", "CHEPICA", "CALETONES", "DOÑIHUE", "LOLOL", "MARCHIGUE", "OLIVAR ALTO", "PAREDONES", "PALMILLA", "PLACILLA RANCAGUA", "QUINTA TILCOCO", "REQUINOA", "SAN VICENTE DE T.T.", "CODEGUA", "RENGO", "SANTA CRUZ", "NAVIDAD", "COLTAUCO", "LAS CABRAS", "NANCAGUA", "PICHIDEGUA", "PICHILEMU", "SAN FERNANDO", "PERALILLO", "ALHUE", "COINCO", "GRANEROS", "MACHALI", "PEUMO", "SAN FCO. DE MOSTAZAL", "MALLOA", "PUMANQUE", "LO MIRANDA", "OLIVAR", "PELEQUEN", "ROSARIO"],
            "Santiago": ["CONCHALI", "CERRILLOS", "CERRO NAVIA", "EL BOSQUE", "ESTACION CENTRAL", "HUECHURABA", "INDEPENDENCIA", "LO BARNECHEA", "LAS CONDES", "LA CISTERNA", "LO ESPEJO", "LA FLORIDA", "LA GRANJA", "LO PRADO", "LA PINTANA", "LA REINA", "MAIPU", "MACUL", "ÑUÑOA", "PROVIDENCIA", "PUENTE ALTO", "PEDRO AGUIRRE CERDA", "PEÑALOLEN", "PUDAHUEL", "QUILICURA", "QUINTA NORMAL", "RENCA", "RECOLETA", "SAN BERNARDO", "SAN JOAQUIN", "SAN MIGUEL", "SAN RAMON", "VITACURA", "LAMPA", "PIRQUE", "MALLOCO", "ALGARROBO", "COLINA", "EL TABO", "CASABLANCA", "CURACAVI", "EL QUISCO", "MARIA PINTO", "PADRE HURTADO", "SAN JOSE DE MAIPO", "TALAGANTE", "PAINE", "EL PAICO", "ISLA DE MAIPO", "PEÑAFLOR", "TILTIL", "BUIN", "CALERA DE TANGO", "BATUCO", "EL MONTE", "SAN PEDRO DE MELIPILLA", "LINDEROS", "ALTO JAHUEL", "BARRANCAS", "CHAMPA", "CHICUREO", "CODIGUA", "EL MELOCOTON", "HOSPITAL", "LA DEHESA", "LONGOVILO", "LONQUEN", "NOS", "NOVICIADO", "QUINTAY"],
            "Talca": ["COLBUN", "CAUQUENES", "CUREPTO", "PELARCO", "RIO CLARO", "SAN CLEMENTE", "SAN RAFAEL", "CHANCO", "EMPEDRADO", "PELLUHUE", "VILLA ALEGRE", "CONSTITUCION", "PENCAHUE", "SAN JAVIER", "MAULE", "CURANIPE", "ITAHUE", "MIRAFLORES"],
            "Chillán": ["Cholguan", "BULNES", "COBQUECURA", "CHILLAN VIEJO", "NINHUE", "PEMUCO", "PORTEZUELO", "QUILLON", "SAN CARLOS", "SAN GREGORIO DE ÑIQUEN", "SAN IGNACIO", "YUNGAY", "COIHUECO", "PINTO", "SAN FABIAN", "SAN NICOLAS", "EL CARMEN", "QUIRIHUE", "RANQUIL", "Nahueltoro", "Puerto Seco", "NUEVA ALDEA", "ÑIQUEN"],
            "Los Ángeles": ["COLLIPULLI", "LAJA", "MULCHEN", "NACIMIENTO", "QUILACO", "QUILLECO", "TUCAPEL", "YUMBEL", "PUREN", "LOS SAUCES", "SANTA BARBARA", "SAN ROSENDO", "ANGOL", "ANTUCO", "CABRERO", "NEGRETE", "RENAICO", "HUEPIL", "Monte Aguila", "ALTO BIO BIO", "MININCO"],
            "Curicó": ["HUALAÑE", "LICANTEN", "LONTUE", "ROMERAL", "TENO", "RAUCO", "MOLINA", "SAGRADA FAMILIA", "VICHUQUEN"],
            "Concepción": ["TIRUA", "HUALPEN", "CORONEL", "CHIGUAYANTE", "DICHATO", "LOS ALAMOS", "SANTA JUANA", "TOME", "CURANILAHUE", "LEBU", "COELEMU", "TALCAHUANO", "ARAUCO", "CAÑETE", "HUALQUI", "LIRQUEN", "PENCO", "TREHUACO", "FLORIDA", "LOTA", "SAN PEDRO DE LA PAZ", "CONTULMO", "QUIRIQUINA"],
            "Temuco": ["VICTORIA", "LONCOCHE", "CURACAUTIN", "CARAHUE", "CURARREHUE", "FREIRE", "GALVARINO", "GORBEA", "LONQUIMAY", "LAUTARO", "LUMACO", "CUNCO", "NUEVA IMPERIAL", "PADRE LAS CASAS", "PERQUENCO", "TEODORO SCHMIDT", "VILCUN", "TRAIGUEN", "PUERTO SAAVEDRA", "PUCON", "TEMUCO", "ERCILLA", "MELIPEUCO", "PITRUFQUEN", "TOLTEN", "VILLARRICA", "LICAN RAY", "CAPITAN PASTENE", "CHOLCHOL", "QUEPE", "METRENCO", "LABRANZA"],
            "Valdivia": ["LOS LAGOS VALDIVIA", "LANCO", "MAFIL", "MARIQUINA", "PAILLACO", "PANGUIPULLI", "CORRAL", "FUTRONO", "SAN JOSE DE LA MARIQUINA", "ANTILHUE", "CAYUMAPU", "CHOSHUENCO", "MALALHUE", "MELEFQUEN", "NELTUME", "NIEBLA", "PICHIRROPULLI", "PICHOY", "PLAYA ROSADA", "RIÑIHUE", "LOS MOLINOS"],
            "Osorno": ["LAGO RANCO", "PUERTO OCTAY", "PUAUCHO", "PUYEHUE", "RIO BUENO", "SAN JUAN DE LA COSTA", "SAN PABLO", "LA UNION", "ENTRE LAGOS", "PURRANQUE", "RIO NEGRO", "TRUMAO", "HUELLELHUE"],
            "Puerto Montt": ["Chipra", "ALERCE", "CALBUCO", "COCHAMO", "FRUTILLAR", "FRESIA", "FUTALEUFU", "HUALAIHUE", "LLANQUIHUE", "CHAITEN", "PUERTO VARAS", "LOS MUERMOS", "MAULLIN", "PALENA", "Encenada", "Chinquihue", "Carelmapu", "Llara", "Piedra Azul", "Pelluco", "PARGUA", "HORNOPIREN", "MELINKA"],
            "Coyhaique": ["BALMACEDA", "CHILE CHICO", "COCHRANE", "GUAITECAS", "LAGO VERDE", "RIO IBAÑEZ", "PUERTO CISNES", "OHIGGINS COYHAIQUE", "TORTEL", "PUERTO CHACABUCO", "CISNES", "LA JUNTA", "PUERTO AGUIRRE", "PUYUHUAPI", "VILLA MANIHUALES"],
            "Punta Arenas": ["LAGUNA BLANCA", "NAVARINO", "PUERTO WILLIAMS", "RIO VERDE", "TIMAUKEL", "PUERTO NATALES", "PRIMAVERA", "SAN GREGORIO", "TORRES DEL PAINE", "PORVENIR", "CABO DE HORNOS", "ANTARTICA"]
        };

        const regionInfo = document.getElementById("regionInfo");
        regionInfo.innerHTML = `
            <i class="bi bi-geo-alt-fill"></i>
            <span class="matriz">Matriz Zonal:</span>
            <h2 class="matriz-nombre">${selectedRegion === 'Santiago' ? 'Av. Marathón N° 1315 Ñuñoa' : selectedRegion}</h2>`;


        const ramalInfo = document.getElementById("ramalinfo");
        ramalInfo.innerHTML = "<li></li>";

        if (ramales[selectedRegion]) {
            ramales[selectedRegion].forEach(ramal => {
                const li = document.createElement("li");
                li.textContent = ramal;
                ramalInfo.appendChild(li);
            });
        }

        const lat = regionCoordinates[selectedRegion].lat;
        const lng = regionCoordinates[selectedRegion].lng;

        // Actualiza el mapa con las nuevas coordenadas y muestra la información en una ventana de información
        map.setCenter({ lat, lng });
        map.setZoom(16);
        addMarker(regionCoordinates[selectedRegion], selectedRegion);
        infoWindow.setContent(selectedRegion === 'Santiago' ? '<strong class="titulo-popupmapa">Transportes Cargoex Transcourrier Ltda.</strong> <br> <span class="region-mapa">Santiago</span> <br>  <i class="bi bi-geo-alt-fill"></i> <span class="ubicacion-mapa">Av. Marathón N° 1315 Ñuñoa </span>' : selectedRegion);
        infoWindow.setPosition({ lat, lng });
        infoWindow.open(map);
    }

    const regionSelector = document.getElementById("regionSelector");
    regionSelector.addEventListener("change", updateMapAndInfo);

    updateMapAndInfo();
}



// function initMap1() {
//     const mapDiv = document.getElementById("mapa-uno");
//     const defaultPosition = { lat: -33.46421886408509, lng: -70.61547214236565 };

//     const map = new google.maps.Map(mapDiv, {
//         zoom: 16,
//         center: defaultPosition,
//     });

//     let mapMarker = null;
//     const infoWindow = new google.maps.InfoWindow();

//     function addMarker(position, title) {
//         if (mapMarker) {
//             mapMarker.setMap(null);
//         }
//         mapMarker = new google.maps.Marker({
//             position,
//             map,
//             title,
//         });
//     }

//     function updateMapAndInfo() {
//         const regionSelector = document.getElementById("regionSelector");
//         const selectedRegion = regionSelector.value;
        //     const regionCoordinates = {
        //     // Coordenadas de las regiones
        //     "Arica": { lat: -18.4783, lng: -70.3126 },
        //     "Iquique": { lat: -20.2208, lng: -70.1431 },
        //     "Antofagasta": { lat: -23.6509, lng: -70.3975 },
        //     "Calama": { lat: -22.4544, lng: -68.929 },
        //     "La Serena": { lat: -29.9045, lng: -71.2489 },
        //     "Valparaíso": { lat: -33.0472, lng: -71.6127 },
        //     "Quillota": { lat: -32.8836, lng: -71.248 },
        //     "Viña del Mar": { lat: -33.0153, lng: -71.5506 },
        //     "Rancagua": { lat: -34.1703, lng: -70.7408 },
        //     "Santiago": { lat: -33.46421886408509, lng: -70.61547214236565 },
        //     "Talca": { lat: -35.4264, lng: -71.6554 },
        //     "Chillán": { lat: -36.6066, lng: -72.1034 },
        //     "Los Ángeles": { lat: -37.4713, lng: -72.3486 },
        //     "Curicó": { lat: -34.9829, lng: -71.2394 },
        //     "Concepción": { lat: -36.8201, lng: -73.044 },
        //     "Temuco": { lat: -38.7397, lng: -72.5984 },
        //     "Valdivia": { lat: -39.8196, lng: -73.2452 },
        //     "Osorno": { lat: -40.5742, lng: -73.133 },
        //     "Puerto Montt": { lat: -41.4711, lng: -72.9369 },
        //     "Coyhaique": { lat: -45.5712, lng: -72.0683 },
        //     "Punta Arenas": { lat: -53.1548, lng: -70.9167 }
        // };

        // const ramales = {
        //     "Arica": ["AZAPA", "CAMARONES", "GRAL LAGOS", "POCONCHILE", "PUTRE", "VALLE LLUTA", "CHIRONTA", "GENERAL LAGOS"],
        //     "Iquique": ["ALTO HOSPICIO", "COLCHANE", "CAMIÑA", "LA HUAICA", "LA TIRANA", "MATILLA", "PICA", "POZO AL MONTE", "HUARA"],
        //     "Antofagasta": ["BAQUEDANO", "MEJILLONES", "MARIA ELENA", "TALTAL", "LA NEGRA", "VERGARA", "TOCOPILLA", "CERRO MORENO"],
        //     "Calama": ["OLLAGUE", "SAN PEDRO DE ATACAMA", "SIERRA GORDA", "CHUQUICAMATA"],
        //     "La Serena": ["ANDACOLLO", "COQUIMBO", "LA HIGUERA", "PAIHUANO", "TONGOY", "CHAÑARAL ALTO", "El Arenal", "EL PALQUI", "LA HERRADURA", "VICUÑA", "Pelicano", "GUANAQUEROS", "LA COMPAÑÍA", "LAS TACAS", "MINCHA", "PAN DE AZUCAR", "PUERTO VELERO", "TOTORALILLO", "VALLE DEL ELQUI"],
        //     "Valparaíso": ["LAGUNA VERDE", "CURAUMA", "PLACILLA QUINTA REGION"],
        //     "Quillota": ["OLMUE", "VILLA ALEMANA", "LIMACHE", "SAN FRANCISCO DE LIMACHE", "SAN PEDRO QUINTA REGION"],
        //     "Viña del Mar": ["EL BELLOTO", "QUILPUE", "REÑACA", "CONCON", "SAN SEBASTIAN"],
        //     "Rancagua": ["LITUECHE", "LA ESTRELLA", "CHIMBARONGO", "CHEPICA", "CALETONES", "DOÑIHUE", "LOLOL", "MARCHIGUE", "OLIVAR ALTO", "PAREDONES", "PALMILLA", "PLACILLA RANCAGUA", "QUINTA TILCOCO", "REQUINOA", "SAN VICENTE DE T.T.", "CODEGUA", "RENGO", "SANTA CRUZ", "NAVIDAD", "COLTAUCO", "LAS CABRAS", "NANCAGUA", "PICHIDEGUA", "PICHILEMU", "SAN FERNANDO", "PERALILLO", "ALHUE", "COINCO", "GRANEROS", "MACHALI", "PEUMO", "SAN FCO. DE MOSTAZAL", "MALLOA", "PUMANQUE", "LO MIRANDA", "OLIVAR", "PELEQUEN", "ROSARIO"],
        //     "Santiago": ["CONCHALI", "CERRILLOS", "CERRO NAVIA", "EL BOSQUE", "ESTACION CENTRAL", "HUECHURABA", "INDEPENDENCIA", "LO BARNECHEA", "LAS CONDES", "LA CISTERNA", "LO ESPEJO", "LA FLORIDA", "LA GRANJA", "LO PRADO", "LA PINTANA", "LA REINA", "MAIPU", "MACUL", "ÑUÑOA", "PROVIDENCIA", "PUENTE ALTO", "PEDRO AGUIRRE CERDA", "PEÑALOLEN", "PUDAHUEL", "QUILICURA", "QUINTA NORMAL", "RENCA", "RECOLETA", "SAN BERNARDO", "SAN JOAQUIN", "SAN MIGUEL", "SAN RAMON", "VITACURA", "LAMPA", "PIRQUE", "MALLOCO", "ALGARROBO", "COLINA", "EL TABO", "CASABLANCA", "CURACAVI", "EL QUISCO", "MARIA PINTO", "PADRE HURTADO", "SAN JOSE DE MAIPO", "TALAGANTE", "PAINE", "EL PAICO", "ISLA DE MAIPO", "PEÑAFLOR", "TILTIL", "BUIN", "CALERA DE TANGO", "BATUCO", "EL MONTE", "SAN PEDRO DE MELIPILLA", "LINDEROS", "ALTO JAHUEL", "BARRANCAS", "CHAMPA", "CHICUREO", "CODIGUA", "EL MELOCOTON", "HOSPITAL", "LA DEHESA", "LONGOVILO", "LONQUEN", "NOS", "NOVICIADO", "QUINTAY"],
        //     "Talca": ["COLBUN", "CAUQUENES", "CUREPTO", "PELARCO", "RIO CLARO", "SAN CLEMENTE", "SAN RAFAEL", "CHANCO", "EMPEDRADO", "PELLUHUE", "VILLA ALEGRE", "CONSTITUCION", "PENCAHUE", "SAN JAVIER", "MAULE", "CURANIPE", "ITAHUE", "MIRAFLORES"],
        //     "Chillán": ["Cholguan", "BULNES", "COBQUECURA", "CHILLAN VIEJO", "NINHUE", "PEMUCO", "PORTEZUELO", "QUILLON", "SAN CARLOS", "SAN GREGORIO DE ÑIQUEN", "SAN IGNACIO", "YUNGAY", "COIHUECO", "PINTO", "SAN FABIAN", "SAN NICOLAS", "EL CARMEN", "QUIRIHUE", "RANQUIL", "Nahueltoro", "Puerto Seco", "NUEVA ALDEA", "ÑIQUEN"],
        //     "Los Ángeles": ["COLLIPULLI", "LAJA", "MULCHEN", "NACIMIENTO", "QUILACO", "QUILLECO", "TUCAPEL", "YUMBEL", "PUREN", "LOS SAUCES", "SANTA BARBARA", "SAN ROSENDO", "ANGOL", "ANTUCO", "CABRERO", "NEGRETE", "RENAICO", "HUEPIL", "Monte Aguila", "ALTO BIO BIO", "MININCO"],
        //     "Curicó": ["HUALAÑE", "LICANTEN", "LONTUE", "ROMERAL", "TENO", "RAUCO", "MOLINA", "SAGRADA FAMILIA", "VICHUQUEN"],
        //     "Concepción": ["TIRUA", "HUALPEN", "CORONEL", "CHIGUAYANTE", "DICHATO", "LOS ALAMOS", "SANTA JUANA", "TOME", "CURANILAHUE", "LEBU", "COELEMU", "TALCAHUANO", "ARAUCO", "CAÑETE", "HUALQUI", "LIRQUEN", "PENCO", "TREHUACO", "FLORIDA", "LOTA", "SAN PEDRO DE LA PAZ", "CONTULMO", "QUIRIQUINA"],
        //     "Temuco": ["VICTORIA", "LONCOCHE", "CURACAUTIN", "CARAHUE", "CURARREHUE", "FREIRE", "GALVARINO", "GORBEA", "LONQUIMAY", "LAUTARO", "LUMACO", "CUNCO", "NUEVA IMPERIAL", "PADRE LAS CASAS", "PERQUENCO", "TEODORO SCHMIDT", "VILCUN", "TRAIGUEN", "PUERTO SAAVEDRA", "PUCON", "TEMUCO", "ERCILLA", "MELIPEUCO", "PITRUFQUEN", "TOLTEN", "VILLARRICA", "LICAN RAY", "CAPITAN PASTENE", "CHOLCHOL", "QUEPE", "METRENCO", "LABRANZA"],
        //     "Valdivia": ["LOS LAGOS VALDIVIA", "LANCO", "MAFIL", "MARIQUINA", "PAILLACO", "PANGUIPULLI", "CORRAL", "FUTRONO", "SAN JOSE DE LA MARIQUINA", "ANTILHUE", "CAYUMAPU", "CHOSHUENCO", "MALALHUE", "MELEFQUEN", "NELTUME", "NIEBLA", "PICHIRROPULLI", "PICHOY", "PLAYA ROSADA", "RIÑIHUE", "LOS MOLINOS"],
        //     "Osorno": ["LAGO RANCO", "PUERTO OCTAY", "PUAUCHO", "PUYEHUE", "RIO BUENO", "SAN JUAN DE LA COSTA", "SAN PABLO", "LA UNION", "ENTRE LAGOS", "PURRANQUE", "RIO NEGRO", "TRUMAO", "HUELLELHUE"],
        //     "Puerto Montt": ["Chipra", "ALERCE", "CALBUCO", "COCHAMO", "FRUTILLAR", "FRESIA", "FUTALEUFU", "HUALAIHUE", "LLANQUIHUE", "CHAITEN", "PUERTO VARAS", "LOS MUERMOS", "MAULLIN", "PALENA", "Encenada", "Chinquihue", "Carelmapu", "Llara", "Piedra Azul", "Pelluco", "PARGUA", "HORNOPIREN", "MELINKA"],
        //     "Coyhaique": ["BALMACEDA", "CHILE CHICO", "COCHRANE", "GUAITECAS", "LAGO VERDE", "RIO IBAÑEZ", "PUERTO CISNES", "OHIGGINS COYHAIQUE", "TORTEL", "PUERTO CHACABUCO", "CISNES", "LA JUNTA", "PUERTO AGUIRRE", "PUYUHUAPI", "VILLA MANIHUALES"],
        //     "Punta Arenas": ["LAGUNA BLANCA", "NAVARINO", "PUERTO WILLIAMS", "RIO VERDE", "TIMAUKEL", "PUERTO NATALES", "PRIMAVERA", "SAN GREGORIO", "TORRES DEL PAINE", "PORVENIR", "CABO DE HORNOS", "ANTARTICA"]
        // };

//         const regionInfo = document.getElementById("regionInfo");
//         regionInfo.innerHTML = `
//             <i class="bi bi-geo-alt-fill"></i>
//             <span class="matriz">Matriz Zonal:</span>
//             <h2 class="matriz-nombre">${selectedRegion}</h2>`;

//         const ramalInfo = document.getElementById("ramalinfo");
//         ramalInfo.innerHTML = "<li></li>";

//         if (ramales[selectedRegion]) {
//             ramales[selectedRegion].forEach(ramal => {
//                 const li = document.createElement("li");
//                 li.textContent = ramal;
//                 ramalInfo.appendChild(li);
//             });
//         }

//         const lat = regionCoordinates[selectedRegion].lat;
//         const lng = regionCoordinates[selectedRegion].lng;

//         // Actualiza el mapa con las nuevas coordenadas y muestra la información en una ventana de información
//         map.setCenter({ lat, lng });
//         map.setZoom(16);
//         addMarker(regionCoordinates[selectedRegion], selectedRegion);
//         infoWindow.setContent(selectedRegion);
//         infoWindow.setPosition({ lat, lng });
//         infoWindow.open(map);
//     }

//     const regionSelector = document.getElementById("regionSelector");
//     regionSelector.addEventListener("change", updateMapAndInfo);

//     updateMapAndInfo();
// }

// function initMap1() {
// const mapDiv = document.getElementById("mapa-uno");
// const defaultPosition = { lat:-33.46421886408509, lng: -70.61547214236565 };

// const map = new google.maps.Map(mapDiv, {
//     zoom: 16,
//     center: defaultPosition,
// });

// let mapMarker = null;

// function addMarker(position, title) {
//     if (mapMarker) {
//         mapMarker.setMap(null);
//     }
//     mapMarker = new google.maps.Marker({
//         position,
//         map,
//         title,
//     });
// }

// function updateMapAndInfo() {
//     const regionSelector = document.getElementById("regionSelector");
//     const selectedRegion = regionSelector.value;
    // const regionCoordinates = {
    //     // Coordenadas de las regiones
    //     "Arica": { lat: -18.4783, lng: -70.3126 },
    //     "Iquique": { lat: -20.2208, lng: -70.1431 },
    //     "Antofagasta": { lat: -23.6509, lng: -70.3975 },
    //     "Calama": { lat: -22.4544, lng: -68.929 },
    //     "La Serena": { lat: -29.9045, lng: -71.2489 },
    //     "Valparaíso": { lat: -33.0472, lng: -71.6127 },
    //     "Quillota": { lat: -32.8836, lng: -71.248 },
    //     "Viña del Mar": { lat: -33.0153, lng: -71.5506 },
    //     "Rancagua": { lat: -34.1703, lng: -70.7408 },
    //     "Santiago": { lat: -33.46421886408509, lng: -70.61547214236565 },
    //     "Talca": { lat: -35.4264, lng: -71.6554 },
    //     "Chillán": { lat: -36.6066, lng: -72.1034 },
    //     "Los Ángeles": { lat: -37.4713, lng: -72.3486 },
    //     "Curicó": { lat: -34.9829, lng: -71.2394 },
    //     "Concepción": { lat: -36.8201, lng: -73.044 },
    //     "Temuco": { lat: -38.7397, lng: -72.5984 },
    //     "Valdivia": { lat: -39.8196, lng: -73.2452 },
    //     "Osorno": { lat: -40.5742, lng: -73.133 },
    //     "Puerto Montt": { lat: -41.4711, lng: -72.9369 },
    //     "Coyhaique": { lat: -45.5712, lng: -72.0683 },
    //     "Punta Arenas": { lat: -53.1548, lng: -70.9167 }
    // };

//     const regionInfo = document.getElementById("regionInfo");
//     regionInfo.innerHTML = `
//         <i class="bi bi-geo-alt-fill"></i>
//         <span class="matriz">Matriz Zonal:</span>
//         <h2 class="matriz-nombre">${selectedRegion}</h2>`;

    // const ramales = {
    //     "Arica": ["AZAPA", "CAMARONES", "GRAL LAGOS", "POCONCHILE", "PUTRE", "VALLE LLUTA", "CHIRONTA", "GENERAL LAGOS"],
    //     "Iquique": ["ALTO HOSPICIO", "COLCHANE", "CAMIÑA", "LA HUAICA", "LA TIRANA", "MATILLA", "PICA", "POZO AL MONTE", "HUARA"],
    //     "Antofagasta": ["BAQUEDANO", "MEJILLONES", "MARIA ELENA", "TALTAL", "LA NEGRA", "VERGARA", "TOCOPILLA", "CERRO MORENO"],
    //     "Calama": ["OLLAGUE", "SAN PEDRO DE ATACAMA", "SIERRA GORDA", "CHUQUICAMATA"],
    //     "La Serena": ["ANDACOLLO", "COQUIMBO", "LA HIGUERA", "PAIHUANO", "TONGOY", "CHAÑARAL ALTO", "El Arenal", "EL PALQUI", "LA HERRADURA", "VICUÑA", "Pelicano", "GUANAQUEROS", "LA COMPAÑÍA", "LAS TACAS", "MINCHA", "PAN DE AZUCAR", "PUERTO VELERO", "TOTORALILLO", "VALLE DEL ELQUI"],
    //     "Valparaíso": ["LAGUNA VERDE", "CURAUMA", "PLACILLA QUINTA REGION"],
    //     "Quillota": ["OLMUE", "VILLA ALEMANA", "LIMACHE", "SAN FRANCISCO DE LIMACHE", "SAN PEDRO QUINTA REGION"],
    //     "Viña del Mar": ["EL BELLOTO", "QUILPUE", "REÑACA", "CONCON", "SAN SEBASTIAN"],
    //     "Rancagua": ["LITUECHE", "LA ESTRELLA", "CHIMBARONGO", "CHEPICA", "CALETONES", "DOÑIHUE", "LOLOL", "MARCHIGUE", "OLIVAR ALTO", "PAREDONES", "PALMILLA", "PLACILLA RANCAGUA", "QUINTA TILCOCO", "REQUINOA", "SAN VICENTE DE T.T.", "CODEGUA", "RENGO", "SANTA CRUZ", "NAVIDAD", "COLTAUCO", "LAS CABRAS", "NANCAGUA", "PICHIDEGUA", "PICHILEMU", "SAN FERNANDO", "PERALILLO", "ALHUE", "COINCO", "GRANEROS", "MACHALI", "PEUMO", "SAN FCO. DE MOSTAZAL", "MALLOA", "PUMANQUE", "LO MIRANDA", "OLIVAR", "PELEQUEN", "ROSARIO"],
    //     "Santiago": ["CONCHALI", "CERRILLOS", "CERRO NAVIA", "EL BOSQUE", "ESTACION CENTRAL", "HUECHURABA", "INDEPENDENCIA", "LO BARNECHEA", "LAS CONDES", "LA CISTERNA", "LO ESPEJO", "LA FLORIDA", "LA GRANJA", "LO PRADO", "LA PINTANA", "LA REINA", "MAIPU", "MACUL", "ÑUÑOA", "PROVIDENCIA", "PUENTE ALTO", "PEDRO AGUIRRE CERDA", "PEÑALOLEN", "PUDAHUEL", "QUILICURA", "QUINTA NORMAL", "RENCA", "RECOLETA", "SAN BERNARDO", "SAN JOAQUIN", "SAN MIGUEL", "SAN RAMON", "VITACURA", "LAMPA", "PIRQUE", "MALLOCO", "ALGARROBO", "COLINA", "EL TABO", "CASABLANCA", "CURACAVI", "EL QUISCO", "MARIA PINTO", "PADRE HURTADO", "SAN JOSE DE MAIPO", "TALAGANTE", "PAINE", "EL PAICO", "ISLA DE MAIPO", "PEÑAFLOR", "TILTIL", "BUIN", "CALERA DE TANGO", "BATUCO", "EL MONTE", "SAN PEDRO DE MELIPILLA", "LINDEROS", "ALTO JAHUEL", "BARRANCAS", "CHAMPA", "CHICUREO", "CODIGUA", "EL MELOCOTON", "HOSPITAL", "LA DEHESA", "LONGOVILO", "LONQUEN", "NOS", "NOVICIADO", "QUINTAY"],
    //     "Talca": ["COLBUN", "CAUQUENES", "CUREPTO", "PELARCO", "RIO CLARO", "SAN CLEMENTE", "SAN RAFAEL", "CHANCO", "EMPEDRADO", "PELLUHUE", "VILLA ALEGRE", "CONSTITUCION", "PENCAHUE", "SAN JAVIER", "MAULE", "CURANIPE", "ITAHUE", "MIRAFLORES"],
    //     "Chillán": ["Cholguan", "BULNES", "COBQUECURA", "CHILLAN VIEJO", "NINHUE", "PEMUCO", "PORTEZUELO", "QUILLON", "SAN CARLOS", "SAN GREGORIO DE ÑIQUEN", "SAN IGNACIO", "YUNGAY", "COIHUECO", "PINTO", "SAN FABIAN", "SAN NICOLAS", "EL CARMEN", "QUIRIHUE", "RANQUIL", "Nahueltoro", "Puerto Seco", "NUEVA ALDEA", "ÑIQUEN"],
    //     "Los Ángeles": ["COLLIPULLI", "LAJA", "MULCHEN", "NACIMIENTO", "QUILACO", "QUILLECO", "TUCAPEL", "YUMBEL", "PUREN", "LOS SAUCES", "SANTA BARBARA", "SAN ROSENDO", "ANGOL", "ANTUCO", "CABRERO", "NEGRETE", "RENAICO", "HUEPIL", "Monte Aguila", "ALTO BIO BIO", "MININCO"],
    //     "Curicó": ["HUALAÑE", "LICANTEN", "LONTUE", "ROMERAL", "TENO", "RAUCO", "MOLINA", "SAGRADA FAMILIA", "VICHUQUEN"],
    //     "Concepción": ["TIRUA", "HUALPEN", "CORONEL", "CHIGUAYANTE", "DICHATO", "LOS ALAMOS", "SANTA JUANA", "TOME", "CURANILAHUE", "LEBU", "COELEMU", "TALCAHUANO", "ARAUCO", "CAÑETE", "HUALQUI", "LIRQUEN", "PENCO", "TREHUACO", "FLORIDA", "LOTA", "SAN PEDRO DE LA PAZ", "CONTULMO", "QUIRIQUINA"],
    //     "Temuco": ["VICTORIA", "LONCOCHE", "CURACAUTIN", "CARAHUE", "CURARREHUE", "FREIRE", "GALVARINO", "GORBEA", "LONQUIMAY", "LAUTARO", "LUMACO", "CUNCO", "NUEVA IMPERIAL", "PADRE LAS CASAS", "PERQUENCO", "TEODORO SCHMIDT", "VILCUN", "TRAIGUEN", "PUERTO SAAVEDRA", "PUCON", "TEMUCO", "ERCILLA", "MELIPEUCO", "PITRUFQUEN", "TOLTEN", "VILLARRICA", "LICAN RAY", "CAPITAN PASTENE", "CHOLCHOL", "QUEPE", "METRENCO", "LABRANZA"],
    //     "Valdivia": ["LOS LAGOS VALDIVIA", "LANCO", "MAFIL", "MARIQUINA", "PAILLACO", "PANGUIPULLI", "CORRAL", "FUTRONO", "SAN JOSE DE LA MARIQUINA", "ANTILHUE", "CAYUMAPU", "CHOSHUENCO", "MALALHUE", "MELEFQUEN", "NELTUME", "NIEBLA", "PICHIRROPULLI", "PICHOY", "PLAYA ROSADA", "RIÑIHUE", "LOS MOLINOS"],
    //     "Osorno": ["LAGO RANCO", "PUERTO OCTAY", "PUAUCHO", "PUYEHUE", "RIO BUENO", "SAN JUAN DE LA COSTA", "SAN PABLO", "LA UNION", "ENTRE LAGOS", "PURRANQUE", "RIO NEGRO", "TRUMAO", "HUELLELHUE"],
    //     "Puerto Montt": ["Chipra", "ALERCE", "CALBUCO", "COCHAMO", "FRUTILLAR", "FRESIA", "FUTALEUFU", "HUALAIHUE", "LLANQUIHUE", "CHAITEN", "PUERTO VARAS", "LOS MUERMOS", "MAULLIN", "PALENA", "Encenada", "Chinquihue", "Carelmapu", "Llara", "Piedra Azul", "Pelluco", "PARGUA", "HORNOPIREN", "MELINKA"],
    //     "Coyhaique": ["BALMACEDA", "CHILE CHICO", "COCHRANE", "GUAITECAS", "LAGO VERDE", "RIO IBAÑEZ", "PUERTO CISNES", "OHIGGINS COYHAIQUE", "TORTEL", "PUERTO CHACABUCO", "CISNES", "LA JUNTA", "PUERTO AGUIRRE", "PUYUHUAPI", "VILLA MANIHUALES"],
    //     "Punta Arenas": ["LAGUNA BLANCA", "NAVARINO", "PUERTO WILLIAMS", "RIO VERDE", "TIMAUKEL", "PUERTO NATALES", "PRIMAVERA", "SAN GREGORIO", "TORRES DEL PAINE", "PORVENIR", "CABO DE HORNOS", "ANTARTICA"]
    // };

//     const ramalInfo = document.getElementById("ramalinfo");
//     ramalInfo.innerHTML = "<li></li>";

//     if (ramales[selectedRegion]) {
//         ramales[selectedRegion].forEach(ramal => {
//             const li = document.createElement("li");
//             li.textContent = ramal;
//             ramalInfo.appendChild(li);
//         });
//     }
  
//     map.setCenter(regionCoordinates[selectedRegion]);
//     map.setZoom(16);

//     addMarker(regionCoordinates[selectedRegion], selectedRegion);
// }

// const regionSelector = document.getElementById("regionSelector");
// regionSelector.addEventListener("change", updateMapAndInfo);

// updateMapAndInfo();


// }

jQuery(document).ready(function($) {
    // Función para dividir la lista de elementos en grupos de 10 y mostrarlos horizontalmente
    function dividirLista() {
        // Obtener la lista de ramales
        const ramalList = document.getElementById('ramalinfo');

        // Verificar si la lista contiene más de 10 elementos
        if (ramalList && ramalList.children.length > 10) {
            // Crear una lista para cada grupo de 10 elementos
            for (let i = 0; i < Math.ceil(ramalList.children.length / 10); i++) {
                const newList = document.createElement('ul');
                newList.classList.add('ramal-group'); // Agrega una clase para el estilo CSS
                ramalList.parentElement.appendChild(newList);

                // Mover los elementos al nuevo grupo
                for (let j = 0; j < 10; j++) {
                    const index = i * 10 + j;
                    if (index >= ramalList.children.length) break;
                    newList.appendChild(ramalList.children[index].cloneNode(true));
                }
            }

            // Ocultar la lista original
            ramalList.style.display = 'none';
        }
    }

    // Llama a la función para dividir la lista al cargar la página
    dividirLista();
});



function loadGoogleMapsScript() {
const script = document.createElement('script');
script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBITfQPAHSXfc_Lw09kwU1TlwJVbJJwMtY&callback=initMaps&libraries=places';
script.async = true;
script.defer = true;

document.head.appendChild(script);
}

function initMaps() {
if (document.body.classList.contains('home')) {
    // Llama a la función initMap solo si estamos en la página de inicio
    initMap();
} else if (document.body.classList.contains('page-template-cobertura')) {
    // Llama a la función initMap1 solo si estamos en la página de cobertura
    initMap1();
}
}

// Llama a la función para cargar el script de Google Maps

loadGoogleMapsScript();




// jQuery(document).ready(function($) {
//   // Función para activar modal
//   function openModal() {
//     // Si el ancho de la ventana es menor que 768px (punto de quiebre de Bootstrap)
//     if ($(window).width() < 768) {
//       // Abrimos el modal mobile
//         $('#modalContactFormMobile').modal('show');
//     } else {
//       // Si es mayor o igual, mostramos el modal escritorio
//       $('#modalContactForm').modal('show');
//     }
//   }
    
//     // Verificar si la URL contiene un parámetro de confirmación
//     const urlParams = new URLSearchParams(window.location.search);
//     if (urlParams.has('confirmacion')) {
//     // Si hay un parámetro de confirmación en la URL, abre el modal
//     openModal();
//     }
//   // Llamar a la función cada vez que se redimensione la ventana
//   $(window).resize(openModal);
// });



// jQuery(document).ready(function($) {
//     // Función para abrir el modal
//     function openModal() {
//         // Muestra el modal (asegúrate de tener un modal definido en tu HTML)
//         $('#modalContactForm').modal('show');
//     }

//     // Verificar si la URL contiene un parámetro de confirmación
//     const urlParams = new URLSearchParams(window.location.search);
//     if (urlParams.has('confirmacion')) {
//         // Si hay un parámetro de confirmación en la URL, abre el modal
//         openModal();
//     }
    
// });

// jQuery(document).ready(function($) {
//     // Función para abrir el modal
//     function openModalContact() {
//         // Muestra el modal (asegúrate de tener un modal definido en tu HTML)
//         $('#modalContactFormTelefonico').modal('show');
//     }

//     // Verificar si la URL contiene un parámetro de confirmación
//     const urlParams = new URLSearchParams(window.location.search);
//     if (urlParams.has('confirmacioncontact')) {
//         // Si hay un parámetro de confirmación en la URL, abre el modal
//         openModalContact();
//     }
// });

jQuery(document).ready(function($) {
    // Función para abrir el modal correspondiente en base al tipo de dispositivo
    function openModal() {
        if (window.innerWidth < 768) {
            // Si el ancho de la ventana es menor que 768px (es decir, es un dispositivo móvil),
            // muestra el modal para móviles
            $('#modalContactFormMobile').modal('show');
        } else {
            // De lo contrario, muestra el modal normal
            $('#modalContactForm').modal('show');
        }
    }

    // Verificar si la URL contiene un parámetro de confirmación
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('confirmacion')) {
        // Si hay un parámetro de confirmación en la URL, abre el modal correspondiente
        openModal();
    }
});

jQuery(document).ready(function($) {
    // Función para abrir el modal correspondiente en base al tipo de dispositivo
    function openModalContact() {
        if (window.innerWidth < 768) {
            // Si el ancho de la ventana es menor que 768px (es decir, es un dispositivo móvil),
            // muestra el modal para móviles
            $('#modalContactFormTelefonicoMobile').modal('show');
        } else {
            // De lo contrario, muestra el modal normal
            $('#modalContactFormTelefonico').modal('show');
        }
    }

    // Verificar si la URL contiene un parámetro de confirmación
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('confirmacioncontact')) {
        // Si hay un parámetro de confirmación en la URL, abre el modal correspondiente
        openModalContact();
    }
});



// jQuery(document).ready(function($) {
//   // Función para cambiar las clases de las columnas
//   function openModalContact() {
//     // Si el ancho de la ventana es menor que 768px (punto de quiebre de Bootstrap)
//     if ($(window).width() < 768) {
//       // Aplicar col-12 a todas las columnas con el id "col-mobile"
//         $('#modalContactFormTelefonicoMobile').modal('show');
//     } else {
//       // Si es mayor o igual, restaurar las clases originales
//       $('#modalContactFormTelefonico').modal('show');
//     }
//   }
    
//     // Verificar si la URL contiene un parámetro de confirmación
//     const urlParams = new URLSearchParams(window.location.search);
//     if (urlParams.has('confirmacioncontact')) {
//     // Si hay un parámetro de confirmación en la URL, abre el modal
//     openModalContact();
//     }
//   // Llamar a la función cada vez que se redimensione la ventana
//   $(window).resize(openModalContact);
// });





jQuery(document).ready(function($) {
    // Función para abrir el modal
    function openModalSeguimiento() {
        // Muestra el modal (asegúrate de tener un modal definido en tu HTML)
        $('#modalSeguimiento').modal('show');
    }

    // Verificar si la URL contiene un parámetro de confirmación
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('confirmacion_seguimiento')) {
        // Si hay un parámetro de confirmación en la URL, abre el modal
        openModalSeguimiento();
    }
});


jQuery(document).ready(function($) {
  // Función para cambiar las clases de las columnas
  function cambiarColumnas() {
    // Si el ancho de la ventana es menor que 768px (punto de quiebre de Bootstrap)
    if ($(window).width() < 768) {
      // Aplicar col-12 a todas las columnas con el id "col-mobile"
      $('[id^="col-mobile"]').removeClass('col-6').addClass('col-12');
      $('[id^="col-mobile-contacto"]').removeClass('col-8').addClass('col-12');
    } else {
      // Si es mayor o igual, restaurar las clases originales
      $('[id^="col-mobile"]').removeClass('col-12').addClass('col-6');
      $('[id^="col-mobile-contacto"]').removeClass('col-12').addClass('col-8');
    }
  }

  // Llamar a la función al cargar la página
  cambiarColumnas();

  // Llamar a la función cada vez que se redimensione la ventana
  $(window).resize(cambiarColumnas);
});

jQuery(document).ready(function($) {
    if ($(window).width() <= 767) { // Solo ejecuta el código en dispositivos con ancho menor o igual a 767px (considerado como móvil)
        $('.faq_question#logistica').before($('.mensaje-te-llamamos'));
    }
});


jQuery(document).ready(function($) {
  
var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

if (isSafari) {

let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0";
    document.getElementById("header").style.transition = ".3s";
    document.getElementById("logo").style.transform = "translateX(0px)";
  } else {
    document.getElementById("header").style.top = "-80px"; // Cambia 80px al tamaño de tu menú
    document.getElementById("logo").style.transform = "translateX(0px)"; //130px
  }
  prevScrollpos = currentScrollPos;
}

}

});

jQuery(document).ready(function($) {
    // Redirecciones 301
    if (window.location.href.indexOf('https://cargoex.cl/servicios.html') > -1) {
        window.location.href = 'https://cargoex.cl/servicios/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/contacto.html') > -1) {
        window.location.href = 'https://cargoex.cl/contacto/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/index.html') > -1) {
        window.location.href = 'https://cargoex.cl/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/cobertura.html') > -1) {
        window.location.href = 'https://cargoex.cl/cobertura/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/carga_inter.html') > -1) {
        window.location.href = 'https://cargoex.cl/servicios/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/empresa.html') > -1) {
        window.location.href = 'https://cargoex.cl/quienes-somos/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/quienes_somos.html') > -1) {
        window.location.href = 'https://cargoex.cl/quienes-somos/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/logistica_distribucion.html') > -1) {
        window.location.href = 'https://cargoex.cl/servicios/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/tarifa.php') > -1) {
        window.location.href = 'https://cargoex.cl/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/arriendo_flotas.html') > -1) {
        window.location.href = 'https://cargoex.cl/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/tarifainter.html') > -1) {
        window.location.href = 'https://cargoex.cl/';
    }
    if (window.location.href.indexOf('https://cargoex.cl/infraestructura.html') > -1) {
        window.location.href = 'https://cargoex.cl/';
    }
    
    
    
    
    
    
});

