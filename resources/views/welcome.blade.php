@extends('layouts.app')

@section('content')
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: black;
  }
  h1 {
    color: black;
    -webkit-text-fill-color: white; /* Will override color (regardless of order) */
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: lightgray;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image: url('https://pizzeriaorlandos.com/wp-content/uploads/pizzeria-mausefalle-campo-tures-sand-in-taufers-valli-di-tures-e-aurina-tauferer-ahrntal-south-tyrol.jpg');
    background-size: cover;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  @if (session('error'))
    <div class="alert alert-success text-center" style="width:500px; margin:0 auto 15px;">{{ session('error') }}</div>
  @endif
<div class="jumbotron text-center">
  <h1>Cantine Choupi</h1>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2><strong>Over het bedrijf</strong></h2>
      <h4>We zijn een zeer talentvol, enthousiast en doorzettende Italiaanse keuken en gevestigd in Canada. 
      Ons nummer 1 prioriteit is vakmanschap! Dat kun je zien aan onze met liefde bereide pizza's</h4>
      <p>Onze top koks staan elke dag 10 uur lang voor onze gasten top gerechten te maken. Onze producten 
      zijn vers en van de beste kwaliteit. Verder hebben wij een zeer groot assortiment waar u uit kunt kiezen. 
      Als u naar menu gaat kunt u gerechten toevoegen aan uw winkelmand en worden ze bij u thuis gebracht.</p>
    </div>
    <div class="col-sm-4">
      
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
    
    </div>
    <div class="col-sm-8">
      <h2><strong>Missie:</strong></h2>  Cantine Choupi creëert voor al haar gasten pizza’s van hoogwaardige kwaliteit 
      zoals in de betere pizzeria’s van Italië; zowel voor speciale gelegenheden als voor gewoon een keer 
      ‘thuis uit eten’. Cantine Choupi maakt het verschil als luxe pizzabezorgdienst met een excellente reputatie 
      en met gasten die zich als ambassadeur profileren. ‘Bezorgpizza’s is bij ons synoniem voor ‘restaurant-waardig’.<br>
      <br><h2><strong>Visie:</strong></h2> Er is een markt voor het bezorgen van echt goede pizza’s met hoogwaardige 
      ingrediënten, zoals die in de betere pizzeria’s van Italië gemaakt worden. Wij doen dat met een 
      onderscheidende service en en een onderscheidend assortiment. Wij zijn van mening dat er voor dit 
      soort pizza’s een plek is naast de pizza’s in het huidige fastfood-segment. Door de de bereiding van 
      pizza’s bij de klant aan huis, treedt er geen warmteverlies op en wordt de excellente kwaliteit gewaarborgd. 
      Met de bestelbus en onze professionele insteek richten wij ons op een breed marktsegment en zijn wij ook 
      interessant voor de zakelijke markt van Rijswijk en omstreken.
    </div>
  </div>
</div>

@endsection

