<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Saiba aqui como calcular corretamente o valor do serviço prestado.">
  <title>Valor do Serviço </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="text-center my-4" style="color:blueviolet">CALCULE O VALOR DO SERVIÇO PRESTADO</h1>
    <form name="vlrServico" action="dados.php" method="GET">
      <div class="form-group row">
        <label for="despfixas" class="col-sm-2 col-form-label col-form-label-sm">Despesas Fixas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="despfixas" placeholder="R$ 99.999,99" required novalidate>
        </div>
      </div>
      <div class="form-group row">
        <label for="capProd" class="col-sm-2 col-form-label">Capacidade Produtiva</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="capProd" placeholder="tempo produtivo, em horas, por mês" required novalidate>
        </div>
      </div>
      <div class="form-group row">
        <label for="custoFixoUnit" class="col-sm-2 col-form-label">Custo Fixo Unitário</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="custoFixoUnit" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="horasServ" class="col-sm-2 col-form-label">Tempo do Serviço</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="HorasServ" placeholder="colocar em horas">
        </div>
      </div>
      <div class="form-group row">
        <label for="cfunitServ" class="col-sm-2 col-form-label">Custo Fixo unitário do Serviço</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="cfunitServ" readonly>
        </div>
      </div>

      <div class="form-group row">
        <label for="impostos" class="col-sm-2 col-form-label">Impostos</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="impostos" placeholder="valor numérico dos impostos sem a porcentagem" required novalidate>
        </div>
      </div>
      <div class="form-group row">
        <label for="lucro" class="col-sm-2 col-form-label">Lucro</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="lucro" placeholder="valor do lucro desejado. Por ex. 10%, coloque 10, sem a porcentagem" required novalidate>
        </div>
      </div>
      <div class="form-group row">
        <label for="markup" class="col-sm-2 col-form-label">Markup</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="markup" readonly>
        </div>
      </div>


      <div class="form-group row">
        <label for="custopVariav" class="col-sm-2 col-form-label">Custo Variável Unitário</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="custoVariav" required novalidate>
        </div>
      </div>
      <div class="form-group row">
        <label for="cut" class="col-sm-2 col-form-label">Custo Unitário Total</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="cut" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="pvServico" class="col-sm-2 col-form-label">Valor do Serviço</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-lg" id="pvServico" readonly>
        </div>
      </div>
    </form>
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