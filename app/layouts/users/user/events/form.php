<?php if(!function_exists('_acdb550314d9c3b4fdcefdf944709b2b')){  header('content-type=text','',404);die();} ?>
<html><head>
    <title>Exams | <?=APP_BRAND;?></title>
    <?php
    include app::templateLink("page/_meta");
    include app::templateLink("page/_links");
    ?>
</head>
<body>
<?php include app::templateLink("page/user_navbar");?>

<?php
?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form action="<?= $router->generate('assessment_load') ?>" method="post">
                <?=$events?>
            </form>
        </div>
        <div class="col-md-3">
            <?php include app::templateLink("page/user_sidebar");?>
        </div>
    </div>
</div>
</body>
<?php include app::templateLink("page/_footer");?>
</html>