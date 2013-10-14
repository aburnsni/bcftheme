<?php if ($page): ?>
<!-- <?php print '<pre>'; print_r($node); print '</pre>'; ?> -->

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
$link = field_get_items('node', $node, 'field_linkto');
$link_type = field_view_value('node', $node, 'field_linkto', $link[0]);
if ($link_type['#markup']== 'Group') {
      $sslinktid = field_get_items('node', $node, 'field_link_to_group');
      $sslink = field_view_value('node', $node, 'field_link_to_group', $sslinktid[0]);
    } else {
      $sslinknid = field_get_items('node', $node, 'field_link_to_article');
      $sslink = field_view_value('node', $node, 'field_link_to_article', $sslinknid[0]);
    }
    $group_link = l($title,$sslink['#href'], array('absolute' => 'FALSE','html' => 'TRUE'));
    ?>
<style>
#transparency {
  position: absolute;
  left:0px;
  top:85%;
  height:15%;
  width:100%;
  background-color:#000;
  filter:alpha(opacity=80);
  opacity:0.8;
  -moz-opacity:0.8;
}
#slidecontent {
  position: absolute;
  bottom: 3%;
  left:3%;
  font-size: 130%;
  color: #fff;
}
@media only screen and (max-width:600px) {
  #slidecontent {
    font-size: 75%;
  }
}
#slidegraphic .field-type-image figure {
  margin: 0;
}
#slidegraphic .field {
padding: 0;
}

.flex-direction-nav {
  line-height: 1;
}
</style>
    <div id="slide">
      <div id="slidegraphic">
        <?php print render($content['field_slideshow_picture']); ?>
      </div>
      <div id="transparency"></div>
      <div id="slidecontent">
        <?php echo $group_link;?>
      </div>
    </div>
<?php endif; ?>
