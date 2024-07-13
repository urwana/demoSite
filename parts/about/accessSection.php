<section class="accessSection">
  <div class="accessSection__title" id="access">
    <?php get_template_part('parts/about/aboutTitleContainer', null, array('titleJp' => "アクセス", 'titleEn' => "Access")) ?>
    <div class="accessSection__address"><?php echo the_field("custom-zip"); ?><br class="displaySp"><?php echo the_field("custom-address"); ?></div>
    <!-- <gmp-map center="35.669986724853516,139.7639923095703" zoom="14" map-id="DEMO_MAP_ID" class="googleMap">
      <gmp-advanced-marker position="35.669986724853516,139.7639923095703" title="My location"></gmp-advanced-marker>
    </gmp-map> -->
    <iframe class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1627.972468679855!2d139.5195989889301!3d35.30734963203162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184f5c7997c315%3A0xe1aa4e52b3b26c96!2z44CSMjQ4LTAwMjQg56We5aWI5bed55yM6Y6M5YCJ5biC56iy5p2R44Ks5bSO77yU5LiB55uu!5e0!3m2!1sja!2sjp!4v1720845353081!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
</section>