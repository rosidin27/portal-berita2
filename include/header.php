<?php 
  $judul = "";
  $web = getCustom();
  if(isset($level[0])){
    if($level[0]=="berita"){
      if(isset($level[1])){
        $meta = getMeta(str_replace("-","",strrchr($level[1], "-")));
        $cek = 1;
        $judul = $meta['judul']." | ";
      }else{
        $judul = "Berita | ";
      }
    }elseif($level[0]=="profil"){
      $cek = 2;
      $judul = "Profil | ";
    }else{
      $cek = 0;
    }
  }else{
    $cek = 0;
  }
  

  function getMeta($id){
    $meta = PdoSelect("SELECT *FROM berita WHERE id_berita='".$id."'");
    return $meta;
  }

  function getCustom(){
    $sql = "SELECT *FROM deskripsi_web ORDER BY id_deskripsi DESC LIMIT 1";
    $data = PdoSelect($sql);
    return $data;
  }
?>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title><?php echo $judul.$web['judul_web']; ?></title>
<meta name="generator" content="<?php if($cek==1)echo $meta['judul']; ?>">
<meta name="description" content="<?php if($cek==1)echo $meta['judul']; else echo $web['judul_web']; ?>">
<meta name="keyword" content="<?php if($cek==1)echo $meta['keyword']; else echo $web['judul_web']; ?>">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>

<link href="<?= $GLOBALS['BASE_URL'] ?>/assets/images/favicon.ico" rel="shortcut icon"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $GLOBALS['BASE_URL'] ?>/assets/images/apple-touch-icon-144x144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $GLOBALS['BASE_URL'] ?>/assets/images/apple-touch-icon-114x114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $GLOBALS['BASE_URL'] ?>/assets/images/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="<?= $GLOBALS['BASE_URL'] ?>/assets/images/apple-touch-icon-precomposed.png" />
<!-- JS FILES -->
<script type="text/javascript" src="<?= $GLOBALS['BASE_URL'] ?>/assets/js/jquery-1.20.2.min.js"></script>
<script type="text/javascript" src="<?= $GLOBALS['BASE_URL'] ?>/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?= $GLOBALS['BASE_URL'] ?>/assets/js/modernizr.custom.js"></script>
<!-- CSS FILES -->
<link href="<?= $GLOBALS['BASE_URL'] ?>/assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?= $GLOBALS['BASE_URL'] ?>/assets/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?= $GLOBALS['BASE_URL'] ?>/assets/css/cubeportfolio-3.min.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?= $GLOBALS['BASE_URL'] ?>/assets/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="<?= $GLOBALS['BASE_URL'] ?>/assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
<style type="text/css">
.fit-view{
  width: 100%;
  min-height: 220px;
  height: auto;
  object-fit: cover;
  background-position: center center;
  background-repeat: no-repeat;
  overflow: hidden;
}

.edit{
  background: transparent;
  border: none;
  color: red;
}
</style>
