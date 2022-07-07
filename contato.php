<?php include "header.php"; ?>

<main>
  <div class="box-titulo">
    <div>
      <h1>CONTATO</h1>
      <p>Home | Contato</p>
    </div>
  </div>
  <div class="container">
    <div class="formulario">
      <form>
        <div class="formulario-itens">
          <div class="separar-form">
            <div>
              <input type="nome" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome">
            </div>
            <div>
              <input type="telefone" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Telefone">
            </div>
            <div>
              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
            </div>
            <div>
              <select id="assunto" class="form-select">
                <option>Assunto</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
              </select>
            </div>
          </div>
          <div>
            <textarea class="form-control" id="texto" placeholder="Digite sua mensagem"></textarea>
          </div>
        </div>
        <div class="separar-form2">
          <p>*Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique non augue ut mattis. Suspendisse potenti. In diam mauris, luctus accumsan commodo id, viverra non ante.</p>
          <button type="submit" class="botao-vermelho">ENVIAR MENSAGEM*</button>
        </div>
      </form>
    </div>
    <?php include "mapa.php"; ?>
  </div>
</main>

<?php include "footer.php"; ?>