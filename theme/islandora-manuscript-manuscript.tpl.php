<?php
/**
 * @file
 * Template file to style output.
 */
?>
<p class="subtitle"><?php print $upitt_viewer_link; ?></p>
<?php if (isset($viewer)): ?>
  <div id="manuscript-viewer">
    <?php print $viewer; ?>
  </div>
<?php endif; ?>
<!-- @todo Add table of metadata values -->
