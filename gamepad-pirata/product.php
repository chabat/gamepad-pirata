<!DOCTYPE html>
<html>
    <head>
        <title>Gamepad Pirata - A melhor loja de jogos da região em que você estiver!</title>
        <link type="text/css" rel = "stylesheet" href = "css/common.css">
        <link type="text/css" rel = "stylesheet" href = "css/product.css">
    </head>

    <body>
        <?php
            include("./php/dbconnect.php");
            include("./php/logomenu.php");
            include("./php/showerrors.php");
            $id = $_GET['id'];
            $query = "SELECT * from game where code = " . "'" . $id . "'";
            $title = pg_fetch_object(pg_query($con, $query), 0)->title;
            $image = pg_fetch_object(pg_query($con, $query), 0)->image;
            $price = pg_fetch_object(pg_query($con, $query), 0)->price;
            $genre = pg_fetch_object(pg_query($con, $query), 0)->genre;
            $platform = pg_fetch_object(pg_query($con, $query), 0)->platform;
            $year = pg_fetch_object(pg_query($con, $query), 0)->year;
        ?>
        <div id="wrapper">
            <div id="content"></div>
                <div id = "showcase">
                    <fieldset>
                        <legend><b><?php echo($title)?></b></legend>
                        <figure>
                            <img src=<?php echo($image)?> alt="Imagem do Produto Indisponivel" width="300" height="300">
                        </figure>
                        <div id="buyprice">
                            <p><b>R$ <?php echo($price)?><b><p/>
                            <form action="thanks.php">
                                <button type="submit">COMPRAR</button>
                            </form>
                        </div>
                            <p>Gênero: <?php echo($genre)?></p>
                            <p>Plataforma: <?php echo($platform)?></p>
                            <p>Ano: <?php echo($year)?><p/>
                    </fieldset>
                </div>
            <div id="footer">
                <?php include("./php/footer.php") ?>
            </div>
        <div/>
    </body>
</html>
