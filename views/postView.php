<?php
include "template/header.php";
 ?>
  <article class="col-lg-6 my-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $post->getTitle() ?></h5>
        <p class="card-text"><?php echo $post->getChapo() ?></p>
        <p class="card-text"><?php echo $post->getContent() ?></p>
        <p class="card-text"><?php echo $post->getAuthor()?></p>
        <p class="card-text"><?php echo $post->getPublication_date() ?></p>
        
      </div>
      </div>
  </article>  
  <?php
            //we loop to retrieve all posts
            foreach ($comments as $key => $comment) 
            {
          ?>
        <p class="card-text"><?php echo $comment->getContents() ?></p>
       <?php
            }
          
  require "template/footer.php";
  ?>     