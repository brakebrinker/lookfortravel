<?php
    $position_rating = (int) get_field('position_rating');
?>
<li><a href="<?php the_permalink(); ?>"><span class="<?php 
if ($position_rating == 1) echo 'gold';
if ($position_rating == 2) echo 'silver';
if ($position_rating == 3) echo 'bronze';
if ($position_rating > 3 || $position_rating < 1) echo 'default';

?> star uk-margin-right"><?php echo $position_rating; ?></span><?php the_title(); ?></a></li>