<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
  <link rel="stylesheet" href="./librerias/css/bootstrap.css">
  <title>Números aleatorios</title>
</head>

<body>

  <div class="container mt-3">
    <div class="row mt-2">
      <div class="col-sm">

        <span class="btn btn-success" id="btn_numero_aleatorios">Generar Números aleatorios</span>

      </div>
    </div>
    <div class="col-sm mt-5">
      <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Numero Aleatorio</th>
          </tr>
        </thead>
        <tbody id="imprime_numeros"></tbody>
      </table>

    </div>

  </div>
  </div>

</body>

</html>

<script src="./librerias/js/jquery/jquery.js"></script>
<script src="./librerias/js/b4/bootstrap.js"></script>
<script src="./manager/control-index.js"></script>