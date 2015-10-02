<div id="wrapper">
    	<div class="header-wrapper">
        <div class="header"> 
        	<?php if ($page['leftmenu']): ?>    
  				<?php print render($page['leftmenu']); ?>
			<?php endif; ?>
            
            <div class="logo">
            <?php if ($page['logo']): ?>    
  				<?php print render($page['logo']); ?>
			<?php endif; ?>
            </div><!--End of Logo-->
            <div class="right-menu">
            	<?php if ($page['rightmenu']): ?>
                	<?php print render($page['rightmenu']); ?>
                <?php endif; ?>
           </div><!--End of Right Menu-->
        </div><!--End of Header-->
        </div><!--End of Header Wrapper-->
        
        <div class="content-footer-wrapper">
        <div class="my-content">
        	<?php if ($page['content']): ?>
                	<?php print render($page['content']); ?>
                <?php endif; ?>
        </div>
        <div class="right-sidebar">
        	<?php if ($page['rightsidebar']): ?>
            	<?php print render($page['rightsidebar']); ?>
            <?php endif; ?>
        </div>
        
        <div class="footer">
        	<p>Contact</p>
			<p>CEO JL Lawson</p>
			<p>1801 Sycamore Valley Drive</p>
			<p>Reston, VA</p> 
			<p>708-833-9788</p>
        </div>
        </div><!--End of Content Footer Wrapper-->
    </div>

