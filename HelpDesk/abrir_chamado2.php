<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="chamado.css">
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
    <div class="caixa-chamado">    
        <div class="row">

            <div class="card-abrir-chamado">
            <div class="card">
                <div class="card-header">
                Abertura de chamado
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col">
                    
                    <form action="" method="$_POST">
                        <div class="titulo-form">
                        <label>Título</label>
                        <input  name ='titulo' type="text" class="input-chamado" placeholder="Título">
                        </div>
                        
                        <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control">
                            <option name="categoria">Criação Usuário</option>
                            <option name="categoria">Impressora</option>
                            <option name="categoria">Hardware</option>
                            <option name="categoria">Software</option>
                            <option name="categoria" >Rede</option>
                        </select>
                        </div>
                        
                        <div class="form-group">
                        <label>Descrição</label>
                        <textarea name = "descricao" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="row mt-5">
                        <div class="col-6">
                            <button class="" type="submit">Voltar</button>
                        </div>

                        <div class="col-6">
                            <button class="" type="submit">Abrir</button>
                        </div>
                        </div>
                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
</main>
  </body>
</html>