<?php $view->inc('elements/header.php'); ?>
<div id="contenu" class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
        $a = new Area('contenu');
        $a->enableGridContainer();
        $a->display($c);
      ?>
    </div>
  </div>
</div>
<?php $view->inc('elements/footer.php'); ?>
