    <footer>
      <div class="box-email">
        <div class="container-fluid container-lg">
          <div class="email">
            <h1>RECEBA NOVIDADES <b>POR E-MAIL</b></h1>
            <span></span>
            <form action="">
              <div class="form-item">
                <div>
                  <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                </div>
                <div>
                  <input type="text" class="form-control" id="email" placeholder="Digite seu e-mail">
                </div>
              </div>
              <button type="submit" class=" botao-vermelho">RECEBER NOVIDADES</button>
            </form>
          </div>
        </div>
      </div>
      <div class="contato">
        <div class="container-fluid container-lg">
          <div class="links-rodape">
            <div class="links">
              <div>
                <div class="atendimento">
                  <h4>Atendimento</h4>
                  <div>
                    <img src="images/local.png" alt="pin localização">
                    <p>Seg à Sex das 8h às 18hrs</p>
                  </div>
                </div>
                <div class="atendimento">
                  <h4>Central de Atendimento</h4>
                  <div>
                    <img src="images/tel.png" alt="telefone">
                    <p>18 3916 2287</p>
                  </div>
                </div>
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
                  <a href=""><img src="images/grupo.png" alt="grupo"> COLABORADOR</a>
                </div>
                <div class="botao-vermelho">
                  <a href=""><img src="images/usuario.png" alt="usuario"> CLIENTE</a>
                </div>
                <ul>
                  <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                  <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                  <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="direitos">
            <img src="images/logo-horizontal.png" alt="logo">
            <p>
              Todos os direitos reservados © 2021 | AS Icorporadora - CRECI 021030-J - Criação
              <img src="images/oxigenweb.png" alt="logo oxigenweb">
            </p>
          </div>
        </div>
      </div>
      <div class="rodape">
        <div class="container-fluid container-lg">
          <div class="contato-rodape">
            <a href="">
              <img src="images/carta.png" alt="carta">
              <p><span>Formulário</span> de contato</p>
            </a>
            <a href="">
              <img src="images/tel2.png" alt="telefone">
              <p><span>Vendas</span> 18 3916 2287</p>
            </a>
            <a href="">
              <img src="images/whatsapp.png" alt="whatsapp">
              <p><span>Whatsapp</span> 18 3916 2287</p>
            </a>
          </div>
        </div>
      </div>

    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper-lancamento ", {
        navigation: {
          nextEl: ".button-next",
          prevEl: ".button-prev",
        },
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          350: {
            slidesPerView: 1,
          },
          640: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 2,
          },
          1367: {
            slidesPerView: 3,
          },
          1700: {
            slidesPerView: 3,
          },
        },
      });

      var swiper = new Swiper(".mySwiper-blog", {
        navigation: {
          nextEl: ".button-next",
          prevEl: ".button-prev",
        },
        slidesPerView: 2,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          579: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 2,
          },
          1367: {
            slidesPerView: 2,
          },
          1700: {
            slidesPerView: 2,
          },
        },
      });
    </script>
    <!-- Initialize Swiper -->
    <!-- <script>
      var swiper = new Swiper(".mySwiper", {
        // slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
          nextEl: ".botao-swiper .button-next",
          prevEl: ".botao-swiper .button-prev",
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script> -->
    </body>

    </html>