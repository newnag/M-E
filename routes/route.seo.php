<?php 
/**
 * เป็นไฟล์ Route สำหรับ SEO และเป็นเหมือน middleware
 * จะทำการตรวจสอบว่า Route ไปเส้นทางไหน 
 * ดึงข้อมูล จาก table category , post เพื่อมาใส่ข้อมูลใน head html 
 * Route แต่ละเส้นทางจะเหมือนกันกับ route.php
 */

global $App,$posts;

if(empty($cateID) && empty($posts) && $Route['level_1'] != "api" ){
  header("HTTP/1.1 404 Not Found"); 
  include 'template/error.php';
  exit();
}


#[*]=======================================
#[*]            หน้าแรก
#[*]=======================================
Route::get($cateID,function(){
  global $App,$CATEGORY;
  $DataSEO = $App->getCategoryFieldByCateID(3,"title,description,keyword,thumbnail,url");
  $CATEGORY = $DataSEO;
  $App->setHeaderSEO([ 
    "title"       => $DataSEO->title,
    "description" => $DataSEO->description,
    "keyword"     => $DataSEO->keyword,
    "thumbnail"   => $DataSEO->thumbnail,
    "url"         => $DataSEO->url,
  ]);
});

// Route::get(2,function(){
//   global $App;
//   #ติดตั้ง CSS Requirements
//   $App->setHeaderCss([ ]);
//   #ติดตั้ง Script Requirements
//   $App->setFooterScript([ ]); 
// }); 
#ถ้าไม่ใช่หน้ารายละเอียดสินค้า
if(empty($posts)){

  Route::get(3,function(){
    global $App;
    #ติดตั้ง CSS Requirements
    $App->setHeaderCss([
      '<link rel="stylesheet" href="'.ROOT_URL.'css/category.min.css?v=1.1.'.date("Ymds").'">'
    ]);
    #ติดตั้ง Script Requirements
    $App->setFooterScript([ 
      '<script src="'.ROOT_URL.'js/product.js?v=1.1.11'.time().'"></script>'
    ]); 
  });
  Route::get(4,function(){
    global $App;
    #ติดตั้ง CSS Requirements
    $App->setHeaderCss([
      '<link rel="stylesheet" href="'.ROOT_URL.'css/category.min.css?v=1.1">'
    ]);
    #ติดตั้ง Script Requirements
    // $App->setFooterScript([ 
    // ]); 
  });
  
  Route::get(6,function(){
    global $App;
    #ติดตั้ง CSS Requirements
    $App->setHeaderCss([
      '<link rel="stylesheet" href="'.ROOT_URL.'css/download.min.css?v=1.1">'
    ]);
    #ติดตั้ง Script Requirements
    // $App->setFooterScript([ 
    // ]); 
  }); 

  
  Route::get(7,function(){
    global $App;
    #ติดตั้ง CSS Requirements
    $App->setHeaderCss([
      '<link rel="stylesheet" href="'.ROOT_URL.'css/about.min.css?v=1.1">'
    ]);
    #ติดตั้ง Script Requirements
    // $App->setFooterScript([ 
    // ]); 
  }); 

  
  Route::get(8,function(){
    global $App;
    #ติดตั้ง CSS Requirements
    $App->setHeaderCss([
      '<link rel="stylesheet" href="'.ROOT_URL.'css/contact.min.css?v=1.1">'
    ]);
    #ติดตั้ง Script Requirements
    // $App->setFooterScript([ 
    // ]); 
  }); 




} else {
    #รายละเอียดสินค้า
    #ติดตั้ง CSS Requirements
    $App->setHeaderCss([
      '<link rel="stylesheet" href="'.ROOT_URL.'css/product.min.css?v=1.1.2">'
    ]);
    #ติดตั้ง Script Requirements
    $App->setFooterScript([ 
      '<script src="'.ROOT_URL.'js/product.js?v=1.1.11'.time().'"></script>'
    ]); 
}