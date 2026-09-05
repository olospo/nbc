<?php $doi = get_post_meta(get_the_ID(), 'doi', true); ?>

<article class="publication one-third column">
  <div class="content">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php if ($doi) {
      echo '<p><strong>DOI:</strong> <a href="https://www.doi.org/' . esc_attr($doi) . '" target="_blank" rel="noopener">';
      echo esc_html($doi);
      echo '</a></p>';
    }
    ?>
  </div>
</article>