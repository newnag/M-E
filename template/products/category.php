    <!-- ส่วนหลัก -->
    <main>
      <div class="main-content product">
        <div class="content product">
          <div class="title">
            <span>Product</span>
          </div>

          <div class="grid-product"> 
            <?php 
              foreach($myCate as $key =>$val){  
                echo'  <div class="list">   <label for="">'.$val['cate_name'].'</label> <ul> ';
                if(!empty($val['child'])){
                  foreach($val['child'] as $aa =>$bb){  
                    echo' <li><div class="circle"></div><a href="'.$val['main_cate'].'/'.$val['url'].'/'.$bb['url'].'">'.$bb['cate_name'].'</a></li> ';  
                  } 
                } 
                echo'</ul> </div>'; 
              } 
            ?>
          </div>
        </div>
      </div>
    </main>