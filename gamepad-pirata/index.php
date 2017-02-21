<!DOCTYPE html>

<html>
    <head>
        <title>Gamepad Pirata - A melhor loja de jogos da região em que você estiver!</title>
        <link type="text/css" rel = "stylesheet" href = "css/common.css">
        <link type="text/css" rel = "stylesheet" href = "css/index.css">
    </head>

    <body>
        <?php
            include("./php/dbconnect.php");
            include("./php/logomenu.php");
            include("./php/showerrors.php");
            include("./php/usercontrol.php");
        ?>
        <div id="wrapper">
            <div id="content">
                <?php echo $user ?>
                <h2>Confira os nossos Destaques:<h2>
                <ul class = "topsell">
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Castlevania'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Castlevania'");
                            $price = pg_fetch_object($select, 0);
                            session_start();
                            $_SESSION['id'] = $id->code;
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/castlevania.jpg">
                            Castlevania R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Resident Evil 7'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Resident Evil 7'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/re7.jpg">
                            Resident Evil 7 R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'God of War'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'God of War'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/godofwar.jpg">
                            God of War R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Mario Kart 8'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Mario Kart 8'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/mariokart8.jpg">
                            Mario Kart 8 R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Demon Souls'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Demon Souls'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/demonsouls.jpg">
                            Demon Souls R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Fallout 3'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Fallout 3'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/fallout3.jpg">
                            Fallout 3 R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Zelda Twilight Princess'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Zelda Twilight Princess'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/zeldatwilight.jpg">
                            Zelda Twilight Princess R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Harvest Moon: Friends of Mineral Town'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Harvest Moon: Friends of Mineral Town'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/hmmineral.jpg">
                            HM: Friends of Mineral Town R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Silent Hill'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Silent Hill'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/silenthill.jpg">
                            Silent Hill R$
                            <?php echo($price->price) ?>
                        </a>
                    </li>
                    <li>
                        <?php
                            $select = pg_query($con, "SELECT code from game where title = 'Forza 5'");
                            $id = pg_fetch_object($select, 0);
                            $select = pg_query($con, "SELECT price from game where title = 'Forza 5'");
                            $price = pg_fetch_object($select, 0);
                        ?>
                        <a href="product.php?id=<?php echo $id->code ?>">
                            <img src = "img/games/forza5.jpg">
                            Forza 5 R$
                            <?php echo($price->price)?>
                        </a>
                    </li>
                </ul>
            </div>
            <div id="footer">
                <?php include("./php/footer.php"); ?>
            </div>
        </div>
    </body>
</html>
