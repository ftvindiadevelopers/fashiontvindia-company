<section>
  <div class="section-content">
    <div class="row">
      <div class="col-md-100 col-lg-70">
        <div class="title-content">
          <h1><?php echo ucwords(str_replace(["_", "-"], " ", $url_unicode)); ?></h1>
          <p><?php echo ucwords(str_replace(["_", "-"], " ", $url_unicode)); ?></p>
        </div>
      </div>
      <div class="col-md-100 col-lg-30">
        <?php 
        include $_SERVER['DOCUMENT_ROOT'] . "/widgets/salon/contact.salon.php";
        getMap();
        getContactSlots();
        ?>
      </div>
    </div>
  </div>
</section>