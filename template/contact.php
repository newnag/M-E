
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <ul>
        <li><a href="<?=ROOT_URL?>">Home</a></li>
        <li><?=$contactUs->title?></li>
      </ul>
    </div>

    <!-- ส่วนหลัก -->
    <main>
      <div class="main-content contact">
        <div class="content">
          <div class="title">
            <span><?=$contactUs->title?></span>
          </div>

          <h1><?=$contactUs->topic?></h1>

          <div class="form">
            <div class="input-box">
              <label for="">Name</label>
              <input type="text" class="form-component">
            </div>

            <div class="input-box">
            <label for="">Email</label>
            <input type="email" class="form-component">
          </div>

          <div class="input-box">
            <label for="">Subject</label>
            <input type="text" class="form-component">
          </div>

          <div class="input-box">
            <label for="">Message</label>
            <textarea name="" id="" cols="30" rows="6" class="form-component"></textarea>
          </div>

          <div class="button"><button class="form-component button">Submit</button></div>
          </div>

          <p class="or">OR</p>

          <div class="social">
            <a  target="_blank" href="<?=$CONTACT['facebook']['info_link']?>"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a  target="_blank" href="<?=$CONTACT['line_1']['info_link']?>"><i class="fab fa-line"></i> Line</a>
            <a  target="_blank" href="<?=$CONTACT['twitter']['info_link']?>"><i class="fab fa-twitter"></i> Twitter</a>
          </div>
          <div class="map"> <?=$CONTACT['google_map']['info_link']?> </div>
        </div>
      </div>
    </main>