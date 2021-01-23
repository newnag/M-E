<!-- ส่วนของสไลด์ -->
<section>
      <div class="swiper-container home-slide">
        <div class="swiper-wrapper">
          <?php 
            foreach($ADS as $key =>$val){
              echo'<div class="swiper-slide">
                      <div class="blog-txt">
                        <h2>'.$val['h1'].'</h2>
                        <h2>'.$val['h2'].'</h2>
                        <p>'.$val['description'].'</p>
                        <div class="button"><a target="_blank" href="'.$val['ad_link'].'"><button class="form-component">Shop Now</button></a></div>
                        <div class="social">
                          <div class="face"><a target="_blank" href="'.$CONTACT['facebook']['info_link'].'"><i class="fab fa-facebook-f"> </i> '.$CONTACT['facebook']['info_value'].'</a></div>
                          <div class="line"><a target="_blank" href="'.$CONTACT['line_1']['info_link'].'"><i class="fab fa-line"> </i> '.$CONTACT['line_1']['info_value'].'</a></div>
                          <div class="twitter"><a target="_blank" href="'.$CONTACT['instagram']['info_link'].'"><i class="fab fa-instagram"> </i> '.$CONTACT['instagram']['info_value'].'</a></div>
                        </div>
                      </div>
                      <img src="'.ROOT_URL.$val['ad_image'].'" alt=""> 
                    </div>';
            }
          ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
</section>