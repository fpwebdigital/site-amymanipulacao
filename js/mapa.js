function initialize() {
 
  // Exibir mapa;
  var myLatlng = new google.maps.LatLng(-23.5803252, -46.6517307,17);
  var myLatlng2 = new google.maps.LatLng(-23.5807899, -46.6501385,18);
  var mapOptions = {
    zoom: 17,
    center: myLatlng,
    panControl: false,
    // mapTypeId: google.maps.MapTypeId.ROADMAP
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  } 
 
  // Parâmetros do texto que será exibido no clique;
  var contentString = '<h2>AMY - Farmácia de Manipulação</h2>' +
  '<p> Rua Tumiaru, 88 – Vila Mariana – São Paulo/SP | CEP: 04008-050 | Telefone/Fax: (11) 3052-0576<br> Horário de funcionamento: segunda a sexta: 9:00 às 19:00.</p>' +
  '<a href="http://www.amymanipulacao.com.br" target="_blank">clique aqui para mais informações</a>';
  var infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 700
  });
  
    // Parâmetros do texto que será exibido no clique;
  var contentString2 = '<h2>Estacionamento Conveniado AMY - Itaú</h2>' +
  '<p>Temos convênio com estacionamento localizado no banco Itaú, situado na Rua Tutoia, esquina com Rua Pirapora. Deixe seu carro seguro e caminhe dois quarteirões por uma região encantadora da Vila Mariana.</p>' +
  '<a href="http://www.amymanipulacao.com.br" target="_blank">clique aqui para mais informações</a>';
  var infowindow2 = new google.maps.InfoWindow({
      content: contentString2,
      maxWidth: 700
  });
 
 
  // Exibir o mapa na div #mapa;
  var map = new google.maps.Map(document.getElementById("mapa"), mapOptions);
 
 
  // Marcador personalizado;
  var image = 'http://www.amymanipulacao.com.br/images/pin_amy.png';
  var marcadorPersonalizado = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
      title: 'AMY - Farmácia de Manipulação',
      animation: google.maps.Animation.DROP
  });
  
    // Marcador personalizado2;
  var image = 'http://www.amymanipulacao.com.br/images/pin_amy_itau.png';
  var marcadorPersonalizado2 = new google.maps.Marker({
      position: myLatlng2,
      map: map,
      icon: image,
      title: 'Estacionamento Conveniado AMY - Itaú',
      animation: google.maps.Animation.DROP
  });
 
 
//   // Exibir texto ao clicar no ícone;
  google.maps.event.addListener(marcadorPersonalizado, 'click', function() {
    infowindow.open(map,marcadorPersonalizado);
  });
  //   // Exibir texto ao clicar no ícone;
  google.maps.event.addListener(marcadorPersonalizado2, 'click', function() {
    infowindow2.open(map,marcadorPersonalizado2);
  });
 
 
  // Estilizando o mapa;
  // Criando um array com os estilos
  var styles = [
  {
						featureType: 'water',
						elementType: 'all',
						stylers: [
							{ hue: '#fff000' },
							{ saturation: 8 },
							{ lightness: 19 },
							{ visibility: 'on' }
						]
					},{
						featureType: 'landscape',
						elementType: 'all',
						stylers: [
							{ hue: '#f397a5' },
							{ saturation: 100 },
							{ lightness: -10 },
							{ visibility: 'on' }
						]
					},{
						featureType: 'poi',
						elementType: 'all',
						stylers: [
							{ hue: '#fff000' },
							{ saturation: 41 },
							{ lightness: -22 },
							{ visibility: 'on' }
						]
					}
  ];
 
  // crio um objeto passando o array de estilos (styles) e definindo um nome para ele;
  var styledMap = new google.maps.StyledMapType(styles, {
    name: "Mapa Style"
  });
 
  // Aplicando as configurações do mapa
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');
 
}
 
// Função para carregamento assíncrono
function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCki-4gzEdlbJGzfbMRPiJ3X7BOyxScKYk&sensor=true&callback=initialize";
  document.body.appendChild(script);
}
 
window.onload = loadScript;