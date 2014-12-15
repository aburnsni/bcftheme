<?php if ($page): ?>
<!-- <?php print '<pre>'; print_r($node); print '</pre>'; ?> -->
<!-- <?php print_r($node->field_slideshow_picture); ?> -->

  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
    <?php print render($title_suffix); ?>

    <?php if ($display_submitted): ?>
      <div class="submitted">
        <?php print $submitted; ?>
      </div>
    <?php endif; ?>

    <div class="content"<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>
    <?php print render($content['links']); ?>
    <?php print render($content['comments']); ?>
  </div>
<?php endif; ?>

<?php if (!$page): ?>
<?php
  $sslinknid = field_get_items('node', $node, 'field_link_to_article');
  $sslink = field_view_value('node', $node, 'field_link_to_article', $sslinknid[0]);
  $article_link = l($title,$sslink['#href'], array('absolute' => 'FALSE','html' => 'TRUE'));
?>
    <div class="slide">
      <div class="slidegraphic">
        <img src="<?php print image_style_url('banner_graphic', $node->field_slideshow_picture['und'][0]['uri']); ?>"
             class="image-style-banner-graphic"
             height="250" width="610" draggable="false" typeof="foaf:Image"
             alt="<?php echo ($node->field_slideshow_picture['und'][0]['alt']); ?>">
      </div>
      <div class="transparency"></div>
      <div class="slidecontent">
        <?php echo $article_link;?>
      </div>
    </div>
<?php endif; ?>
