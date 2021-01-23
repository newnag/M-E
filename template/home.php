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
        <div class="content">
          <div class="title">
            <span>สินค้าแนะนำ</span>
            <div class="tag" onclick="open_tag()">
              <span>Tags</span>
              <i class="fas fa-tags"></i>
            </div>
          </div>
          <hr>
          <?php if($tagSearch!="")  echo ' <div class="title">  <span><a>ค้นหาสินค้าที่ตรงกับ</a> '.$tagSearch.'</span>  </div>'; ?>

          <div class="grid-box">
              <?php
                  if(!empty($HOME_PRODUCT)){
                    foreach($HOME_PRODUCT as $key =>$val ){
                      $prices =  ($val['specialprice'] > 0 )?'<b>฿'.number_format($val['specialprice']).'</b> <span style="text-decoration: line-through;color: grey;">'.number_format($val['saleprice']).'</span>' : "<b>฿".number_format($val['saleprice'])."</b>";
                      if($val['saleprice'] == 0 && $val['specialprice'] == 0) $prices = $val['unit'];    
                      $newProduct = ($val['new']=='yes')? ' <div class="new"><span>สินค้าใหม่</span></div>':"";
                      $discount = ($val['specialprice']>0)? ' <div class="discount"><span>ลดพิเศษ</span></div>':'';
                      echo '<a href="'.ROOT_URL.$val['slug'].'">
                              <div class="box">
                                <div class="tag">
                                  '.$newProduct.' 
                                  '.$discount.'
                                </div>
                                <div class="brand"><img src="'.ROOT_URL.$val['brandimg'].'" alt="'.$val['brandname'].'"></div>
                                  <figure><img src="'.ROOT_URL.$val['thumbnail'].'" alt="'.$val['topic'].'"></figure>
                                  <div class="detail">
                                    <div class="name"><p>'.$val['title'].'</p></div>
                                    <div class="price">
                                      <span>'.$prices.'</span>
                                    </div>
                                  </div>
                              </div>
                            </a>';
                    }

                  } else {
                    echo'<a>ไม่พบสินค้า</a>';
                  }
              ?>

          </div>
          <div class="filter-tag">
            <div class="box-filter">
              <div class="head">
                <i class="fas fa-times" onclick="close_filter()"></i>
                <span>TAGS</span>
                <span class="reset" onclick="reset_tag()">RESET</span>
              </div>
              <div class="body-tag">
                <div class="select-tag">
                  <h4>Include Tags</h4>
                  <label>Find product that has all selected tags below</label>
                  <ul class="tag">
                    <?php
                      if(!empty($allTags)){
                        foreach($allTags as $ats){
                          echo'<li><button class="" value="'.$ats['tag_name'].'" onclick="select_tag(this)">'.$ats['tag_name'].'</button></li>';
                        }
                      }
                    ?>
                  </ul>
                </div>
                <div class="footer">
                  <span onclick="close_filter()">ยกเลิก</span>
                  <span class="apply">ใช้งาน</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>