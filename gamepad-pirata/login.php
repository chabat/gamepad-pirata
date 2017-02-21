<!DOCTYPE html>
<html>
    <head>
        <title>Gamepad Pirata - A melhor loja de jogos da região em que você estiver!</title>
        <link type="text/css" rel = "stylesheet" href = "css/common.css">
        <link type="text/css" rel = "stylesheet" href = "css/forms.css">
    </head>

    <body>
        <div id="wrapper">
            <?php include("./php/dbconnect.php"); ?>
            <?php include("./php/logomenu.php"); ?>
            <?php include("./php/showerrors.php");?>
    		<div id="content">
                <form action="aquivaialgo">
                    <div class="form" id = "login">
                        <fieldset>
                            <legend> Informações de Login </legend>
                                <label>Email</label> <br>
                                <input type="email" name="email" required> <br>
                                <label>Senha</label> <br>
                                <input type="password" name="psw" required> <br>
                        </fieldset>
                    <div>
                    <button type="submit">Login</button>
                </form>
            </div>
    		<div id="footer">
                <?php include("./php/footer.php"); ?>
            </div>
    	</div>
    </body>
</html>
