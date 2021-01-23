 <!-- breadcrumb -->
 <div class="breadcrumb">
      <ul>
        <li><a href="<?=ROOT_URL?>">Home</a></li>
        <li>Download</li>
      </ul>
    </div>

    <!-- ส่วนหลัก -->
    <main>
      <div class="main-content download">
        <div class="content">
          <div class="title">
            <span>DOWNLOAD</span>
          </div>

          <div class="grid-download">
            <?php
               $cate_arr = array();
               foreach($manualFiles as $key =>$val){  
                 if(!isset($cate_arr["cate_".$val['c_id']])) {
                   if($cate_arr["cate_".$val['c_id']] != $val['cate_name'] && $key != 0)  echo"</div></div>";
                      echo '<div class="box">
                              <h2>'.$val['cate_name'].'</h2>
                              <div class="box-list">';
                      $cate_arr["cate_".$val['c_id']] = $val['cate_name'];
                  }
                  echo '<div class="list">
                          <a target="_blank" href="'.ROOT_URL.$val['file_upload'].'">
                            <figure><img src="'.ROOT_URL.$val['thumbnail'].'" alt="'.$val['slug'].'"></figure>
                            <p>'.$val['file_title'].'</p>
                          </a>
                        </div>  ';
                }
            ?>
            
         
          </div>
        </div>
      </div>
    </main>