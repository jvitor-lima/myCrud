<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>my Crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">C R U D</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
              <a class="nav-link" href="?page=novo">Novo usuario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listar">Listar Usuarios</a>
            </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("config.php");
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-usuario.php");
            break;
          case "listar":
            include("listar-usuario.php");
            break;
          case "salvar":
            include("salvar-usuario.php");
            break;
            case "editar":
              include("editar-usuario.php");
              break;
          default:
          ?>
              <h1>C R U D</h1>
                  <br>
                <div class="clearfix">
                  <img src="img/crud.png" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
              

                  <p>
                  CRUD é a composição da primeira letra de 4 funções básicas de um sistema que trabalha com banco de dados:                  </p>

                  <p>
                    <li><strong>Create</strong> (criar) - criar um novo registro</li>
                    <li><strong>Read</strong> (exibir) as informações de um registro</li>
                    <li><strong>Update</strong> (atualizar) - atualizar os dados do registro</li>
                    <li><strong>Delete</strong> (apagar) - apagar um registro</li>
                </p>

                  <p>
                  Por exemplo, se você precisa desenvolver desde uma simples agenda telefônica até um sistema complexo de gestão de faturamento de pedidos, você precisará realizar essas 4 ações para manipular as tabelas do banco de dados de seu sistema.
                  </p>
                  <p>Do ponto de vista do desenvolvedor, ele precisará criar as tabelas (modelos) do banco de dados, funções (controles) que atualizarão o banco de dados e as interfaces (visões), como página web ou aplicativo mobile, em que os usuários irão interagir com os dados.

Em sistemas mais sofisticados, os dados do CRUD podem ser manipulados por outros sistemas via API - Application Programming Interface (em tradução livre, “Interface de Programação de Aplicativos”).</p>
                </div>
          <?php
          }
        ?>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
  </script>

</body>

</html>