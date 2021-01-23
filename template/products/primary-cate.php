 <!-- breadcrumb -->


 <div class="breadcrumb">
      <ul>
        <li><a href="<?=ROOT_URL?>">Home</a></li>
        <li><?=$Route['level_2']?></li> 
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
        <div class="content category">
          <div class="title">
            <span><?=$Route['level_2']?></span>
          </div>

          <div class="grid"> 
          <?php 
              foreach($myCate as $bb =>$aa) {  
                if($aa['url'] != $Route['level_2']) continue;
                if(!empty($aa['child'])){ 
                  foreach($aa['child'] as $key =>$val){
                    echo '<div class="box">
                          <div class="detail">
                            <div class="name"><h2>'.$val['cate_name'].'</h2></div>
                            <div class="button">
                              <a href="'.ROOT_URL.$aa['main_cate'].'/'.$val['parent_url'].'/'.$val['url'].'"><button class="form-component button">More</button></a>
                            </div>
                          </div>
                          <div class="bg">
                            <img src="'.ROOT_URL.$val['thumbnail'].'" alt="">
                          </div>
                        </div>'; 
                  }
                  break;
                } else {
                  echo'ไม่พบหมวดย่อย';
                } 
            } 
            
          ?>
             

          </div>
        </div>
      </div>
    </main>