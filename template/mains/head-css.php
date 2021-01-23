<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name='description' content="<?= $HEAD['description'] ?>">
  <meta name='keywords' content="<?= $HEAD['keyword'] ?>">
  <meta property='og:image:type' content='image/jpeg'>
  <meta property='og:type' content='website'>
  <meta property='og:title' content="<?= $HEAD['title'] ?>">
  <meta property='og:url' content="<?= SITE_URL . $HEAD['url'] ?>">
  <meta property='og:description' content="<?= $HEAD['description'] ?>">
  <meta property='og:image' content="<?= SITE_URL . $HEAD['thumbnail'] ?>">
  <title><?=$HEAD['title']?></title>  
  <link rel="icon" href="<?=ROOT_URL.$WEBINFO['favicon']['info_link']?>" type="images/favicon.png">

 <!-- ส่วนของ CSS Global -->
  <script src="https://kit.fontawesome.com/37e3c13129.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" href="<?=ROOT_URL?>css/style.min.css?v=11.<?=date('Ymdis')?>">
  <link rel="stylesheet" href="<?=ROOT_URL?>css/home.min.css?v=11.<?=date('Ymdis')?>">
 
  <!-- ส่วนของ CSS Page -->
  <?php echo $HEAD['css']; ?>

</head>
 