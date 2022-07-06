<?php
?>

<div id="welcome" class="wrapper">
  <div class="wrapper-container">
    <div class="welcome-image">
      <?php
        if (have_rows('welcome_images')):
          while (have_rows('welcome_images')): the_row();
            $row = get_row(true);
            $image_1 = $row['image_1'];
            ?>
            <div class="banner-img" style="background-image: url(<?php echo $image_1; ?>);"></div>
            <?php
          endwhile;
        endif;
      ?>

    </div> 
    <div class="content-container">
      <div class="content">
        <div class="title">
          <span class="welcome-to">
            Welcome to
          </span>
          <span class="dealership-name">
            <?php bloginfo( 'name' ); ?>
          </span>
        </div> <!-- title -->
        <p class="para">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad aspernatur obcaecati odio vel voluptatibus fugiat soluta recusandae possimus libero quam! Hic, quae quas. Ipsum magnam cum, quae odio velit praesentium.
          Minus, pariatur? Rerum fugiat veritatis fuga pariatur ducimus dolorem, neque quo quod officia quae!
        </p>
        <p class="para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, voluptas possimus dolorem ut unde tempora rem, quae architecto tempore vel cumque eligendi blanditiis iste! Non laborum inventore fugit distinctio maiores?
        Nemo debitis, inventore nisi mollitia aliquam qui accusamus blanditiis sequi.</p>
        <p class="para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore, voluptas possimus dolorem ut unde tempora rem, quae architecto tempore vel cumque eligendi blanditiis iste! Non laborum inventore fugit distinctio maiores?
        Nemo debitis, inventore nisi mollitia aliquam qui accusamus blanditiis sequi. Rerum fugiat veritatis fuga pariatur ducimus dolorem.</p>
      </div> 
      <aside>
        <?php
          if (have_rows('welcome_images')):
            while (have_rows('welcome_images')): the_row();
              $row = get_row(true);
              $image_2 = $row['image_2'];
              $image_3 = $row['image_3'];
              ?>
              <div class="img img_2" style="background-image: url(<?php echo $image_2; ?>);"></div>
              <div class="img img_3" style="background-image: url(<?php echo $image_3; ?>);"></div>
              <?php
            endwhile;
          endif;
        ?>
      </aside> 
    </div>  
    <div class="button-container">
      <div class="button">
        <a href="/">Learn More</a>
      </div>
    </div>  
  </div> 
</div>