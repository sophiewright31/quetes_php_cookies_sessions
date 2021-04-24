<?php require 'inc/head.php';
require 'inc/data/products.php'?>
<?php
if(null === $_SESSION['username']) {
    header('Location: /login.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <ul>
            <?php foreach ($_SESSION['cookies'] as $cookiesId => $quantity) : ?>
                <li>
                    <?= $catalog[$cookiesId]['name'] ?> : <?= $quantity ?>
                    <br>
                    <?= $catalog[$cookiesId]['description'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php';?>