<div class="news-carousel__item-row">
 <div class="news-carousel__item-text">

   <?php if (!empty($title)): ?>
     <h2 class="news-carousel__item-title">
       <div class="ornament ornament--white"></div>
       <?php print $title; ?>
     </h2>
   <?php endif; ?>

   <?php if (!empty($description)): ?>
     <p><?php print $description; ?></p>
   <?php endif; ?>

   <?php if (!empty($footer_left) || !empty($footer_right)): ?>
     <div class="row">
       <?php if (!empty($footer_left)): ?>
         <small class="col-xs-6"><?php print $footer_left; ?></small>
       <?php endif; ?>
       <?php if (!empty($footer_right)): ?>
         <small class="col-xs-6 text-right"><?php print $footer_right; ?></small>
       <?php endif; ?>
     </div>
   <?php endif; ?>

   <?php if (!empty($post_footer)): ?>
     <p class="text-right"><?php print $post_footer; ?></p>
   <?php endif; ?>

 </div>

 <?php if (!empty($media)): ?>
   <div class="news-carousel__item-media">
     <?php print $media; ?>
   </div>
 <?php endif; ?>

</div>
