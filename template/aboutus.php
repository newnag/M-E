   <!-- breadcrumb -->
   <div class="breadcrumb">
      <ul>
        <li><a href="<?=ROOT_URL?>">Home</a></li>
        <li><?=$aboutUs->title?></li>
      </ul>
    </div>

    <!-- ส่วนหลัก -->
    <main>
      <div class="main-content about">
        <div class="content">
          <div class="title">
            <span><?=$aboutUs->title?></span>
          </div>

          <h1><?=$aboutUs->topic?></h1>

          <figure><img src="<?=ROOT_URL.$aboutUs->thumbnail?>" alt=""></figure>

          <div class="ck">
            <?=$aboutUs->content?>
          </div>

          <div class="social">
            <a   target="_blank" href="<?=$CONTACT['facebook']['info_link']?>"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a   target="_blank" href="<?=$CONTACT['line_1']['info_link']?>"><i class="fab fa-line"></i> Line</a>
            <a   target="_blank" href="<?=$CONTACT['twitter']['info_link']?>"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
        </div>
      </div>
    </main>

 