<!DOCTYPE html>

<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="calcule aqui o valor do seu serviço de forma correta, e não tenha prejuízo.">
  <title>Valor do Serviço</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <style>
    h1 {
      color: #006633;
      text-shadow: 2px 2px 2px #006633,
        2px 2px 2px #006633,
        2px 2px 2px #006633,
        2px 2px 2px rgba(0, 255, 0, 0.3);
    }

    h2 {
      font-size: x-large;
      text-align: center;
    }

    hr {
      color: mediumaquamarine;
      border: dashed 0.05em;
    }

    #total {
      font-size: medium;
      font-weight: bold;
      color: darkorange;
    }
  </style>

</head>

<body>
  <img class="img-fluid" src="assets\imagens\img-header-valor-servico.png" alt="imagem cabeçalho valor serviço">
  <div class="container">
    <h1 class="display-3 text-center mt-4">VALOR DO SERVIÇO PRESTADO</h1>
    <p>Calcular o valor da prestação do serviço corretamente é importante, pois serve para avaliar se a estrutura de custos da empresa ou do profissional permite a ela ou a ele ser competitivo no mercado.</p>
    <p>Para calcular o preço de venda na prestação de serviços deve-se conhecer os custos e despesas e também deve ser analisado o preço praticado pela concorrência, pois, os clientes estão pesquisando preços e procurando qualidade, tanto dos serviços quanto do atendimento.</p>
    <p>Assim, os preços calculados através de fórmulas servirão apenas como um referencial para comparação com os de mercado.</p>
    <p>Por último, o preço de venda precisa sempre ser revisto, uma vez que pode haver aumento no preço de compra de materiais empregados na prestação dos serviços, e também por exigência dos consumidores ou da concorrência.</p>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <h2 class="shadow-sm bg-dark rounded text-warning">Conceitos Importantes</h2>
        <h3 style="font-size:larger">Despesas Fixas:</h3>
        <p>São as despesas que vão incorrer, tem que ser pagas, chova ou faça sol, enquanto a empresa existir.</p>
        <hr>
        <h3 style="font-size:larger">CVunit:</h3>
        <p>Custo variável unitário é o que varia de acordo com a prestação do serviço. Exs.: mão de obra, almoço, materiais diretos, custos de deslocamento, etc</p>
        <hr>
        <h3 style="font-size:larger">Custos de deslocamento:</h3>
        <p>São os custos como: combustível, manutenção do veículo, IPVA, seguro do veículo. Soma tudo e multiplica pelo km gasto para realizar o serviço.</p>
        <hr>
        <h3 style="font-size:larger">Impostos + Lucro:</h3>
        <p>Impostos são os que ocorrem na prestação do serviço e Lucro é o valor que você ou sua empresa deseja ter.</p>
        <hr>
      </div>
      <div class="col-sm-12 col-md-7">
        <div class="card bg-light">
          <img src="assets\imagens\img-head-card.jpg" class="card-img-top" alt="imagem cabeçalho card">
          <form action="#total" method="POST">
            <!--com action na #total o resultado vai ser mostrado nela, sem subir a pg-->
            <div class="form-group row mt-4">
              <label for="despFixa" class="col-sm-3 col-form-label">Desp. Fixas:</label>
              <div class="col-4">
                <input type="text" class="form-control" name="despFixa" id="despFixa" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="capacProd" class="col-sm-3 col-form-label">Capac. Produ:</label>
              <div class="col-4">
                <input type="text" class="form-control" name="capacProd" id="capacProd" required>
                <small id="capacProd" class="form-text text-muted">Se não for inteiro use ponto para separar. Ex. 1.5</small>
              </div>
            </div>
            <?php

            $total = "";

            if (isset($_POST['submit'])) {

              $despFixa = $_POST['despFixa'];
              $despFixa = str_replace(',', '.', $despFixa);
              $capacProd = $_POST['capacProd'];
              $capacProd = str_replace(',', '.', $capacProd);
              $total = $despFixa / $capacProd;
              $total = round($total, 1); //arredondamento valor da divisão
            }

            ?>
            <button type="submit" name="submit" class="btn btn-outline-primary">Calcular</button>
            <div class="form-group row">
              <label for="total" class="col-sm-3 col-form-label">Total:</label>
              <div class="col-4">
                <input type="text" class="form-control" name="total" id="total" value="<?php echo $total; ?>" readonly>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <footer>
    <div class="container">
      <h5 class="text-center">Desenvolvido por <a href="https://www.mltopsites.com.br" target="new"> ML TOP SITES</a></h5>
    </div>
  </footer>
  <!-- JavaScript and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>

</html>