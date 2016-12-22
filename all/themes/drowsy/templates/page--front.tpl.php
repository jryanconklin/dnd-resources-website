



<div class="logo-header jumbotron">
  <div class="row">
    <div class="logo-div">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img class="col-sm-6 col-sm-offset-3 img-responsive img-thumbnail" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>">
        </a>
      <?php endif; ?>
    </div> <!-- End logo-div -->
  </div>
</div>


<div id="header" class="main-header container-fluid">

  <div class="row">
    <div class="drowsy-main-menu col-xs-12 col-sm-6 col-md-6">
      <?php print render($page['main_menu']); ?>
    </div> <!-- End drowsy-main-menu -->


    <div class="drowsy-user-menu col-xs-12 col-sm-6 col-md-6">
      <?php if ($logged_in): ?>
        <?php print render($page['user_menu']); ?>
      <?php else: ?>
        <ul>
          <li class="menu"><a href="<?php base_path(); ?>user/login">Log In</a></li>
        </ul>
      <?php endif; ?>
    </div> <!-- End drowsy-user-menu -->

  </div>

</div> <!-- End id="header" main-header and fluid container -->


  <div class="container"> <!-- Main Body Container -->
      <!-- Drupal Messages -->
      <div class="col-lg-12">
        <?php if ($messages): ?>
          <div id="messages">
            <div class="section clearfix">
              <?php print $messages; ?>
            </div>
          </div>
        <?php endif; ?>
        <!-- End Drupal Messages -->

      <div class="content_main col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-10">
        <h3>Gaming News:</h3>
        <hr>
        <?php print render($page['content_main']); ?>
      </div>

      <div class="content_second col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-2">
        <?php print render($page['content_second']); ?>
      </div>
    </div>

  </div> <!-- End Main Body Container -->




<div id="footer" class="main-footer container-fluid">
  <small class="text-muted">All Rights Reserved to J. Ryan Conklin for this Website.</small>
  <small class="text-muted"><a href="/">Return Home</a> | <a href="#top">Back to top &raquo;</a></small>
</div>
