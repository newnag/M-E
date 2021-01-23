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
        <div class="content brand">
          <div class="head-bg">
            <div class="logo"><img src="/img/3M-02.png" alt=""></div>
            <img src="/img/Bg-banner-1.jpg" alt="">
          </div>

          <?php
            if(!empty($brandlist)){ 
                $cate_arr = array();
                foreach($brandlist as $key =>$val){
                  if(!isset($cate_arr["cate_".$val['c_id']])) {
                    if($cate_arr["cate_".$val['c_id']] != $val['cate_name'] && $key != 0)  echo"</div>";
                    echo '  <div class="title">
                              <span>'.$val['cate_name'].'</span>
                            </div>
                            <div class="grid-box">';
                    $cate_arr["cate_".$val['c_id']] = $val['cate_name'];
                  }
                  $prices =  ($val['specialprice'] > 0 )?'<b>฿'.number_format($val['specialprice']).'</b> <span style="text-decoration: line-through;color: grey;">'.number_format($val['saleprice']).'</span>' : "<b>฿".number_format($val['saleprice'])."</b>";

                  $newProduct = ($val['new']=='yes')? ' <div class="new"><span>สินค้าใหม่</span></div>':"";
                  $discount = ($val['specialprice']>0)? ' <div class="discount"><span>ลดพิเศษ</span></div>':'';

                  echo '<a href="">
                            <div class="box">
                              <div class="tag">
                               '. $newProduct .'
                                '. $discount.'
                              </div>
                              <div class="brand"><img src="'.ROOT_URL.$val['brandimg'].'" alt=""></div>
                              <div class="picture"><img src="'.ROOT_URL.$val['thumbnail'].'" alt=""></div>
                              <div class="detail">
                                <div class="name"><p>'.$val['title'].'</p></div>
                                <div class="price">
                                  <span>'.$prices.'</span>
                                </div>
                              </div>
                            </div>
                          </a>';  
                }
            }
?>

        

  
        </div>
      </div>
    </main>