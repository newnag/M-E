    <!-- breadcrumb -->
    <div class="breadcrumb">
      <ul>
        <li><a href="<?=ROOT_URL?>">Home</a></li>
        <li><a href="<?=ROOT_URL.$Route['level_1']."/".$Route['level_2']?>"><?=$Route['level_2']?></a></li>
        <li><?=$Route['level_3']?></a></li>
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
        
        <div class="content sub-category">
          <!--  Options แบรนด์ต่าง ๆ -->

          <?php if(!empty($secoundCate)){  ?>
           <div class="table">
            <div class="head-table">
              <div class="hr">หมวดหมู่ย่อยของ <?=$CATE_PAGE->title?></div>
            </div>
            <div class="body-table">
              <div class="left">
                <img src="<?=ROOT_URL.$CATE_PAGE->thumbnail?>" alt="">
              </div>
              <div class="right">
              <?php
                
                  $brand_slc = (isset($_GET['brand']))?"?brand=".$_GET['brand']:"";
                  foreach($secoundCate as $key =>$val){
                    echo '<div class="row"><a href="/'.$routeURL.$val['url'].$brand_slc.'">'.$val['cate_name'].'</a><span></span></div>';
                  }
                
              ?>
              </div>
            </div>
          </div>
          <?php }    ?>

          <div class="title">
            <span>หมวด <?=$CATE_PAGE->title?></span>
            <div class="select-box">
              แบรนด์ : 
              <select name="" id="slc_brand" class="form-component">
                <option SELECTED value="">ทั้งหมด</option>
                <?=$BRAND_OPTIONS?>
              </select>
            </div>
          </div> 

          <div class="grid-box">
            <?php
              if(!empty($products)){
                foreach($products as $key =>$val){
                  $prices =  ($val['specialprice'] > 0 )?'<b>฿'.number_format($val['specialprice']).'</b> <span style="text-decoration: line-through;color: grey;">'.number_format($val['saleprice']).'</span>' : "<b>฿".number_format($val['saleprice'])."</b>";
                  $newProduct = ($val['new']=='yes')? ' <div class="new"><span>สินค้าใหม่</span></div>':"";
                  $discount = ($val['specialprice']>0)? ' <div class="discount"><span>ลดพิเศษ</span></div>':'';
                  if($val['saleprice'] == 0 && $val['specialprice'] == 0)  $prices = $val['unit'];
               
                  echo ' <a href="'.ROOT_URL.$val['slug'].'">
                            <div class="box">
                              <div class="tag">
                                  '.  $newProduct .'
                                  '.  $discount .'
                              </div>
                              <div class="brand"><img src="'.SITE_URL.$val['brandimg'].'" alt=""></div>
                              <div class="picture"><img src="'.SITE_URL.$val['thumbnail'].'" alt=""></div>
                              <div class="detail">
                                <div class="name"><p>'.$val['title'].'</p></div>
                                <div class="price">
                                  <span>'.$prices.'</span>
                                </div>
                              </div>
                            </div>
                          </a> ';
                } 
              } else{
                // echo'<a> ไม่พบสินค้าในหมวดนี้ </a>';
              }
          
            ?>
           </div> 

          </div>
      </div>
    </main>