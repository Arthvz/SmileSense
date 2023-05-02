let map;

function initMap() {
    const myLatLng = { lat: -23.608969571341117, lng: -46.75031962083235 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: myLatLng,
    });
    
    //LOCAIS DE AGRESSÃO
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.619627,-46.771811),
        map: map,
        icon: 'red_marker.png',
        title: "Praça do Taboão (Locais de Agressão)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.628081,-46.826238),
        map: map,
        icon: 'red_marker.png',
        title: "EE Amélia dos Anjos Oliveira (Locais de Agressão)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.58573961427639,-46.744582176208496),
        map: map,
        icon: 'red_marker.png',
        title: "A mata (Locais de Agressão)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.592858893816615,-46.731961509579826),
        map: map,
        icon: 'red_marker.png',
        title: "Emef Arthur Whitaker (Locais de Agressão)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.57973109465769,-46.74542447179543),
        map: map,
        icon: 'red_marker.png',
        title: "Ponto 4 (Locais de Agressão)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.662990610128766,-46.79589254234524),
        map: map,
        icon: 'red_marker.png',
        title: "Rua Moura (Locais de Agressão)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.631064050595043,-46.759146266287814),
        map: map,
        icon: 'red_marker.png',
        title: "Ponto 7 (Locais de Agressão)",
      });
    
    //LUGARES ONDE EU VACILO
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.65341412688766,-46.85591461997084),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "EE Prof° Eulália Malta (Lugares onde eu vacilo)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.61909048123952,-46.803998207934555),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "EE Laert de Almeida São Bernardo (Lugares onde eu vacilo)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.591008781032833,-46.74469987619625),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Campão (Lugares onde eu vacilo)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.588295,-46.7355005),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Bar do salsicha (Lugares onde eu vacilo)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.671551314630612,-46.80040890426445),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Escolinha (Lugares onde eu vacilo)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.62981920672397,-46.75968292937303),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Condomínio Floresta (Lugares onde eu vacilo)",
      });
    
    //LUGAR DE SÓLOVE
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.614205444592198, -46.77561439314591),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Shopping Taboão (Lugar de Sólove)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.614205444592198, -46.77561439314591),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Shopping Taboão - CINE (Lugar de Sólove)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.591964197897575, -46.73172467379294),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Jockey (Lugar de Sólove)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.659608, -46.796729),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Atrás da escola (Lugar de Sólove)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.595971, -46.736337),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "O matinho do Arthur (Lugar de Sólove)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.649705437402485, -46.75737827607482),
        map: map,
        icon: 'darkgreen_marker.png',
        title: "Shopping Campo Limpo (Lugar de Sólove)",
      });

    //EU QUERIA QUE AQUI FOSSE...
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.930354, -47.070808),
        map: map,
        icon: 'pink_marker.png',
        title: "Juquitiba (Eu queria que aqui fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-24.23635301661299, -46.90144211630335),
        map: map,
        icon: 'pink_marker.png',
        title: "Itanhaem Gaivota (Eu queria que aqui fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.588279239424406, -46.7355127434972),
        map: map,
        icon: 'pink_marker.png',
        title: "Pracinha (Eu queria que aqui fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.661461, -46.798203),
        map: map,
        icon: 'pink_marker.png',
        title: "Pracinha (Eu queria que aqui fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.591357, -46.737848),
        map: map,
        icon: 'pink_marker.png',
        title: "Estacionamento Aberto (Eu queria que aqui fosse...)",
      });

    //QUERIA QUE AQUI NÃO FOSSE...
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.630100572243702,-46.82668089866638),
        map: map,
        icon: 'green_marker.png',
        title: "Rua Anápolis (Queria que aqui não fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.588994, -46.732447),
        map: map,
        icon: 'green_marker.png',
        title: "Um posto abandonado (Queria que aqui não fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.623268, -46.805339),
        map: map,
        icon: 'green_marker.png',
        title: "Vila Indiana (Queria que aqui não fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.58859830326117, -46.736021878273384),
        map: map,
        icon: 'green_marker.png',
        title: "Av. Min. Laudo Ferreira de Camargo, 122 (Queria que aqui não fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.6611624931452, -46.79660917831197),
        map: map,
        icon: 'green_marker.png',
        title: "Creche (Queria que aqui não fosse...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.58736386150661, -46.736708668529815),
        map: map,
        icon: 'green_marker.png',
        title: "Tico Escapamentos (Queria que aqui não fosse...)",
      });
    
    //LUGARES QUE EU ME SINTO BEM...
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.568181773434304, -46.741710589119634),
        map: map,
        icon: 'yellow_marker.png',
        title: "Meninas em campo (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.604919, -46.731703),
        map: map,
        icon: 'yellow_marker.png',
        title: "Cemitério Gethsêmani Morumbi (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.60640202359598, -46.72842974877493),
        map: map,
        icon: 'yellow_marker.png',
        title: "Pizzaria do Geleia (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.607461006177598, -46.729004177790294),
        map: map,
        icon: 'yellow_marker.png',
        title: "Pizzaria Stadium Delivery (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.625093928316375, -46.802307402391904),
        map: map,
        icon: 'yellow_marker.png',
        title: "Academia perto do Cardoso (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.656322, -46.794970),
        map: map,
        icon: 'yellow_marker.png',
        title: "Cemitério (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.587062268426777, -46.73285059073711),
        map: map,
        icon: 'yellow_marker.png',
        title: "Casa de Cultura (TEATRO) (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.600000301140497, -46.72014384657072),
        map: map,
        icon: 'yellow_marker.png',
        title: "Estádio Cícero Pompeu de Toledo (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.627939496157726, -46.823905199184566),
        map: map,
        icon: 'yellow_marker.png',
        title: "Complexo Esportivo Jd Vista Alegre (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.589201, -46.742495),
        map: map,
        icon: 'yellow_marker.png',
        title: "Nos Prédios (Lugares que eu me sinto bem...)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.62983085258994, -46.759769079703986),
        map: map,
        icon: 'yellow_marker.png',
        title: "Condomínio Floresta (Lugares que eu me sinto bem...)",
      });

    //INSATISFAÇÃO
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.648726, -46.847502),
        map: map,
        icon: 'brown_marker.png',
        title: "Pronto Socorro Central (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.6135983883372,-46.78142028831585),
        map: map,
        icon: 'brown_marker.png',
        title: "Passarela perto do rancho da costela (Insatisfação)",
      });

    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.66208622761026, -46.796474703255456),
        map: map,
        icon: 'brown_marker.png',
        title: "Bairro Todo (Insatisfação)",
      });

    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.589222537831454, -46.74007887355693),
        map: map,
        icon: 'brown_marker.png',
        title: "Makro (MERCADO) (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.590437, -46.745052),
        map: map,
        icon: 'brown_marker.png',
        title: "Muita maconha (Muita fumaça) (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.628959748587015, -46.760218172318226),
        map: map,
        icon: 'brown_marker.png',
        title: "R. Profa. Nina Stocco, 543 (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.628841, -46.760213),
        map: map,
        icon: 'brown_marker.png',
        title: "Córrego por perto (Insatisfação)",
      });

    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.59813323988043, -46.76615757908267),
        map: map,
        icon: 'brown_marker.png',
        title: "Rua Jerônimo Fernandes (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.597923, -46.766742),
        map: map,
        icon: 'brown_marker.png',
        title: "Guaraú (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.597868310415443, -46.76664793803122),
        map: map,
        icon: 'brown_marker.png',
        title: "Casa do vizinho (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.597678, -46.766606),
        map: map,
        icon: 'brown_marker.png',
        title: "Pracinha (Insatisfação)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.597538, -46.765191),
        map: map,
        icon: 'brown_marker.png',
        title: "Quadra verde (Insatisfação)",
      });

    //LUGARES QUE EXISTEM E NÃO SÃO UTILIZADOS
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.626442274882898, -46.82274053922507),
        map: map,
        icon: 'purple_marker.png',
        title: "Pracinha do Posto de Saúde (Lugares que existem e não são utilizados)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.611895, -46.798677),
        map: map,
        icon: 'purple_marker.png',
        title: "Parque Laguna (Lugares que existem e não são utilizados)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.661472, -46.798249),
        map: map,
        icon: 'purple_marker.png',
        title: "Praça (Lugares que existem e não são utilizados)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.589083, -46.730416),
        map: map,
        icon: 'purple_marker.png',
        title: "Campo (Lugares que existem e não são utilizados)",
      });
    
    var beachMarker = new google.maps.Marker({
        position: new google.maps.LatLng(-23.592154, -46.742148),
        map: map,
        icon: 'purple_marker.png',
        title: "Atráz do ponto de ônibus (Lugares que existem e não são utilizados)",
      });

}