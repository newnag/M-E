
<!-- ส่วนหัว -->
<header>
      <div class="header">
        <div class="logo"><a href=""><img src="./img/logo/logo.png" alt=""></a></div>
        <nav>
          <ul class="head-menu">
          
            <?=$NAV_TOP?>
            <li><i class="fas fa-search" onclick="searchbox()"></i></li>
            <!-- ไอค่อนสำหรับปิดเมนู -->
            <li class="icon-close"><i class="fas fa-times" onclick="close_headMenu()"></i></li>
          </ul>
        </nav>
        <div class="burger"><i class="fas fa-bars" onclick="head_menu()"></i></div>
      </div>
      <div class="search-box">
        <div class="input-box">
          <input type="text" id="inputSearch" class="form-component">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </header>