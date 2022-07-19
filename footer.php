    <footer>
      <div class="contato">
        <div class="container-fluid container-lg">
          <div class="links-rodape">
            <div class="links">
              <div>
                <div class="atendimento">
                  <h4>Atendimento</h4>
                  <div>
                    <img src="assets/images/local.png" alt="pin localização">
                    <p>Seg à Sex das 8h às 18hrs</p>
                  </div>
                </div>
                <div class="atendimento">
                  <h4>Central de Atendimento</h4>
                  <div>
                    <img src="assets/images/tel.png" alt="telefone">
                    <p>18 3916 2287</p>
                  </div>
                </div>
                <ul class="lista-mobile">
                  <li><a href=""><img src="assets/images/youtube.png" alt="logo youtube" class="img-fluid"></a></li>
                  <li><a href=""><img src="assets/images/facebook.png" alt="logo facebook" class="img-fluid"></a></li>
                  <li><a href=""><img src="assets/images/instagram.png" alt="logo instagram" class="img-fluid"></a></li>
                </ul>
              </div>
              <div class="links-itens">
                <div>
                  <a href="index.php"><span>></span> HOME</a>
                  <a href="blog.php">> BLOG</a>
                  <a href="contato.php">> CONTATO</a>
                  <a href="">> TRABALHE CONOSCO</a>
                </div>
                <div>
                  <a href="listagem.php">> EMPREENDIMENTOS</a>
                  <a href="">> OBRAS CONCLUÍDAS</a>
                  <a href="empreendimento.php">> OBRAS EM ANDAMENTOS</a>
                  <a href="">> OFEREÇA SUA ÁREA</a>
                </div>
                <div class="politica">
                  <a href="">Política de Privacidade</a>
                  <a href="">Preferência de Cookies</a>
                </div>
              </div>
              <div class="botoes">
                <div class="botao-preto">
                  <a href=""><img src="assets/images/grupo.png" alt="grupo"> COLABORADOR</a>
                </div>
                <div class="botao-vermelho">
                  <a href=""><img src="assets/images/usuario.png" alt="usuario"> CLIENTE</a>
                </div>
                <ul>
                  <li><a href=""><img src="assets/images/youtube.png" alt="logo youtube" class="img-fluid"></a></li>
                  <li><a href=""><img src="assets/images/facebook.png" alt="logo facebook" class="img-fluid"></a></li>
                  <li><a href=""><img src="assets/images/instagram.png" alt="logo instagram" class="img-fluid"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="direitos">
            <img src="assets/images/logo-horizontal.png" alt="logo">
            <p>
              Todos os direitos reservados © 2021 | AS Incorporadora - CRECI 021030-J - Criação
              <img src="assets/images/oxigenweb.png" alt="logo oxigenweb">
            </p>
          </div>
        </div>
      </div>
      <div class="rodape">
        <div class="container-fluid container-lg">
          <div class="contato-rodape">
            <a href="">
              <img src="assets/images/carta.png" alt="carta">
              <p><span>Formulário</span> de contato</p>
            </a>
            <a href="">
              <img src="assets/images/tel2.png" alt="telefone">
              <p><span>Vendas</span> 18 3916 2287</p>
            </a>
            <a href="">
              <img src="assets/images/whatsapp.png" alt="whatsapp">
              <p><span>Whatsapp</span> 18 3916 2287</p>
            </a>
          </div>
        </div>
      </div>

    </footer>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper-bg", {
        slidesPerView: 1,
        navigation: {
          nextEl: ".botao-swiper-vertical .button-next",
          prevEl: ".botao-swiper-vertical .button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });

      var swiper2 = new Swiper(".mySwiper-lancamento ", {
        navigation: {
          nextEl: ".botao-swiper .button-next-lancamento",
          prevEl: ".botao-swiper .button-prev-lancamento",
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1367: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1700: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
      });

      var swiper3 = new Swiper(".mySwiper-loteamento", {
        navigation: {
          nextEl: ".botao-swiper .button-next-loteamento",
          prevEl: ".botao-swiper .button-prev-loteamento",
        },
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          640: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1367: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1700: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
      });

      var swiper4 = new Swiper(".mySwiper-blog", {
        navigation: {
          nextEl: ".botao-swiper .button-next-blog",
          prevEl: ".botao-swiper .button-prev-blog",
        },
        breakpoints: {
          579: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1367: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1700: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
        },
      });
    </script>

    </body>

    </html>