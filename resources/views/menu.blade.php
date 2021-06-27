@extends('layouts.homeview')

@section('css-script')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<script src="{{ asset('scripts/showfood.js') }}" defer></script>
@endsection

@section('nav')
                    <div class="Info">  
                      <a href="{{ route('home') }}">Home</a>
                      <a href="{{ route('contact') }}">Contattaci</a>
                      <a href="{{ route('cart') }}">Carrello</a>
                          <div class="Tendina">
                            <button class="Tendina-button">{{ $user->Username }}</button>
                              <div class="Tendina-content">
                                  <a href="{{ route('profile') }}">Profilo</a>
                                  <a href="{{ route('logout') }}">Logout</a>
                              </div>
                          </div>
                    </div>
        <div class="Menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
</nav>
@endsection

@section('content')

<!-- Slideshow container
<div class="slideshow-container">
 Full-width images with number and caption text
  <div class="mySlides fade">
    <img src="img/Arancini.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="img/tacos2.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="img/Sushi.jpg">
  </div>

 The dots/circles
<div class="dots">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>-->
               <!--<div class="Benvenuto">
                    <div class="Scegli">
                      <h2>I migliori ristoranti per ordinare il tuo cibo</h2>
                    
                      <h3>
                        Scegli ciò che più preferisci {{ $user['Username'] }}
                      </h3>
                

                    </div>

                </div>-->
            </header>

            <h1 class="Cerca">Ricerca i piatti che desideri:</h1>
           
              <div class="Filtra">
                <input type="text" id="barra" onkeyup="CercaPiatti()" placeholder="Cerca piatto">

              <div>
                <label>Filtra per tipo di cucina
                  <div>
                    <select name="Tipo" id="tipo" onchange="FilterFood()">
                      <option value="Tutti">Tutti</option>
                      <option value="Italiano">Italiano</option>
                      <option value="Messicano">Messicano</option>
                      <option value="Cinese">Cinese</option>
                      <option value="Giapponese">Giapponese</option>
                      <option value="Tedesco">Tedesco</option>
                      <option value="Americano">Americano</option>
                    </select>
                  </div>
                </label>
              </div>

              </div>

            <article id="general"><a name=visita></a>
            
            <div class="errore hidden">
              Elemento già presente
            </div>

            <div class="successo hidden">
              Elemento aggiunto con successo
            </div>
            
            <section class="dishes-grid general-elem" id="elem">


            </section>

          </article>
@endsection