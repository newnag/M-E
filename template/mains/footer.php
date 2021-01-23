<footer>
      <div class="footer">
        <div class="brand">
          <div class="title">ยี่ห้อผลิตภัณฑ์ต่างๆ</div>
          <div class="list-brand">
            <ul class="list-brand-item">
              <?php
                  foreach($BRAND_LIST as $key => $val){
                    echo ' <a href="'.ROOT_URL.$MAIN_CATE[2]['url']."/".$val['slug'].'"><li class=""><img src="'.ROOT_URL.$val['footer_thumbnail'].'" alt="'.$val['name'].'"></li></a>';
                  }
              ?> 
            </ul>
            <div class="prev"><i class="fas fa-angle-left"></i></div>
            <div class="next"><i class="fas fa-angle-right"></i></div>
          </div>
          <img src="<?=ROOT_URL."img/brand.jpg"?>" alt="" class="bg-brand">
        </div>

        <div class="content-footer">
          <div class="contact">
            <div class="address">
              <p><?= $ADDRESS['address']['info_value']. " " .
                     $ADDRESS['subdistrict']['info_value']. " " .
                     $ADDRESS['district']['info_value']. " " .
                     $ADDRESS['province']['info_value']. " " .
                     $ADDRESS['zipcode']['info_value'] ?>
              </p> 

            </div>
            <div class="mail-tel">
              <a href="mailto:<?=$CONTACT['email_1']['info_value']?>"></a><p>Mail: <?=$CONTACT['email_1']['info_value']?></p></a>
              <a href="tel:<?=$CONTACT['tel_1']['info_value']?>"></a><p>Tel: <?=$CONTACT['tel_1']['info_value']?></p></a>
            </div>
          </div>

          <div class="logo-social">
            <div class="logo"><img src="<?=ROOT_URL?>img/logo/logo.png" alt=""></div>
            <div class="social">
              <figure> 
                  <a target="_blank" href="<?=$CONTACT['facebook']['info_link']?>">
                  <i class="fab fa-facebook-f"></i> Facebook</a> 
              </figure>
              <figure> 
                <a target="_blank" href="<?=$CONTACT['line_1']['info_link']?>">
                <i class="fab fa-line"></i> Line</a> 
              </figure>
              <figure> 
                <a target="_blank" href="<?=$CONTACT['twitter']['info_link']?>">
                <i class="fab fa-twitter"></i> Twitter</a> 
              </figure>
            </div>

            
          </div>

          <div class="send-email">
            <label>JOIN US!</label>
            <div class="input-box">
              <input type="email" class="form-component" placeholder="Email">
              <button class="form-component button-footer">Send</button>
            </div>
          </div>
        </div>

        <div class="copyright">
          <p>&copy;2020 by <a href="wynnsoft-solution.com">wynnsoft-solution</a></p>
        </div>
      </div>
    </footer>