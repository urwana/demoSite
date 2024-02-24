<?php $summarySectionData = $args['summarySectionData']; ?>
<section class="summarySection">
  <ul class="summarySection__links">
    <li><a
        href="#<?php echo $summarySectionData['anchorLink1']; ?>"><?php echo $summarySectionData['sectionName1']; ?></a>
    </li>
    <li><a
        href="#<?php echo $summarySectionData['anchorLink2']; ?>"><?php echo $summarySectionData['sectionName2']; ?></a>
    </li>
    <li><a
        href="#<?php echo $summarySectionData['anchorLink3']; ?>"><?php echo $summarySectionData['sectionName3']; ?></a>
    </li>
  </ul>
  <h2 class="summarySection__title"><?php echo $summarySectionData['sectionTitle']; ?></h2>
  <p class="summarySection__text"><?php echo $summarySectionData['sectionText']; ?></p>
</section>