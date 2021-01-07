<?php

/**
 * เป็นไฟล์ Route สำหรับ Ajax 
 * เพื่อที่จะ Route ไปหาไฟล์ ajax 
 * จะไม่ ajax แบบไฟล์ตรงๆ แต่จะใช้ Route เป็นตัวกำหนด
 */

Route::get('/api/', function () {
  global $App;
  $input = json_encode(file_get_contents("php://input"));
  
  #ตรวจสอบ http request header
  if (!WebSec::isHTTPRequestHeaders()) {
    echo json_encode([
      "message" => "HTTP_Header_Invalid", 
      "status_" => false
    ]);
    exit();
  }

  #ตรวจสอบ csrf
  $csrf = WebSec::getHTTPRequestHeaders("token-csrf-model", "csrf");
  if (!WebSec::verifyCSRF($_SESSION['token-csrf-model'], $csrf)) {
    echo json_encode([
      "message" => "Token_CSRF_model_Invalid",
      "status_" => false
    ]);
    exit();
  }
  
  $newCSRF = WebSec::generateCSRF("token-csrf-model");
  $brand = addslashes($_GET['brand']);
  $option = $App->fetchAll("SELECT VM.slug as vals,VM.model_name as title FROM vehicle_model as VM INNER JOIN vehicle_brand  as VB ON VB.id = VM.brand_id WHERE VB.slug =:slug ORDER BY VM.priority ASC ",[":slug" => $brand]);
  echo json_encode([
    "test" => $newCSRF,
    "newcsrf" => base64_encode($newCSRF),
    "status_" => true,
    "message" => "success",
    "model" => $option,
  ]);
  exit();
});
 
 
 