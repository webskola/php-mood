<?php global $app; ?>

<!-- galvenes daļa -->
    <div class="header">
      <div class="wrapper clearfix">
        
        <div class="logo">
          <a href=""><img src="./images/logo.svg" alt="dizaina darbs logo" title="dizaina darbs"><span><?php echo $title; ?></span></a>
        </div>
        
        <div class="top-nav">
          <?php echo render_nav($menu_lang, $menu_cfg); ?>
        </div>

        <ul>
        <?php foreach($app->getSupportedLocales() as $locale) : ?>
          <li><a href="/?lang=<?= $locale; ?>"><?= $locale; ?></a>
        <?php endforeach; ?>
        </ul>

      </div>
    </div>