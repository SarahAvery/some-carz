<div class="cards">
  <div class="grid-container">
    <ul class="grid">
      <?php
        if( have_rows( 'cards' ) ):
          while( have_rows( 'cards' ) ) : the_row() ;

            $row = get_row(true);
            foreach($row as $field):
                $image = $field['image'];
                $link = $field['link'];
                $link_text = $field['link_text'];
                $title = $field['title'];
                $subtitle = $field['subtitle'];
                ?>
                  <li class="cell">
                    <div class="card-container">
                      <div class="img" style="background-image: url(<?php echo $image; ?>);"></div>
                      <div class="content">
                        <h2 class="title heavy"><?php echo $title; ?></h2>
                        <p class="subtitle"><?php echo $subtitle; ?></p>
                        <a href="<?php echo $link; ?>" target="_blank">
                          <span><?php echo $link_text; ?></span>
                          <div class="icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                          </svg>
                          </div>
                        </a>
                      </div>
                    </div>
                  </li>
                <?php
            endforeach;
          endwhile;
        endif;
      ?> 
    </ul>
  </div>
</div>
