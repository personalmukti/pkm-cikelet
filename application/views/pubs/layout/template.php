<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once('_meta.php') ;?>

    <title><?php echo $title ?></title>

    <?php require_once('_css.php') ;?>

</head>
 
<body>

    <div></div>

    <?php require_once('_headernav.php') ;?>

    	<!-- Main content -->
        <section class="content">
            <?php echo $contents ;?>
        </section>

   	<?php require_once('_footer.php') ;?> 
  
    <a href="#" class="scrollup"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

    <?php require_once('_js.php') ;?>
    
</body>



</html>

