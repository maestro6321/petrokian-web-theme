<section class="about-top container cert">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
          for ($x = 1; $x <= 7; $x++) {
            $img=imagecreatefromjpeg(get_template_directory_uri()."/images/cr/$x.jpg");
            imagejpeg($img, "Image$x.jpg", 0);
            ?>
            <div class="col">
          <div class="card shadow-sm">
            <img src="Image<?php echo $x ?>.jpg" class="bd-placeholder-img card-img-top" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="Image<?php echo $x ?>.jpg" target=”_blank”>View</a></button>
                </div>
              </div>
            </div>
          </div>
        </div><?php
          }
        ?>

      </div>
      </section>