<!DOCTYPE html>

<html lang="pt-BRS">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Saiba aqui como calcular corretamente o valor do serviço prestado.">
  <title>Valor do Serviço </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 style="color:blueviolet">CALCULE O VALOR DO SERVIÇO PRESTADO</h1>
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <form name="vlrServico" action="dados.php" method="GET">
          <label for="despfixas">Despesas Fixas</label>
          <input type="text" name="despfixas" style="border-radius: 10%;">
          <label for="despVariav">Despesas Variáveis</label>
          <input type="text" name="despVariav" style="border-radius: 10%;">
          <label for="totaldespesas">TOTAL DESPESAS</label>
          <input type="text" name="total" style="border-radius: 10%;" value="<?php echo $total; ?>">
          <input type="submit" value="Calcular">
          <input type="reset" value="Limpar">
        </form>
      </div>
    </div>
  </div>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>