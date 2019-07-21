<!-- 
////////////////////////////////////////////////////////////////

Author: Free-Template.co
Author URL: http://free-template.co.
License: https://creativecommons.org/licenses/by/3.0/
License URL: https://creativecommons.org/licenses/by/3.0/
Site License URL: https://free-template.co/template-license/
  
Website:  https://free-template.co
Facebook: https://www.facebook.com/FreeDashTemplate.co
Twitter:  https://twitter.com/Free_Templateco
RSS Feed: https://feeds.feedburner.com/Free-templateco

////////////////////////////////////////////////////////////////
-->  
<?php require 'basic/head.php' ;?>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

 <!-- header -->
 <?php require 'sections/header.php'; ?>
 
    <?php        
        $articalName = $_GET['a'];
        require("articals/".$articalName.".php");     
    ?>

    
<!-- footer -->
<?php require 'sections/footer.php'; ?>

</div> <!-- .site-wrap -->

<?php require 'basic/foot.php'; ?>

