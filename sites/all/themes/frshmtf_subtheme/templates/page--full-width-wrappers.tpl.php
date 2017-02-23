<div id="page-wrapper">
  <div id="page" class="container myclass <?php print $classes; ?>">
  
    <header<?php print $header_attributes; ?>>

        <!-- !Branding -->
        <div<?php print $branding_attributes; ?>>

            <div id="logo">
              <?php print $site_logo; ?>
            </div>

            <!-- !Site name and Slogan -->
            <div id="header-region">
			  <?php print render($page['header']); ?>
            </div>

        </div>
        
    </header>

    <!-- !Navigation -->
    <?php print render($page['menu_bar']); ?>
    
    <!-- !Breadcrumbs -->
    <?php //if ($breadcrumb): print $breadcrumb; endif; ?>


    <div id="columns" class="columns clearfix">
      <main id="content-column" class="content-column" role="main">
        <div class="content-inner">

          <<?php print $tag; ?> id="main-content">

            <!-- !Main Content -->
            <?php if ($content = render($page['content'])): ?>
              <div id="content" class="region">
                <!-- !Messages and Help -->
                <?php print $messages; ?>
                <?php print render($page['help']); ?>
                <?php print $content; ?>
              </div>
            <?php endif; ?>

          </<?php print $tag; ?>><!-- /end #main-content -->
        
        </div><!-- /end .content-inner -->
      </main><!-- /end #content-column -->

      <!-- !Sidebar Regions -->
      
      <?php if ($content = render($page['sidebar_first'] || $page['sidebar_second'])): ?>
      	<div id="sidebar">
		  <?php print $sidebar_first; ?>
          <?php print $sidebar_second; ?>
        </div>
      <?php endif ?>

    </div><!-- /end #columns -->

    <!-- !Footer -->
      <footer<?php print $footer_attributes; ?>>
        <?php print render($page['footer']); ?>
        <?php print $attribution; ?>
      </footer>
      
  </div>
</div>