<?php include "header.php"; ?>

<main>
  <div class="swiper mySwiper-bg">
    <div class="swiper-wrapper">
      <?php for ($i = 0; $i < 6; $i++) : ?>
        <div class="swiper-slide">
          <div class="bg-vermelho">
            <img src="assets/images/sombra-vermelha.png" alt="sombra">
            <div class="container-fluid">
              <div class="texto-intro">
                <img src="assets/images/logo-lote.png" alt="selo lote" class="img-fluid">
                <div class="link-intro">
                  <h1 class="fw800 fs33">Últimos Lotes Disponíveis</h1>
                  <h2 class="fw400 fs33">Não perca a chance de viver bem!</h2>
                  <p class="fw600 fs15">OSVALDO CRUZ – SP • 110 LOTES</p>
                  <a href="" class="fw500 fs15">CLIQUE E CONHEÇA</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
    <div class="botao-swiper-vertical">
      <div class="botao-vertical">
        <div class="button-prev"><svg width="65.16" height="65.16" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" stroke="rgba(255,255,255,0.2)" stroke-width="1.2" />
            <path d="M29 19L22 26L29 33" stroke="rgba(255,255,255,0.2)" stroke-width="1.2" />
          </svg>
        </div>
        <div class="button-next"><svg width="65.16" height="65.16" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" transform="rotate(-180 26 26)" stroke="rgba(255,255,255,0.2)" stroke-width="1.2" />
            <path d="M23 33L30 26L23 19" stroke="rgba(255,255,255,0.2)" stroke-width="1.2" />
          </svg>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="container-lg container-fluid">
    <div class="box">
      <h2 class="fw400">PRÓXIMOS <b>LANÇAMENTOS</b></h2>
      <span></span>
    </div>
    <div class="box-swiper">
      <div class="swiper mySwiper mySwiper-lancamento">
        <div class="swiper-wrapper">
          <?php for ($i = 0; $i < 6; $i++) : ?>
            <div class="swiper-slide">
              <div class="lotes-item w-100">
                <a href="">
                  <div><img src="assets/images/veredas3.png" alt="veredas 3" class="img-fluid"></div>
                  <div>
                    <h2 class="fw600 fs14">DE 156 A 369m² • 110 LOTES</h2>
                    <h3 class="fw500 fs12">Loteamento Rubi</h3>
                    <p class="fw500 fs16">Presidente Prudente - SP</p>
                    <p class="fw500 fs14">Bairro Centro</p>
                  </div>
                </a>
              </div>
            </div>
          <?php endfor; ?>
        </div>
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
      <a href="" class="botao-vermelho ms-auto">VER TODOS OS LANÇAMENTOS</a>
    </div>
    <div class="box">
      <h2 class="fw400">ENCONTRE O SEU <b>LOTEAMENTO</b></h2>
      <span></span>
    </div>
    <div class="status-obras-box">
      <div class="status-obras">
        <div class="col-4">
          <a href="" class="fw600">OBRAS CONCLUÍDAS</a>
          <span></span>
        </div>
        <div class="col-4">
          <a href="" class="fw600">OBRAS EM ANDAMENTO</a>
          <span></span>
        </div>
        <div class="col-4">
          <a href="" class="fw600">TODAS AS OBRAS</a>
          <span></span>
        </div>
      </div>
      <span class="pagination-span"></span>
    </div>
    <div class="swiper mySwiper mySwiper-loteamento">
      <div class="swiper-wrapper">
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <div class="lotes-item w-100">
              <a href="">
                <div><img src="assets/images/veredas3.png" alt="veredas 3" class="img-fluid"></div>
                <div>
                  <span></span>
                  <h2 class="fw600 fs14">DE 156 A 369m² • 110 LOTES</h2>
                  <h3 class="fw500 fs12">Loteamento Rubi</h3>
                  <p class="fw500 fs16">Presidente Prudente - SP</p>
                  <p class="fw500 fs14">Bairro Centro</p>
                </div>
              </a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <div class="botao-swiper">
      <div class="setas">
        <div class="button-prev-loteamento"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" stroke="black" stroke-width="1.2" />
            <path d="M29 19L22 26L29 33" stroke="black" stroke-width="1.2" />
          </svg>
        </div>
        <div class="button-next-loteamento"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" transform="rotate(-180 26 26)" stroke="black" stroke-width="1.2" />
            <path d="M23 33L30 26L23 19" stroke="black" stroke-width="1.2" />
          </svg>
        </div>
      </div>
      <a href="" class="botao-vermelho ms-auto">VER TODOS OS EMPREENDIMENTOS</a>
    </div>
  </div>
  <div class="box-ano">
    <div class="container-lg container-fluid">
      <div class="texto-ano">
        <div class="titulo-ano fs30">
          <h1 class="fw400">MUITO MAIS DO QUE <b class="fw700">UMA INCORPORADORA</b></h1>
          <span></span>
        </div>
        <div class="position-absolute top-0 w-100"><img src="assets/images/1997.png" alt=" ano 1997" class="d-block mx-auto m-md-0 ms-md-auto img-fluid"></div>
      </div>
      <div class="texto-sobre fw400 fs18">
        <p>A <span class="fw700">AS Incorporadora</span> lançou seu primeiro loteamento em 1997, em Presidente Prudente - SP e hoje conta com nove loteamentos já lançados, com sucesso de vendas em todos os empreendimentos e quatro loteamentos em fase de preparação para novos lançamentos. Esses empreendimentos surgiram com a necessidade do cliente em adquirir um lote, com a facilidade de pagamento e com o financiamento próprio da empresa.</p>
        <div class="botoes-sobre">
          <a href="" class="botao-vermelho">CONHEÇA A INCORPORADORA</a>
          <div><a href="">ENTRE EM CONTATO</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-lg container-fluid">
    <div class="box">
      <h2 class="fw400">NOVIDADES DO <b>BLOG</b></h2>
      <span></span>
    </div>
    <div class="swiper mySwiper mySwiper-blog">
      <div class="swiper-wrapper">
        <?php for ($i = 0; $i < 6; $i++) : ?>
          <div class="swiper-slide">
            <div class="galeria-item w-100">
              <a href="" class="w-100">
                <div class="sobrepor-link">
                  <img src="assets/images/multidao.png" alt="multidao">
                  <div>
                    <h2>15</h2>
                    <p>Ago | 2021</p>
                  </div>
                </div>
                <div class="texto-blog w-100">
                  <h3>Empresa investe R$ 2,5 milhões e lança movimento para reinventar a vida das pessoas #ReinventaSP</h3>
                  <p>Com criação de novas praças, quadras esportivas e estações de mobilidade pela capital paulista, #ReinventaSP reforça “novo normal” para mostrar que modo de viver e trabalhar...</p>
                  <div>SAIBA MAIS <svg width="54" height="17" viewBox="0 0 54 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M45 1L53 8.5L45 16" stroke="#8A1002" stroke-width="1.25" />
                      <rect y="8" width="53" height="1" fill="#8A1002" />
                    </svg></div>
                </div>
              </a>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <div class="botao-swiper">
      <div class="setas">
        <div class="button-prev-blog"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" stroke="black" stroke-width="1.2" />
            <path d="M29 19L22 26L29 33" stroke="black" stroke-width="1.2" />
          </svg>
        </div>
        <div class="button-next-blog"><svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="26" cy="26" r="25.4" transform="rotate(-180 26 26)" stroke="black" stroke-width="1.2" />
            <path d="M23 33L30 26L23 19" stroke="black" stroke-width="1.2" />
          </svg>
        </div>
      </div>
      <a href="" class="botao-vermelho ms-auto">VER TODAS AS NOTÍCIAS</a>
    </div>
  </div>
</main>
<?php include "email.php"; ?>
<?php include "footer.php"; ?>