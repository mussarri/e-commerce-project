<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?= public_url() . 'css/bootstrap.min.css' ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?= public_url() . 'css/prettyPhoto.css' ?>" rel="stylesheet">
    <link href="<?= public_url() . 'css/price-range.css' ?>" rel="stylesheet">
    <link href="<?= public_url() . 'css/animate.css' ?>" rel="stylesheet">
    <link href="<?= public_url() . 'css/main.css?123' ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?= public_url() . 'js/html5shiv.js' ?>"></script>
    <script src="<?= public_url() . 'js/respond.min.js' ?>"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?= public_url() ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?= public_url() . 'images/ico/apple-touch-icon-144-precomposed.png' ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?= public_url() . 'images/ico/apple-touch-icon-114-precomposed.png' ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?= public_url() . 'images/ico/apple-touch-icon-72-precomposed.png' ?>">
    <link rel="apple-touch-icon-precomposed"
          href="<?= public_url() . 'images/ico/apple-touch-icon-57-precomposed.png' ?>">
</head><!--/head-->

<body>

<div class="container text-center">
    <div class="logo-404">
        <a href="index.html"><img src="<?= public_url() ?>images/home/logo.png" alt=""></a>
    </div>
    <div class="content-404">
        <img src="<?= public_url() ?>images/404/404.png" class="img-responsive" alt="">
        <h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
        <p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
        <h2><a href="<?= site_url()?>">Bring me back Home</a></h2>
    </div>
</div>
<br>
<br>

</body>


<script src="<?= public_url() ?>js/jquery.js"></script>
<script src="<?= public_url() ?>js/bootstrap.min.js"></script>
<script src="<?= public_url() ?>js/jquery.scrollUp.min.js"></script>
<script src="<?= public_url() ?>js/price-range.js"></script>
<script src="<?= public_url() ?>js/jquery.prettyPhoto.js"></script>
<script src="<?= public_url() ?>js/main.js"></script>
<script>
    // Shorthand for $( document ).ready()
    $(function () {
        $('button.badge').on('click', function () {
            var classList = this.closest('div').parentElement.children[1].classList;
            console.log(classList);
            if (classList.contains('show')) {
                classList.remove('show')
            } else {
                classList.add('show');
            }
        })
    });
</script>
</body>
</html>


