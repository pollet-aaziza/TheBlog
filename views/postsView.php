<?php
include "template/header.php";
 ?>

 <div class="row mt-5">
    <section class="col-lg-9 t_center">
      <h2>Nos derniers articles</h2>
      <div class="container-fluide">
        <div class="row">
          <?php
            //we loop to retrieve all posts
            foreach ($posts as $key => $post) {
          ?>
          <article class="col-lg-6 my-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?php echo $post->getTitle() ?></h5>
                <p class="card-text"><?php echo $post->getPublication_date()?></p>
                <p class="card-text"><?php echo $post->getChapo()?></p>
              </div>
              <div class="card-body">
                <?php
                 echo "<a href='?target=post&id=". $post->getId() ."'>Voir détail</a>";
                 ?>
              </div>
            </div>
          </article>
          <?php
         //we close the loop            
        }
           ?>
        </div>
      </div>
    </section>
  </div>

 <?php
 include "template/footer.php";
  ?>
