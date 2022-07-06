<div class="button-container">
  <?php
    if (have_rows('cta')):
      while (have_rows('cta')): the_row();
        $row = get_row(true);
        foreach ($row as $field):
            $label = $field['label'];
            $link = $field['link'];
            $color = $field['color'];
  ?>
        <div class="cta-button" style="background-color: <?php echo $color; ?>;">
          <a href="<?php echo $link; ?>" target="_blank"><?php echo $label; ?></a>
        </div>

        <?php
        endforeach;
      endwhile;
    endif;
  ?>
</div>