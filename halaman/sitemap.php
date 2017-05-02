<?php
	$kategori = getKategori();
?>
<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="promo-block" style="margin-top: 50px;">
			<div class="promo-text">Peta Situs</div>
			<div class="center-line"></div>
		</div>
		<div class="marg50">
			<div class="ac-container">
				<div>
					<input id="ac-1" name="accordion-2" type="checkbox" />
					<label for="ac-1" style="font-size: 20px;">Perusahaan</label>
					<article class="ac-medium">
						<ul class="blog-category" style="padding-left: 35px;">
							<li><i class="fa fa-angle-right"></i> <a href="<?= $GLOBALS['BASE_URL']?>/home">Beranda</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="<?= $GLOBALS['BASE_URL']?>/profil">Profil</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="<?= $GLOBALS['BASE_URL']?>/home#visi">Visi</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="<?= $GLOBALS['BASE_URL']?>/home#misi">Misi</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="<?= $GLOBALS['BASE_URL']?>/home#kontak">Kontak</a></li>
						</ul>
					</article>
				</div>
				<div style="height: auto">
					<input id="ac-2" name="accordion-2" type="checkbox" />
					<label for="ac-2" style="font-size: 20px;">Kategori Berita</label>
					<article class="ac-small" style=" overflow:scroll;">
						<ul class="blog-category" style="padding-left: 35px;">
						<?php while($kat = $kategori->fetch(PDO::FETCH_ASSOC)){ ?>
							<li><i class="fa fa-angle-right"></i> 
								<a href="<?= $GLOBALS['BASE_URL']?>/berita/kategori/<?= $kat['id_kategori'] ?>"><?= $kat['kategori'] ?></a>
							</li>
						<?php } ?>
						</ul>
					</article>
				</div>
				<?php 
				$kategori = getKategori();
				$i = 1;
				while($ktgr = $kategori->fetch(PDO::FETCH_ASSOC)){ 
					$berita = getBerita($ktgr['id_kategori']);
				?>
				<div>
					<input id="ac-kat<?= $i ?>" name="accordion-2" type="checkbox" />
					<label for="ac-kat<?= $i ?>" style="font-size: 20px;">Berita <?= $ktgr['kategori'] ?></label>
					<article class="ac-large" style=" overflow:scroll;">
						<ul class="blog-category" style="padding-left: 35px;">
							<?php while($brt = $berita->fetch(PDO::FETCH_ASSOC)){ 
								$judul = str_replace(" ", "-", $brt['judul'])."-".$brt['id_berita'];
								?>
								<li><i class="fa fa-angle-right"></i> 
									<a href="<?= $GLOBALS['BASE_URL'] ?>/berita/<?= $judul ?>"><?= $brt['judul'] ?></a>
								</li>
							<?php } ?>
						</ul>
					</article>
				</div>
				<?php $i++; } ?>
			</div>
		</div>
	</div>
</div>

<?php 
	function getBerita($id){
		$sql = "SELECT *FROM berita, kategori WHERE berita.id_kategori = kategori.id_kategori AND kategori.id_kategori = '".$id."' ORDER BY berita.id_berita DESC";
		$query = PdoQuery($sql);
		//echo "<script>alert('$sql')</script>";
		return $query;
	}

?>
