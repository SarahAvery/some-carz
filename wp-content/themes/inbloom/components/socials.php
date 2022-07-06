<div class="social-container">
  <ul>
  <?php
    if (have_rows('socials')):
      while (have_rows('socials')): the_row();
        $row = get_row(true);
        $facebook = $row['facebook'];
        $facebook_icon = $row['facebook_icon'];
        $twitter = $row['twitter'];
        $twitter_icon = $row['twitter_icon'];
        $instagram = $row['instagram'];
        $instagram_icon = $row['instagram_icon'];
        $youtube = $row['youtube'];
        $youtube_icon = $row['youtube_icon'];
        ?>
        <li class="social facebook">
          <a href="<?php $facebook; ?>">
            <div class="icon" style="background-image: url(<?php echo $facebook_icon; ?>);"></div> 
          </a>
        </li>
        <li class="social twitter">
          <a href="<?php $twitter; ?>">
            <div class="icon" style="background-image: url(<?php echo $twitter_icon; ?>);"></div> 
          </a>
        </li>
        <li class="social instagram">
          <a href="<?php $instagram; ?>">
            <div class="icon" style="background-image: url(<?php echo $instagram_icon; ?>);"></div> 
        </a>
        </li>
        <li class="social youtube">
          <a href="<?php $youtube; ?>">
            <div class="icon" style="background-image: url(<?php echo $youtube_icon; ?>);"></div> 
          </a>
        </li>
        <?php
      endwhile;
    endif;
  ?>
  </ul>
</div>