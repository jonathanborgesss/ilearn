<?php

namespace App\Utility;
use App\Utility\Paths;
{
    class Builder
    {

        public function buildNavbar($account, $nome, $access)
        {
            if ($account == false) {
                return $this->buildFile("Navbar/NavbarNA.php");
            } else {
                return $this->buildFile("Navbar/Navbar.php");
            }
        }
        public function buildHead($file)
        {
            ?>

            <head>
                <meta charset="utf-8">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                <title>iLearn</title>
                <meta name="description" content="">
                <meta name="keywords" content="">

                <!-- Favicons -->
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>img/favicon.png" rel="icon">
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>img/logo2.png" rel="Apple-touch-icon">

                <!-- Fontes -->
                <link href="https://fonts.googleapis.com" rel="preconnect">
                <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
                <link
                    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
                    rel="stylesheet">

                <!-- Arquivos CSS do Vendor -->
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/aos/aos.css" rel="stylesheet">
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

                <!-- Arquivo CSS Principal -->
                <link href="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>css/<?php echo $file;?>.css" rel="stylesheet">

            </head><?php

        }

        public function buildScripts()
        {
            ?>
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/php-email-form/validate.js"></script>
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/aos/aos.js"></script>
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/glightbox/js/glightbox.min.js"></script>
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/swiper/swiper-bundle.min.js"></script>
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>vendor/purecounter/purecounter_vanilla.js"></script>

            <!-- Arquivo JS Principal -->
            <script src="<?php echo Paths::MAIN_FOLDER . Paths::ASSETS_FOLDER ?>/js/main.js"></script>
            <?php
        }
        public function buildFile($path){
            include_once __DIR__ . '/../View/' . $path;
        }
    }
}

?>