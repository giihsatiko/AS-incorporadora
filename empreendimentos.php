<?php include "header.php"; ?>

<main>
  <div class="box-titulo">
    <div>
      <h1 class="fw700">EMPREENDIMENTOS</h1>
      <p class="fw500">Home | Empreendimentos</p>
      <span></span>
    </div>
  </div>
  <div class="container">
    <div class="categorias">
      <a href="" class="categorias-item">TODAS AS CATEGORIAS</a>
      <a href="" class="categorias-item">EMPREENDIMENTOS</a>
      <a href="" class="categorias-item">LOTES À VENDA</a>
      <a href="" class="categorias-item">OBRAS CONCLUÍDAS</a>
      <a href="" class="categorias-item">PRÓXIMOS LANÇAMENTOS</a>
    </div>
    <div class="row">
      <?php for ($i = 0; $i < 9; $i++) : ?>
        <div class="lotes-item col-4">
          <a href="" class="d-block">
            <div><img src="assets/images/lote.png" alt="loteamento" class="img-fluid w-100"></div>
            <div>
              <h2 class="fw500 fs14">DE 156 A 369m² • 110 LOTES</h2>
              <h3 class="fs14">Loteamento Veredas 3</h3>
              <p class="fw500 fs16">Presidente Prudente - SP</p>
              <p class="fw500 fs14">Bairro Centro</p>
            </div>
          </a>
        </div>
      <?php endfor; ?>
    </div>
    <div class="pagination-box">
      <span></span>
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