let map;

function initMap() {
    const myLatLng = { lat: -23.6071, lng: -46.752 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: myLatLng,
    });
    
    //LOCAIS DE AGRESSÃO
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.619627,-46.771811),
        map: map,
        icon: '/images/blue_Marker.png',
        title: "Consultório Adriana Tavares",
      });
};