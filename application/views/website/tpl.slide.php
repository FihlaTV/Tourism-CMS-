<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
      <!-- SLIDE  -->
      
      <?php foreach($slide as $index=>$value){?>
      
      <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="<??>"> 
        <!-- MAIN IMAGE --> 
        <img src="<?php echo base_url()?>thumbnail/<?php echo $value->thumbnail; ?>/1400x850" alt="slidebg1" data-lazyload="<?php echo base_url()?>thumbnail/<?php echo $value->thumbnail; ?>/1400x850" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 

        <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $value->widget_title;?></div>

        <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
          <div style="color:#ffffff; font-size:16px; text-transform:uppercase"> <?php echo $value->widget_description;?></div>
        </div>
      </li>
      
     <?php
			}
		 ?> 

    </ul>
    <div class="tp-bannertimer tp-bottom"></div>
  </div>
</div>
<!-- End Slider --> 
<!--
<pre>
<?php print_r($slide);?>
</pre>
-->