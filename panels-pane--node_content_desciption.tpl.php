<!--<?php print '<pre>'; print_r($content); print '</pre>'; ?> -->
<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<div class="<?php print $classes; ?>" <?php print $id; ?>>
  <?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>

<?php
  dsm($content);
?>

  <?php print render($title_prefix); ?>
  <?php if (@$content['body']['#object']->field_fullname): ?>
    <h1<?php print $title_attributes; ?>><?php print render($content['body']['#object']->field_fullname['und'][0]['safe_value']); ?></h1>
  <?php elseif ($title): ?>
    <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($feeds): ?>
    <div class="feed">
      <?php print $feeds; ?>
    </div>
  <?php endif; ?>
<?php if ($content): ?>
  <div class="pane-content">
    <?php print render($content); ?>
  </div>
<?php endif; ?>
</div>
<?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
