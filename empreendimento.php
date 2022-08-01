<?php include "header.php"; ?>

<main>
  <div class="box-titulo">
    <div class="container">
      <h1 class="fw700">VEREDAS 3</h1>
      <p class="fw500">Home | Empreendimentos | Obras Concluídas | Veredas 3</p>
      <span></span>
    </div>
  </div>
  <div class="introducao-lote">
    <img src="assets/images/sombra-vermelha.png" alt="sombreamento" class="sombra">
    <img src="assets/images/logo-lote.png" alt="logo loteamento">
  </div>
  <div class="container">
    <div class="box">
      <h2 class="fw400">DESCRIÇÃO</h2>
      <span></span>
    </div>
    <div class="texto-empreendimento">
      <p class="fw400 fs18">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed lorem eu massa dapibus imperdiet. Morbi semper quis lacus vel tincidunt. Praesent a velit et diam facilisis vehicula et eu ex. Pellentesque vitae imperdiet neque. Cras condimentum malesuada vulputate. Vivamus varius nibh quis nisl condimentum euismod. Etiam pulvinar rhoncus ligula, ut dapibus velit gravida quis. Cras massa urna, iaculis at gravida non, ultricies a tellus. Phasellus sodales aliquam volutpat. Cras pulvinar ligula sit amet magna tempor, in tincidunt felis posuere. Quisque imperdiet magna eu arcu venenatis rutrum. Sed tempor tincidunt nisl.</p>
    </div>
    <div class="progresso-obra">
      <h3 class="fw600 fs14">65% OBRAS CONCLUÍDAS</h3>
      <div class="progresso">
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="obra-vantagens">
      <div class="item-obra">
        <img src="assets/images/arborizacao.png" alt="arvore">
        <p class="fw500 fs14"><span>100%</span> Arborização</p>
      </div>
      <div class="item-obra">
        <img src="assets/images/pavimentacao.svg" alt="asfalto">
        <p class="fw500 fs14"><span>100%</span> Pavimentação</p>
      </div>
      <div class="item-obra">
        <img src="assets/images/energia.svg" alt="raio">
        <p class="fw500 fs14"><span>100%</span> Energia Elétrica</p>
      </div>
      <div class="item-obra">
        <img src="assets/images/guias-sarjetas.svg" alt="tijolos">
        <p class="fw500 fs14"><span>95%</span> Guias e Sarjetas</p>
      </div>
      <div class="item-obra">
        <img src="assets/images/agua.svg" alt="gota d'água">
        <p class="fw500 fs14"><span>0%</span> Rede de Água</p>
      </div>
      <div class="item-obra">
        <img src="assets/images/esgoto.svg" alt="esgoto">
        <p class="fw500 fs14"><span>0%</span> Rede de Esgoto</p>
      </div>
    </div>
    <div class="proximidade">
      <div class="proximidade-item fs20">
        <img src="assets/images/pin-nobg.svg" alt="pin localização">
        <h3 class="fw600">Próximo ao centro</h3>
        <p class="fw400">3km</p>
      </div>
      <div class="proximidade-item fs20">
        <img src="assets/images/mercado.svg" alt="carrinho de supermercado">
        <h3 class="fw600">Próximo a Mercados</h3>
        <p class="fw400">1km</p>
      </div>
      <div class="proximidade-item fs20">
        <img src="assets/images/pin-facul.svg" alt="chapeu formatura">
        <h3 class="fw600">Próximo à Faculdades</h3>
        <p class="fw400">5km</p>
      </div>
    </div>
    <div class="box">
      <h2 class="fw400">GALERIA DE <b>IMAGENS</b></h2>
      <span></span>
    </div>
    <div class="swiper mySwiper-lancamento">
      <div class="swiper-wrapper">
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <div class="galeria-item">
              <a href="">
                <div class="sobrepor-link">
                  <img src="assets/images/galeria-img.png" alt="rua">
                  <div class="lupa">
                    <img src="assets/images/lupa.png" alt="lupa" class="img-fluid">
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <div class="botao-swiper">
      <div class="setas">
        <div class="button-prev-lancamento"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" stroke="black" stroke-width="1.2" />
            <path d="M29 19L22 26L29 33" stroke="black" stroke-width="1.2" />
          </svg>
        </div>
        <div class="button-next-lancamento"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" transform="rotate(-180 26 26)" stroke="black" stroke-width="1.2" />
            <path d="M23 33L30 26L23 19" stroke="black" stroke-width="1.2" />
          </svg>
        </div>
      </div>
      <a href="" class="botao-vermelho ms-sm-auto">VER TODAS AS NOTÍCIAS</a>
    </div>
    <div class="box">
      <h2 class="fw400">FALE COM UM <b>CORRETOR</b></h2>
      <span></span>
    </div>
    <p class="paragrafo-form fs18">Tem interesse em adquirir um lote ou tirar alguma dúvida sobre o projeto? Preencha o formulário e entraremos em contato o mais breve possível.</p>
    <?php include "formulario.php"; ?>
  </div>

</main>
<?php include "email.php"; ?>
<?php include "footer.php"; ?>