<?php 
    $per_hal = 5;
    $page = 1;
    if(isset($halaman)){
        $page = filter((int)$halaman);   
    }
    $start = ($page * $per_hal) - ($per_hal);
    if($start < 0){
        $start = 0;
    }
    $hingga = ($start + ($per_hal));

    if(isset($id_kategori)){
        $kategori = "AND b.id_kategori = '".filter($id_kategori)."'";
    }else{
        $kategori = "";
    }
    $sql = "SELECT 
                a.id_berita,
                a.id_kategori, 
                a.judul, 
                b.kategori, 
                a.keyword, 
                a.isi, 
                a.gambar, 
                a.username, 
                a.tanggal 
            FROM berita a, kategori b 
            WHERE a.id_kategori = b.id_kategori ".$kategori."
            ORDER BY id_berita 
            DESC LIMIT ".$per_hal." OFFSET ".$start."";
    $jmlData = JumlahData("SELECT 
                a.id_berita,
                a.id_kategori, 
                a.judul, 
                b.kategori, 
                a.keyword, 
                a.isi, 
                a.gambar, 
                a.username, 
                a.tanggal 
            FROM berita a, kategori b 
            WHERE a.id_kategori = b.id_kategori ".$kategori."
            ORDER BY id_berita 
            DESC");
    $cek = JumlahData($sql);
    $list = PdoQuery($sql);
    $jml_hal = ceil($jmlData / $per_hal);
    if($cek <= 0){
        echo "<script>alert('Not Found !'); window.location='$GLOBALS[BASE_URL]/berita'</script>";
        exit();
    }

    $query = $list; 
    $berita = array();
    $i = 0;
    while($data = $query->fetch(PDO::FETCH_ASSOC)){
        if(strlen($data['isi']) > 200){
            $berita[$i]['isi'] = substr($data['isi'], 0, 235)."<strong>...</strong>";
        }else{
            $berita[$i]['isi'] = $data['isi']."...";
        }
        $string = strtolower(str_replace(" ", "-", $data['judul']));
        $berita[$i]['id'] = $string."-".$data['id_berita'];
        $berita[$i]['judul'] = $data['judul'];
        $berita[$i]['username'] = $data['username'];
        $berita[$i]['tanggal'] = $data['tanggal'];
        $berita[$i]['gambar'] = $data['gambar'];
        $i++;
    }
    if($i > 0){
        $bg = "<?= $BASE_URL ?>/img/berita/".$berita[0]['gambar'];
    }else{
        $bg = "<?= $BASE_URL ?>/assets/images/desert.jpg";
    }
?>
<div class="container marg75" style="margin-top: 3%">
  <div class="row">
    <div class="col-lg-9">
      <div class="row">
        <?php for($i=0; $i<count($berita); $i++){ ?>
        <div class="medium-blog">
          <div class="col-lg-5">
            <div class="cl-blog-img"><img class="fit-view" src="<?php echo "$BASE_URL/img/berita/".$berita[$i]['gambar'];?>" alt="" ></div>
          </div>
          <div class="col-lg-7">
            <div class="med-blog-naz">
              <div class="cl-blog-name" style="padding-left: 0px;"><a href="<?php echo $GLOBALS['BASE_URL']."/berita/".$berita[$i]['id']; ?>"><?php echo $berita[$i]['judul']; ?></a></div>
              <div class="cl-blog-detail" style="margin-left: 0px;">Posted by <?php echo $berita[$i]['username']." ".$berita[$i]['tanggal']?></div>
              <div class="cl-blog-text" style="margin-left: 0px; width: 100%"><?php echo $berita[$i]['isi']; ?></div>
            </div>
            <div class="cl-blog-read" style="margin-left: 0px;"><a href="<?php echo $GLOBALS['BASE_URL']."/berita/".$berita[$i]['id']; ?>">Read More</a></div>
          </div>
          <div class="cl-blog-line"></div>
        </div>
        <?php } ?>
      </div>
        <?php 
        if(isset($halaman)){
            $hal = $halaman;
            if($halaman > 1){
               $prev = $halaman-1;
            }else{
                $prev = 1;
            }
            $next = $halaman+1;
        }else{
            $hal = 1;
            $next = 2;
            $prev = 1;
        }
        ?>
      <div class="row">
        <div class="col-lg-12">
          <div class="pride_pg">
                <?php if(isset($halaman) && $hal <= $jml_hal && $halaman > 1){ ?>
                <a class="" style="float: left;" href="<?php echo $GLOBALS['BASE_URL'] ?>/berita"<?php if(isset($_GET['kategori'])){echo "&kategori=".$_GET['kategori']; } ?>/halaman/<?php echo $prev; ?>">Sebelumnya</a> 
                <?php } ?>
                <?php if((isset($halaman) && $jml_hal > $hal) || ($jml_hal > $hal && !isset($halaman))){ ?>
                <a class="" style="float: right;" href="<?php echo $GLOBALS['BASE_URL'] ?>/berita<?php if(isset($_GET['kategori'])){echo "&kategori=".$_GET['kategori']; } ?>/halaman/<?php echo $next; ?>">Selanjutnya</a>
                <?php } ?>
          </div>
        </div>
      </div>
    </div> 
    <?php include "nav-berita.php"; ?>         
  </div>
</div>
