<?php $title = 'Initial Page'; ?>
<?php $title2 = 'Hello World'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Website - <?php echo $title?></title>
    <?php include './components/head.php'; ?>
</head>

<body>
  <?php include './components/nav-menu.php'; ?>

  <h3><?php echo $title?></h3>

  <p><?php echo $title2?>, I'm a PHP website!</p>
  <?php include './components/pdf_container.php'; ?>

  <?php include './components/footer.php'; ?>
</body>
</html>
    
    