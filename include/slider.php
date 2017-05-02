<?php $tmpSilder = getSlider("result") ?>
<div class="tp-banner-container" style="height:600px;">
  <div class="tp-banner">
    <ul style="display:none;">
      <?php $j = JumlahData(getSlider("query")); $i=0; 
      while($slider = $tmpSilder->fetch(PDO::FETCH_ASSOC)){ ?> 
      <li data-transition="random-static" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="<?php echo "$GLOBALS[BASE_URL]/img/galeri/".$slider['foto']; ?>"  alt="slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
        <div style="background-color: #000;
          bottom: 0;
          left: 0;
          opacity: 0.5;
          position: absolute;
          right: 0;
          top: 0;
          z-index: 1;">
        </div>
        <div class="tp-caption mediumlightwhitecustom lft tp-resizeme" 
          data-x="292" 
          data-y="280"  
          data-speed="500" 
          data-start="800" 
          data-easing="Back.easeOut" 
          data-splitin="none" 
          data-splitout="none" 
          data-elementdelay="0.1" 
          data-endelementdelay="0.1" 
           data-endspeed="500" 
          data-endeasing="Power4.easeIn" 
          style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
          <?php echo $slider['keterangan']; ?>
        </div>
        <div class="tp-caption lfb tp-resizeme" 
          data-x="508" 
          data-y="400"  
          data-speed="500" 
          data-start="1300" 
          data-easing="Back.easeOut" 
          data-splitin="none" 
          data-splitout="none" 
          data-elementdelay="0.1" 
          data-endelementdelay="0.1" 
          data-endspeed="500" 
          data-endeasing="Power4.easeIn" 

          style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a class="largebutton" href="#profil">Selengkapnya</a> 
        </div>
        </li>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
<script type="text/javascript">
  var revapi;
  jQuery(document).ready(function() {
       revapi = jQuery('.tp-banner').revolution({
      delay:9000,
      startwidth:1140,
      startheight:600,
      hideThumbs:200,

      thumbWidth:100,
      thumbHeight:50,
      thumbAmount:2,
      
                  
      simplifyAll:"off",

      navigationType:"bullet",
      navigationArrows:"solo",
      navigationStyle:"round",

      touchenabled:"on",
      onHoverStop:"on",
      nextSlideOnWindowFocus:"off",

      swipe_threshold: 0.7,
      swipe_min_touches: 1,
      drag_block_vertical: false,

      keyboardNavigation:"off",

      navigationHAlign:"center",
      navigationVAlign:"bottom",
      navigationHOffset:0,
      navigationVOffset:20,

      soloArrowLeftHalign:"left",
      soloArrowLeftValign:"center",
      soloArrowLeftHOffset:20,
      soloArrowLeftVOffset:0,

      soloArrowRightHalign:"right",
      soloArrowRightValign:"center",
      soloArrowRightHOffset:20,
      soloArrowRightVOffset:0,

      shadow:0,
      fullWidth:"on",
      fullScreen:"off",

      spinner:"spinner3",
                  
      stopLoop:"off",
      stopAfterLoops:-1,
      stopAtSlide:-1,

      shuffle:"off",

      autoHeight:"off",
      forceFullWidth:"on",
      
      
      hideTimerBar:"on",
      hideThumbsOnMobile:"off",
      hideNavDelayOnMobile:1500,
      hideBulletsOnMobile:"on",
      hideArrowsOnMobile:"on",
      hideThumbsUnderResolution:0,

      hideSliderAtLimit:0,
      hideCaptionAtLimit:0,
      hideAllCaptionAtLilmit:0,
      startWithSlide:0
      });
  }); //ready
</script>
<?php
    function getSlider($type){
        $sql_slider = "SELECT foto, keterangan FROM galeri WHERE slider = '1' ORDER BY id_galeri DESC LIMIT 5";
        $slider = PdoQuery($sql_slider);
        if($type == "result"){
            return $slider;
        }elseif($type == "query"){
            return $sql_slider;
        }
    }
?>