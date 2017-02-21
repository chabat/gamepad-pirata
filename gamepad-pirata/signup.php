<!DOCTYPE html>

<html>
    <head>
        <title>Gamepad Pirata - A melhor loja de jogos da região em que você estiver!</title>
        <link type="text/css" rel = "stylesheet" href = "css/common.css">
        <link type="text/css" rel = "stylesheet" href = "css/forms.css">
    </head>

    <body>
        <?php include("./php/dbconnect.php"); ?>
        <?php include("./php/logomenu.php"); ?>
        <?php include("./php/showerrors.php");?>
        <div id="wrapper">
            <div id="content">
                <form action="signedup.php" method="POST">
                    <div class="form">
                        <fieldset>
                            <legend>Dados Pessoais</legend>
                            <label>Nome Completo*</label> <br>
                            <input type="text" placeholder="Ex: João da Silva" name="name" required> <br>
                            <label>CPF*</label> <br>
                            <input type="number" placeholder="Ex: 0000000000" name="cpf" required> <br>
                            <label>Email*</label> <br>
                            <input type="email" placeholder="Ex: jaozinpericuloso@bol.com.br" name="email" required> <br>
                            <label>Telefone</label> <br>
                            <input type="number" placeholder="Ex: 11233333333" name="phone"> <br>
                            <label>Senha*</label> <br>
                            <input type="password" placeholder="Ex: ********" name="psw" required> <br>
                            <label>Confirme a senha*</label> <br>
                            <input type="password" placeholder="Ex: ********" name="pswconfirm" required> <br>
                        </fieldset>
                        <fieldset>
                            <legend>Endereço para Entrega</legend>
                            <label>Rua e Número*</label><br>
                            <input type="text" placeholder="Ex: Rua das Três Facada, 180" name="street" required> <br>
                            <label>Bairro*</label><br>
                            <input type="text" placeholder="Ex: Vale dos Prazeres" name="neighb" required> <br>
                            <label>Cidade*</label><br>
                            <input type="text" placeholder="Ex: Mataum" name="city" required> <br>
                            <label>Estado*</label><br>
                            <input type="text" placeholder="Ex: Paraná" name="state" required> <br>
                        </fieldset>
                        <button type="submit">Confirmar Cadastro</button>
                    </div>
                </form>
            </div>
            <div id="footer">
                <?php include("./php/footer.php"); ?>
            </div>
        </div>

    </body>
</html>
