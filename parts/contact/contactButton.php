<div class="contact__buttonContainer">
  <?php foreach ($buttonData as $index => $element) { ?>
  <a href="<?php $element['link']; ?>" class="contact__button"><?php $element['label']; ?></a>
  <?php }; ?>
</div>