"use strict";
var map;
var panorama;
var markers = [];
var latLngA;
var latLngB;
var latTest;
var latB;
var lngB;
var distance;
var points

// Create random streetview pos(A)
function random_location() {
  latTest = {
    lat: Math.round(Math.acos(2*Math.random() - 1)*180/Math.PI) - 90,
    lng: Math.floor(Math.random()*360) - 180
  }
  console.log(latTest)
}

function initialize() {

  const sv = new google.maps.StreetViewService();
  panorama = new google.maps.StreetViewPanorama(
    document.getElementById("streetview")
  );
  // Set up the map.
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 30, lng: 0},
    zoom: 3,
    mapTypeId: "roadmap",
    streetViewControl: false,
  });

  // This event listener calls addMarker() when the map is clicked
  google.maps.event.addListener(map, "click", event => {
    addMarker(event.latLng, map);
    latB = event.latLng.lat();
    lngB = event.latLng.lng();
    console.log(latB);
    console.log(lngB);
    document.getElementById('guessButton').disabled = false;
  });
  random_location();
  // Set the initial Street View camera to the center of the map
  sv.getPanorama({ location: new google.maps.LatLng(latTest), source: google.maps.StreetViewSource.OUTDOOR, radius: 10000000 }, processSVData);
  // Look for a nearby Street View panorama when the map is clicked.
  // getPanorama will return the nearest pano when the given
  // radius is 50 meters or less.
}

function processSVData(data, status) {
  if (status === "OK") {
    const location = data.location;
    panorama.setPano(location.pano);
    panorama.setPov({
      heading: 60,
      pitch: 10,
    });
    panorama.setOptions({
      addressControl: false,
    });
    panorama.setMotionTracking(false);
    panorama.setVisible(true);
  } else {
    console.error("Street View data not found for this location.");
    random_location();
  }
}

// Compare random pos(A) with selected pos(B) and calculate distance
function createLine(map) {
  latLngA = new google.maps.LatLng(latTest);
  latLngB = new google.maps.LatLng(latB, lngB);
  distance = google.maps.geometry.spherical.computeDistanceBetween (latLngA, latLngB) / 1000;
  console.log(latLngA)
  console.log(latLngB)
  console.log(distance.toFixed(2));

  const line = new google.maps.Polyline({
    path: [
        latLngA,
        latLngB
    ],
    strokeColor: "#7eb324",
    strokeOpacity: 1.0,
    strokeWeight: 5,
    map: map
  });
}

// Adds a marker to the map and push to the array
function addMarker(location, map) {
  clearMarkers();
  const markerSize = 4
  const marker = new google.maps.Marker({
    position: location,
    draggable: false,
    icon: "images/marker.png",
    map: map
  });
  markers.push(marker);
}

// Sets the map on all markers in the array
function setMapOnAll(map) {
  for (let i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map but keeps them in the array
function clearMarkers() {
  setMapOnAll(null);
  markers = [];
}

// Calculate points
function pointCount() {
  points = (1000/Math.pow(distance, 1.4));
  console.log(points)
}

function showResult() {
  document.getElementById('streetview').style.display = 'none';
  document.getElementById('map').style.height = '100%';
  document.getElementById('guessButton').style.display = 'none';
  document.getElementById("dist").innerHTML=distance.toFixed(2) + " km away from location.";
  $('#progressBar').width(points + "%").attr('aria-valuenow', points);
  $('#resultModal').modal({
  show: true
  })
}
