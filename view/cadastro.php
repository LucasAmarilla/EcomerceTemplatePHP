
<main class="container mb-4">
  <br>
  <br>
  <center><h2>Página de Cadastro</h2></center>
  <center><p>Informe seus dados</p></center>
  <form class="offset-md-2 col-md-8" action="../controler/userController/cadastro.php" method="post">
    <h4>Formulário de cadastro</h4>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="nome">Nome completo:</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo">
      </div>

      <div class="form-group col-md-6">
        <label for="cpf">CPF:</label>
        <input class="form-control" type="number" id="cpf" name="cpf" rows="3" placeholder="Digite seu CPF"></textarea>
      </div>

      <div class="form-group col-md-6">
        <label for="tel">Telefone:</label>
        <input class="form-control" type="number" id="tel" name="tel" rows="3" placeholder="Digite seu número de telefone"></textarea>
      </div>

      <div class="form-group col-md-12">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
      </div>

      <div class="form-group col-md-12">
        <label for="senha">Senha:</label>
        <input class="form-control" type="password" id="senha" name="senha" rows="3" placeholder="Digite uma senha"></textarea>
      </div>

      <div class="form-group col-md-6">
        <label for="datadenascimento">Data de nacimento:</label>
        <input class="form-control" type="date" id="datadenascimento" name="datadenascimento" rows="3" placeholder="datadenascimento"></textarea>
      </div>

    </div>

    <fieldset>
      <legend>Dados do local</legend>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="rua">Rua:</label>
          <input type="text" class="form-control" name="rua" placeholder="Digite o nome da rua">
        </div>

        <div class="form-group col-md-4">
          <label for="num">Número:</label>
          <input type="number" class="form-control" name="num" placeholder="Digite o número da casa">
        </div>

        <div class="form-group col-md-6">
          <label for="rua">Bairro:</label>
          <input type="text" class="form-control" name="bairro" placeholder="Digite o nome do bairro">
        </div>

        <div class="form-group col-md-6">
          <label for="comp">Complemento:</label>
          <input type="text" class="form-control" name="comp" placeholder="Complemento (opcional)">
        </div>

        <div class="form-group col-md-10">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" name="cidade" placeholder="Digite o nome da cidade">
        </div>

        <div class="form-group col-md-2">
          <label for="estado">Estado:</label>
          <input type="text" class="form-control" name="estado" placeholder="Estado">
        </div>

        <div class="form-group col-md-5">
          <label for="estado">Cep:</label>
          <input type="text" class="form-control" name="cep" placeholder="cep">
        </div>

        <div class="form-group col-md-7">
          <label for="estado">Complemento:</label>
          <input type="text" class="form-control" name="complemento" placeholder="complemento">
        </div>

        <div class="form-group col-md-12">
          <label for="estado">Referencia:</label>
          <input type="text" class="form-control" name="referencia" placeholder="referencia">
        </div>
      </div>
    </fieldset>

    <button class="btn btn-primary btn-block" type="submit">Salvar Dados</button>

  </form>
</main>
