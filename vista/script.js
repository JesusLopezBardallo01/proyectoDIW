function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 12, // nivel de zoom
      center: { lat: 40.416775, lng: -3.70379 }, // coordenadas del centro del mapa
      zoomControl: true, // Mostrar el control de zoom predeterminado
    });
  
    // Agregar el cuadro de búsqueda al mapa
    const searchBox = new google.maps.places.SearchBox(document.getElementById('search-box'));
  
    // Escuchar el evento de cambios en el cuadro de búsqueda
    searchBox.addListener('places_changed', () => {
      const places = searchBox.getPlaces();
  
      if (places.length == 0) {
        return;
      }
  
      // Centrar el mapa en el primer resultado de búsqueda
      const bounds = new google.maps.LatLngBounds();
      places.forEach(place => {
        if (!place.geometry || !place.geometry.location) {
          console.log("No se encontró el lugar seleccionado.");
          return;
        }
        bounds.extend(place.geometry.location);
      });
      map.fitBounds(bounds);
    });
  
    // Hacer una solicitud AJAX para obtener los datos de los locales
    fetch('../php/datos.php')
      .then(response => response.json()) // Convertir la respuesta a JSON
      .then(data => {
        // Agregar marcadores al mapa para cada local en los datos
        data.forEach(local => {
          const marker = new google.maps.Marker({
            position: { lat: parseFloat(local.latitud), lng: parseFloat(local.longitud) }, // coordenadas del marcador
            map: map, // mapa donde se agrega el marcador
            icon: local.imagen, // imagen del marcador
          });
        });
      })
      .catch(error => {
        console.error('Error al obtener los datos de los locales:', error);
      });
  }