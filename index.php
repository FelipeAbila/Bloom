<?php
require './app/config.inc';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Conheça a Bloom!</title>

        <!--[if lt IE 9]>
                <script src="_cdn/html5shiv.js"></script>
        <![endif]-->

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?= REQUIRE_PATH; ?>/css/boot.css" />
        <link rel="stylesheet" href="<?= REQUIRE_PATH; ?>/css/style.css" />
        <link rel="shortcut icon" href="<?= REQUIRE_PATH; ?>/img/shortcuticon.png"/>
    </head>
    <body>
        <header class="container bg-grayblack">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a class="radius" title="Home" href="<?= HOME; ?>">
                        Bloom
                    </a>
                </h1>
                <div class="main_nav">
                    <img class="img-header" width="30" src="<?= REQUIRE_PATH; ?>/img/menuheader.png"/>
                    <ul class="fl-right">
                        <?php
                        require REQUIRE_PATH . '/inc/main_nav.php';
                        ?>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </header>

        <article class="container main_main bg-cleargray">
            <div class="content">
                <img class="image-main" src="<?= REQUIRE_PATH; ?>/img/main.jpg" />
                <div class="text_main">
                    <h1 class="font-full">Lorem ipsum dolor sit amet</h1>
                    <p style="margin-top: 10px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <input style="margin-top: 15px;" class="btn btn-orange radius" type="submit" title="Button to know more about us" value="Learn More" >

                </div>
                <div class="clear"></div>
            </div>
        </article>

        <section class="container">
            <div class="content">
                <header style="margin-bottom:50px;">
                    <h1 class="font-full">This is a Heading</h1>
                </header>

                <?php
                for ($i = 1; $i < 4; $i++):
                    $last = ($i % 3 == 0 ? 'last' : '');
                    ?>
                    <article class="container cjn-box box box-medium <?= $last; ?>">
                        <img src="<?= REQUIRE_PATH; ?>/img/contato.jpg" />
                        <h1 class="fontsize1b font-full" style="margin: 20px 0 10px 0;">Aliquam et iaculis sapien</h1>
                        <p style="font-size: 0.875em;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet risus vel odio sagittis, eget molestie mauris lobortis. Aenean scelerisque vulputate turpis a rutrum.</p>
                        <input class="btn btn-orange radius" type="submit" value="Learn More">
                    </article>

                    <?php
                endfor;
                ?>


                <div class="clear"></div>
            </div>
        </section>
    </body>
    
    <footer class="container bg-grayblack">
        <div class="content">
            <div class="al-center" style="line-height: 10px;">&copy; Todos Direitos Reservados</div>
            <div class="clear"></div>
        </div>
    </footer>
</html>
