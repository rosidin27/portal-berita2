<?php
  $header = getHeader("data");
  $qField = getHeader("field");
  $arr_btn = array(array());
  $field = array_keys($qField->fetch(PDO::FETCH_ASSOC));

  if(isAdmin()){
    for($i = 1; $i < count($field); $i++){
      if($field[$i]=="header_a1"){
        $m = "?data=profil&aksi=edit";
      }elseif($field[$i]=="header_d1"){
        $m = "?data=galeri";
      }elseif($field[$i]=="header_e1"){
        $m = "?data=berita";
      }
      $arr_btn[$i][0] = '<div id="loading_'.$field[$i].'"></div>';
      $arr_btn[$i][1] = '<button class="edit" onclick="header(\''.$field[$i].'\',\'menu_a\',\''.$GLOBALS['BASE_URL'].'\');"><i class="icon-pencil"></i></button>';
      $arr_btn[$i][2] = '<a href="'.$GLOBALS['BASE_URL'].'/admin/'.$m.'"><button class="edit"><i class="icon-pencil"></i></button></a>';
    }
  }else{
    for($i = 1; $i < count($field); $i++){
      $arr_btn[$i][0] = "";
      $arr_btn[$i][1] = "";
      $arr_btn[$i][2] = "";
    }
  }

  $profil = getProfil();
  if(strlen($profil['detail_profil']) > 1100){
    $des_profil = substr($profil['detail_profil'], 0,1300)."...<a href='".$GLOBALS['BASE_URL']."/profil'>[Selengkapnya]</a>"; 
  }else{
    $des_profil = $profil['detail_profil'];
  }
?>

<div class="container marg75" id="profil">
  <div class="row">
    <div class="col-lg-12">
      <div class="dankovteam-shortcode-promo-block">
        <div class="promo-block">
          <center><?= $arr_btn[1][0] ?></center>
          <div id="<?= $field[1] ?>" class="promo-text" ><?= $arr_btn[1][1] ?><?= $header['header_a1'] ?></div>
          <div class="center-line"></div>
        </div>
        <?= $arr_btn[2][0] ?>
        <div id="<?= $field[2] ?>" class="promo-paragraph"><?= $arr_btn[2][1] ?><?= $header['header_a2'] ?></div>
      </div>
    </div>
  </div>
    <div class="row marg50">
      <div class="col-lg-6">
        <div>
          <img src="<?php echo "$GLOBALS[BASE_URL]/img/profil/".$profil['foto_profil']; ?>">
        </div>
      </div> 
      <div class="col-lg-6">
        <?= $arr_btn[3][0] ?>
        <h2 style="color: #444444;text-align: left;font-family:Roboto Slab;font-weight:300;font-style:normal"><div id="<?= $field[3] ?>" class="about-us-h2"><?= $arr_btn[3][1] ?><?= $header['header_a3'] ?></div></h2>
        <p><?php echo $des_profil.$arr_btn[1][2]; ?></p>
    </div> 
  </div> 
</div> 
<div class="container-color marg75" id="visi">
  <div class="container marg75" style="margin-top: 0px;">
    <div class="row">
      <div class="col-lg-12">
        <div class="dankovteam-shortcode-promo-block">
          <div class="promo-block">
            <center><?= $arr_btn[4][0] ?></center>
            <div class="promo-text" id="<?= $field[4] ?>"><?= $arr_btn[4][1] ?><?= $header['header_b1'] ?></div>
            <div class="center-line"></div>
          </div>
          <?= $arr_btn[5][0] ?>
          <div class="promo-paragraph" id="<?= $field[5] ?>"><?= $arr_btn[5][1] ?><?= $header['header_b2'] ?></div>
        </div>
      </div>
    </div>
    <div class="row marg50">
      <div class="col-lg-6">
        <?= $arr_btn[6][0] ?>
        <h2 style="color: #444444;text-align: left;font-family:Roboto Slab;font-weight:300;font-style:normal"><div class="about-us-h2" id="<?= $field[6] ?>"><?= $arr_btn[6][1] ?><?= $header['header_b3'] ?></div></h2>
        <p><?php echo $profil['visi'].$arr_btn[6][2]; ?></p>
      </div> 
      <div class="col-lg-6">
        <div>
          <img src="<?php echo "$GLOBALS[BASE_URL]/img/profil/".$profil['foto_visi']; ?>">
        </div>
      </div> 
    </div> 
  </div>
</div>
<div class="container marg75" id="misi">
  <div class="row">
    <div class="col-lg-12">
      <div class="dankovteam-shortcode-promo-block">
        <div class="promo-block">
          <center><?= $arr_btn[7][0] ?></center>
          <div class="promo-text" id="<?= $field[7] ?>"><?= $arr_btn[7][1] ?><?= $header['header_c1'] ?></div>
          <div class="center-line"></div>
        </div>
        <?= $arr_btn[8][0] ?>
        <div class="promo-paragraph" id="<?= $field[8] ?>"><?= $arr_btn[8][1] ?><?= $header['header_c2'] ?></div>
      </div>
    </div>
  </div>
    <div class="row marg50">
      <div class="col-lg-6">
        <div>
          <img src="<?php echo "$GLOBALS[BASE_URL]/img/profil/".$profil['foto_misi']; ?>">
        </div>
      </div> 
      <div class="col-lg-6">
        <?= $arr_btn[9][0] ?>
        <h2 style="color: #444444;text-align: left;font-family:Roboto Slab;font-weight:300;font-style:normal"><div class="about-us-h2" id="<?= $field[9] ?>"><?= $arr_btn[9][1] ?><?= $header['header_c3'] ?></div></h2>
        <p><?php echo $profil['misi'].$arr_btn[9][2]; ?></p>
    </div> 
  </div> 
</div> 
<?php
  function getProfil(){
    $sql_profil = "SELECT *FROM profil ORDER BY id_profil DESC LIMIT 1";
    $profil = PdoSelect($sql_profil);

    return $profil;
  }

  function getHeader($req){
    $sql = "SELECT *FROM menu_a ORDER BY id DESC";
    if($req == "data"){
      $data = PdoSelect($sql);
    }elseif($req == "field"){
      $data = PdoQuery($sql);
    }
    return $data;
  }
?>