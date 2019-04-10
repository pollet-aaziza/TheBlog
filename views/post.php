<?php
include "template/header.php";
 ?>
         
          <article class="col-lg-6 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $post->getTitle() ?></h5>
                <p class="card-text"><?php echo $post->getChapo() ?></p>
                <p class="card-text"><?php echo $post->getContents() ?></p>
                <p class="card-text"><?php echo $post->getAuthor() ?></p>
                <p class="card-text"><?php echo $post->getPublication_date() ?></p> 
                    
              </div>
              <div class="card-body">
                <?php
                 ?>
              </div>
            </div>
          </article> 
        </div>
      </div>
    </section>
  </div>

 <?php
 include "template/footer.php";
  ?>
