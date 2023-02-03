<?php

// Load values & assign defaults.
$banner_text = get_field('banner_text');
$banner_image_uri = get_field('banner_image');
?>

<div id="pp-block-banner" class="pp-block-banner" style="background-image: url(<?php echo $banner_image_uri; ?>)">
  <h2><?php echo $banner_text; ?></h2>
</div>
<div class="pp-block-banner-buffer"></div>