<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $title_for_layout; ?></title>
    <!--nocache--><?php $x = 1; ?><!--/nocache-->
</head>
<body>
    <!--nocache--><?php $x++; ?><!--/nocache-->
    <!--nocache--><?php $x++; ?><!--/nocache-->
    <?php echo $content_for_layout; ?>
    <!--nocache--><?php echo 'cached count is: ' . $x; ?><!--/nocache-->
</body>
</html>