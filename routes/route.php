<?php 
/* 
 * เป็นไฟล์ Route สำหรับ Route ไปหาไฟล์ template ต่างๆ
 * Route แต่ละเส้นทางจะเหมือนกันกับ route.seo.php
 * 
 * $CSRF_NAME = WebSec::generateCSRF('token-csrf-name-action');
 *  
 */    
/** 
 * #############################################################
 * ################# ROUTE CATEGORY ############################
 * #############################################################
*/ 

#[*]=======================================
#[*]            หน้าแรก
#[*]======================================= 
Route::get(2, function () {
  global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS;
  echo $CSRF_Model = WebSec::generateCSRF('token-csrf-model');

  foreach($_GET as $key =>$ddd){
    $key = FILTER_VAR($key,FILTER_SANITIZE_STRING);
    $aa = FILTER_VAR($ddd,FILTER_SANITIZE_MAGIC_QUOTES);
    $param[$key] = $aa;
  }

  $getpost['tags'] = explode(" ",$param['tag']);
  $getpost['search'] = $param['search'];
  $HOME_PRODUCT = $App->getHomeProduct($getpost);
  $allTags = $App->getAllTags($getpost);
  require_once "template/home.php";
});


if(empty($posts)){
  #[*]=======================================
  #[*]            หน้า product
  #[*]=======================================
  Route::get(3, function () {
    global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS,$myCate; 
 
    $routeCount = count($Route);
    $slugLength = "level_".$routeCount;
    echo $CSRF_Model = WebSec::generateCSRF('token-csrf-product');

    $slugLength = (count($Route) > 4)? "level_4":"level_".$routeCount;
    $parent_id = $App->getLevelCateIDByURL($Route[$slugLength]);

    if(!empty($parent_id)){
      #ถ้าเป็นหน้าหมวดหมู่ 
      $brand = FILTER_VAR($_GET['brand'],FILTER_SANITIZE_MAGIC_QUOTES);
      if($parent_id->level == 3){

        foreach($BRAND_LIST as $key => $val){
          $BRAND_OPTIONS .='<option '.(($_GET['brand'] == $val['slug'])?"SELECTED":"").' value="'.$val['slug'].'">'.$val['name'].'</option>';
          $BRAND_SRC .=' <a href="'.ROOT_URL.'แบรนด์/'.$val['slug'].'"><div class="box"><img src="'.ROOT_URL.$val['thumbnail'].'" alt="'.$val['name'].'"></div></a> ';
          $BRAND_FOOTER .= ' <a href="'.ROOT_URL.$MAIN_CATE[2]['url']."/".$val['slug'].'"><li class=""><img src="'.ROOT_URL.$val['thumbnail'].'" alt="'.$val['name'].'"></li></a>';
        }  
        $products = $App->getProductByRoute($brand,$Route['level_4']);
        require_once "template/products/tertiary-cate.php";

      }else if($parent_id->level == 2){

        foreach($BRAND_LIST as $key => $val){
          $BRAND_OPTIONS .='<option '.(($_GET['brand'] == $val['slug'])?"SELECTED":"").' value="'.$val['slug'].'">'.$val['name'].'</option>';
          $BRAND_SRC .=' <a href="'.ROOT_URL.'แบรนด์/'.$val['slug'].'"><div class="box"><img src="'.ROOT_URL.$val['thumbnail'].'" alt="'.$val['name'].'"></div></a> ';
          $BRAND_FOOTER .= ' <a href="'.ROOT_URL.$MAIN_CATE[2]['url']."/".$val['slug'].'"><li class=""><img src="'.ROOT_URL.$val['thumbnail'].'" alt="'.$val['name'].'"></li></a>';
        } 
        $products = $App->getProductByRoute($brand,$Route['level_3']);
        $secoundCate = $App->getSecondaryCate($_GET['brand']); 
        $routeURL = $Route['level_1'].'/'.$Route['level_2'].'/'.$Route['level_3'].'/'; 

        require_once "template/products/secondary-cate.php";
      } elseif($parent_id->level == 1){
        require_once "template/products/primary-cate.php";
      } else { 
        require_once "template/products/category.php";
      }

    } else{
     
      #ถ้าไม่พบอะไรเลย
      require_once "template/error.php";
    }
  }); 
} else {
  global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS,$myCate; 

  $images = $App->getMoreImageByPostURL($posts->id);
  $tags = $App->getTagsByID($posts->tag);
  

  #ถ้าเป็นหน้ารายละเอียด
  require_once "template/products/a-detail.php";

}


Route::get(4, function () {
  global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS;

  require_once "template/products/brand.php";
});


Route::get(6, function () {
  global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS;

  require_once "template/download.php";

});



Route::get(7, function () {
  global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS;

  require_once "template/aboutus.php";

});




Route::get(8, function () {
  global $App,$MAIN_CATE,$SERVER_URI,$CATEGORY,$NAV_TOP,$HEAD,$SCRIPT_PAGE,$CONTENT,$BRAND_LIST,$cateID,$Route,$WEBINFO,$CONTACT,$NAV_LEFT,$ADS;

  require_once "template/contact.php";

});




 

  
#[*]=======================================
#[*]            อื่นๆ
#[*]=======================================
// Route::get('other', function () {
//    echo "ERROR404 PAGE NOT FOUND";
// });


      