<!DOCTYPE html>
<html lang="pt-BR" prefix="og: http://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Residencial Chácara Santa Helena" />
    <meta name="og:title" content="Residencial Chácara Santa Helena" />
    <meta name="og:description" content="O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli." />
    <meta name="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <link rel="icon" href="<?= base_url(); ?>assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url(); ?>assets/images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url(); ?>assets/images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url(); ?>assets/images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url(); ?>assets/images/apple-touch-icon-57-precomposed.png">
    <link rel="image_src" href="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta name="theme-color" content="#1f312e" />
    <!-- property (faz funcionar no linkedin) -->
    <meta property="og:title" content="Residencial Chácara Santa Helena" />
    <meta property="og:image" content="<?= base_url(); ?>assets/images/compartilhamento.png" />
    <meta property="O Residencial Chácara Santa Helena resgata uma forma única de morar com sofisticação inspirada nos prazeres da natureza. Um loteamento de alto padrão para apenas 53 famílias, no Alto da Boa Vista, com projeto urbanístico de Isay Weinfeld e paisagismo de Renata Tilli." />
    <meta property="og:url" content="https:/www.reschacarasantahelena.com.br" />
    <!-- property (faz funcionar no linkedin) -->
    <?php
    $meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => $description),
        array('name' => 'keywords', 'content' => $keywords),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html;charset=utf-8', 'type' => 'equiv')
    );
    echo meta($meta);
    echo link_tag('assets/css/bootstrap.min.css');
    echo link_tag('assets/css/style.css?v=0.2.1');
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-95WNDEHXZ3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-95WNDEHXZ3');
    </script>

</head>

<body>