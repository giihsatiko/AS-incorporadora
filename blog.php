<?php include "header.php"; ?>

<main>
  <div class="box-titulo">
    <div class="container">
      <h1 class="fw700">BLOG</h1>
      <p class="fw500">Home | Blog</p>
      <span></span>
    </div>
  </div>
  <div class="container-lg container-fluid">
    <div class="categorias">
      <a href="" class="categorias-item">TODAS AS CATEGORIAS</a>
      <a href="" class="categorias-item">IMÓVEIS</a>
      <a href="" class="categorias-item">CONSTRUÇÃO</a>
      <a href="" class="categorias-item">ARQUITETURA</a>
      <a href="" class="categorias-item">EMPREENDIMENTOS</a>
    </div>
  </div>
  <div class="container-lg container-fluid">
    <div class="row">
      <?php for ($i = 0; $i < 9; $i++) : ?>
        <div class="galeria-item col-12 col-md-4">
          <a href="">
            <div class="sobrepor-link">
              <img src="assets/images/multidao.png" alt="multidao" class="img-fluid">
              <div>
                <h2>15</h2>
                <p>Ago | 2021</p>
              </div>
            </div>
            <div class="texto-blog">
              <h3>Empresa investe R$ 2,5 milhões e lança movimento para reinventar a vida das pessoas #ReinventaSP</h3>
              <p>Com criação de novas praças, quadras esportivas e estações de mobilidade pela capital paulista, #ReinventaSP reforça “novo normal” para mostrar que modo de viver e trabalhar...</p>
              <div>SAIBA MAIS <svg width="54" height="17" viewBox="0 0 54 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M45 1L53 8.5L45 16" stroke="#8A1002" stroke-width="1.25" />
                  <rect y="8" width="53" height="1" fill="#8A1002" />
                </svg>
              </div>
            </div>
          </a>
        </div>
      <?php endfor; ?>
    </div>
    <div class="pagination-box">
      <div>
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">></a>
      </div>
    </div>
  </div>
</main>
<?php include "email.php"; ?>
<?php include "footer.php"; ?>