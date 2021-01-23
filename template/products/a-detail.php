   <!-- breadcrumb -->
   <div class="breadcrumb">
      <ul>
        <li><a href="<?=ROOT_URL?>">Home</a></li>
        <?php
          if(!empty($breadCrump)){
            $urlStack = $CATEGORY->url.'/';
            foreach($breadCrump as $bc){
              echo ' <li><a href="'.ROOT_URL.$urlStack.$bc['url'].'" >'.$bc['title'].'</a></li>';
              $urlStack .= $bc['url'].'/';
            }
          }
        ?>
        <li><?=$posts->title?></li>
      </ul>
    </div>
 
    <!-- ส่วนหลัก -->
    <main>
      <div class="main-content">
        <div class="aside">
          <div class="icon"><i class="fas fa-align-left" onclick="aside_mobile()"></i></div>
          <div class="aside-menu">
            <div class="title">category</div>
            <ul class="menu">
              <?=$NAV_LEFT?>
              <!-- ไอค่อนสำหรับปิดเมนู -->  
              <li class="icon-close"><i class="fas fa-angle-double-left" onclick="closeAside_mobile()"></i></li>
            </ul>
            <figure class="qrcode"><h3>Line ID</h3><img src="<?=ROOT_URL.$WEBINFO['qrcode']['info_link']?>" alt=""></figure>
          </div>
        </div>
        <div class="content product">
          <div class="product-zone">
            <div class="detail-zone">
              <div class="name">
                <h1><?=$posts->title?></h1>
              </div>

              <div class="price"> 
                <span><b>รหัสสินค้า :</b> <?=$posts->keyword?> </span>
              </div>

              <div class="price"> 
                <span>
                  <?php
                    $prices =  ($posts->specialprice > 0 )? 'ลด <a style="text-decoration: line-through;color: grey;">'.number_format($posts->saleprice).' ฿</a> เหลือ <b> '.number_format($posts->specialprice).'</b>' : "<b>".number_format($posts->saleprice)."</b>";
                    echo  $prices . " ฿ " .$posts->unit; 
                  ?> 
                </span>
              </div>
              <div class="buy-button"><a href="<?=$CONTACT['line_1']['info_link']?>">BUY NOW</a></div> 
              <?php if($posts->manual_file != "") echo '<div class="manual-btn" title=" '.$posts->manual_title.'" ><a target="_blank" href="'.ROOT_URL.$posts->manual_file.'"><i class="fa fa-book"> </i> คู่มือสินค้า </a></div>';  ?>

            </div> 

            <div class="picture-zone">
              <div class="big-pic">
                <img src="<?=$posts->thumbnail?>" alt="">
              </div>
              <div class="swiper-container thumb-pic">
                <div class="swiper-wrapper">
                  <?php
                    if(!empty($images)){
                      foreach($images as $val){
                        echo '<div class="swiper-slide"><img src="'.ROOT_URL.$val['image_link'].'" alt="'.$posts->title.$val['image_id'].'"></div> ';
                      }
                    }
                  ?>
                  
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
            </div>
          </div>

          <div class="product-detail">
            <!-- <h2><?=$posts->topic?></h2> -->
            <div class="ck">
              <?=$posts->content?>
            </div>
          </div>

          <div class="brand">
            <a href=""><div class="logo"><img src="/img/3M-02.png" alt=""></div></a>
            <a href=""><div class="logo"><img src="/img/3M-02.png" alt=""></div></a>
            <a href=""><div class="logo"><img src="/img/3M-02.png" alt=""></div></a>
            <a href=""><div class="logo"><img src="/img/3M-02.png" alt=""></div></a>
          </div>

          <div class="tag">
            <h3>Tags</h3>
            <ul>
              <?php
                  if(!empty($tags)){
                    foreach($tags as $val){
                      echo'<li><a href="'.ROOT_URL.'?tag='.$val['tag_name'].'">'.$val['tag_name'].'</a></li>';
                    }
                  }
              ?>
            </ul>
          </div>

          <div class="table">
            <div class="head-table">
              <div class="hr">สินค้าที่คล้ายกัน <?=$bc['title']?> </div>
            </div>
            <div class="body-table">
              <div class="left">
                <img src="<?=ROOT_URL.$bc['thumbnail']?>" alt="">
              </div>
              <div class="right">
                <?php
                  if(!empty($relateProduct)){
                    foreach($relateProduct as $val){
                      echo  '<div class="row"><a href="'.ROOT_URL.$val['slug'].'">'.$val['title'].'</a><span>'.number_format($val['saleprice']).' บาท '.$val['unit'].'</span></div>';
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>