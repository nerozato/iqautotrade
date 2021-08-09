<?php
session_start();

require "../../../config/config.settings.php";

require $_SERVER['DOCUMENT_ROOT'].FILE_PATH."/vendor/autoload.php";

require $_SERVER['DOCUMENT_ROOT'].FILE_PATH."/app/src/MySQL/MySQL.php";
require $_SERVER['DOCUMENT_ROOT'].FILE_PATH."/app/src/App/App.php";
require $_SERVER['DOCUMENT_ROOT'].FILE_PATH."/app/src/App/AppModule.php";

require $_SERVER['DOCUMENT_ROOT'].FILE_PATH."/app/src/User/User.php";
require $_SERVER['DOCUMENT_ROOT'].FILE_PATH."/app/src/Lang/Lang.php";


$App = new App(true);
$App->_loadModulesControllers();

$User = new User();

$Lang = new Lang(null, $App);
$GoogleOauth = new GoogleOauth($User);

?>
<div class="kr-loading-fnc">
    <div> <div class="sk-folding-cube sk-folding-cube-orange"> <div class="sk-cube1 sk-cube"></div> <div class="sk-cube2 sk-cube"></div> <div class="sk-cube4 sk-cube"></div> <div class="sk-cube3 sk-cube"></div> </div> </div>
</div>
<header>
    <img src="<?php echo APP_URL.$App->_getLogoBlackPath(); ?>" alt="">
</header>
<section class="kr-login-act">
    <section class="kr-login-field">
        <div>Check your email for password reset instructions</div>
        <footer>
            <a class="kr-gologin-view"><?php echo $Lang->tr('Back to login'); ?></a>
        </footer>
    </section>
</section>
<footer>

</footer>
