
<div class="main-header container-fluid">

  <div class="row">

    <div class="logo-div col-sm-4">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>">
        </a>
      <?php endif; ?>
    </div> <!-- End logo-div -->


    <div class="drowsy-user-menu col-sm-4">
      <?php if ($logged_in): ?>
        <?php print render($page['user_menu']); ?>
      <?php else: ?>
        <ul>
          <li class="menu"><a href="<?php base_path(); ?>user/login">Log In</a></li>
        </ul>
      <?php endif; ?>
    </div> <!-- End drowsy-user-menu -->

    <div class="drowsy-main-menu">
      <?php print render($page['main_menu']); ?>
    </div> <!-- End drowsy-main-menu  -->

  </div> <!-- End Row  -->
</div> <!-- End main-header -->


<div class="container">
  <?php print render($page['content']); ?>
</div>
