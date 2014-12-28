<!DOCTYPE html>
<?php $page = !empty($page) ? "page--".$page.' ' : ''; ?>
<!--[if lt IE 7]>      <html lang="en" class="<?php echo $page ?>no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="<?php echo $page ?>no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="<?php echo $page ?>no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="<?php echo $page ?>no-js "> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo !empty($title) ? $title : APP_TITLE  ?></title>
        <meta name="description" content="<?php echo !empty($description) ? $description : APP_DESC ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/dist/style.css">
    </head>
    <body>
        <!--[if lte IE 8]>
        <p class="obsolete-browser">You use an <strong>obsolete</strong> browser. <a href="http://browsehappy.com/" target="_blank">Update it</a> to navigate <strong>safely</strong> on the Internet!</p>
        <![endif]-->


        <div class="container">
            <?php $this->insert('elements/navbar') ?>

            <?php if (!empty($_SESSION['slim.flash'])): ?>
                <?php foreach ($_SESSION['slim.flash'] as $type => $message): ?>
                    <p class="flash alert alert-<?php echo $type ?>"><?php echo $message ?></p>
                <?php endforeach ?>
            <?php endif ?>
            <?php echo $this->section('content') ?>
        </div>

        <?php $js = ['/bower_components/jquery/dist/jquery.js',
        '/bower_components/bootstrap/dist/js/bootstrap.min.js',
        '/js/script.js'];
        foreach ($js as $script): ?>
            <script src="<?php echo $script ?>"></script>
        <?php endforeach; ?>
    </body>
</html>
