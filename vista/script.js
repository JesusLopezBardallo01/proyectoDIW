function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 12, // nivel de zoom
      center: { lat: 40.416775, lng: -3.70379 }, // coordenadas del centro del mapa
    });
  
    // Obtener datos de la base de datos y agregar marcadores
    const locales = document.getElementsByClassName("local");
    for (let i = 0; i < locales.length; i++) {
      const local = locales[i];
      const nombre = local.dataset.nombre; // obtener el nombre del local
      const imagen = local.dataset.imagen; // obtener la URL de la imagen del local
      const latitud = parseFloat(local.dataset.latitud); // obtener la latitud del local
      const longitud = parseFloat(local.dataset.longitud); // obtener la longitud del local
  
      const marker = new google.maps.Marker({
        position: { lat: latitud, lng: longitud }, // coordenadas del marcador
        map: map, // mapa donde se agrega el marcador
        icon: imagen, // imagen del marcador
        title: nombre, // título del marcador
      });
    }
  }