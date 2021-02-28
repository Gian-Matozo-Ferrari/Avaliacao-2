<link rel="stylesheet" href="style.css">

<form action="meus_dados.php" method="POST">

<H1>Página de verificação de pagamentos de multas</H1>

<div>
    <p>Qual a placa do seu Carro? <br>
        Placa: <input type="text" name="placa"> <br>
    </p>
</div>

<div>
    <p>Qual o modelo e o ano do carro? <br>
        Modelo: <input type="text" name="modelo"> <br>
        Ano: <input type="number" name="ano">
    </p>
</div>

<div>
    <p>Qual o nome e o CPF do proprietario? <br>
        Nome:  <input type="text" name="nome"> <br>
        CPF: <input type="number" name="CPF">
    </p>
</div>
<div>
    <p>Você já pagou a multa?
        <input type="radio" name="pagam" value="sim">Sim
        <input type="radio" name="pagam" value="nao" >Não
    </p>
</div>
    <p><input type="submit" name="enviar" value="Enviar Dados">
    <input type="reset" name="limpar" value="Limpar">
    </p>

</form>