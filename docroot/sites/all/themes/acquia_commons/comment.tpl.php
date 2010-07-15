<?php
// $Id: comment.tpl.php 7710 2010-07-15 20:37:04Z sheena $
?>

<div class="comment <?php print $comment_classes;?> clear-block">
<div class="comment-info">  
 <?php if ($comment->new): ?>
  <a id="new"></a>
  <span class="new"><?php print $new ?></span>
  <?php endif; ?>
  <?php if (!$comment->picture):
  $comment->picture =  variable_get('user_picture_default', '');
  endif;
$picture = theme_imagecache('user_picture_meta', $comment->picture, $name, $name);
  print('<a href="'.$BASE_URL.'/user/'.$comment->uid.'" >'.$picture.'</a>');
 ?>
    <div class="submitted">
    <?php print $submitted ?>
  </div>
  
    <?php if ($links): ?>
  <div class="links">
    <?php print $links ?>
  </div>
  <?php endif; ?>
  </div>
 <div class="comment-content">
  
  <h3 class="title"><?php print $title ?></h3>

  
  <div class="content">
    <?php print $content ?>
    
    <?php if ($signature): ?>
    <div class="signature">
      <?php print $signature ?>
    </div>
    <?php endif; ?>
  </div>
  </div>

  
</div><!-- /comment -->