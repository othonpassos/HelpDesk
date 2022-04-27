<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">

  <title>Suporte</title>
</head>

<body>

  <header>
    <div class="caixa">
      <img src="logo.png" id="logo">

      <nav>
        <h1 class="titulo-principal">REUP - Suporte</h1>
      </nav>
    </div>

  </header>
  <main>

    <div class="caixa-menu-abrir-chamado">


      <div class="titulo-menu">
        Abertura de chamado
      </div>

      <div class="">

        <form>
          <div class="">
            <label>Título</label>
            <input name='titulo' type="text" class="input-padrao" placeholder="Título">
          </div>

          <div class="">
            <label>Categoria</label>
            <select class="">
              <option>Criação Usuário</option>
              <option>Impressora</option>
              <option>Hardware</option>
              <option>Software</option>
              <option>Rede</option>
            </select>
          </div>

          <div class="textArea">
          <textarea class="texto-input" placeholder="Descrição" rows="6"></textarea>
          </div>
          


          <div class="">

            <div class="botonsChamado">
              <button class="entrar" type="submit">Abrir</button>
              <button class="entrar" type="submit">Voltar</button>
            </div>
          </div>
        </form>

      </div>




  </main>
</body>

</html>