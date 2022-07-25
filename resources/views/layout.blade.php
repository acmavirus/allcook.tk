<!DOCTYPE html>
<html lang="vi">

<head>
    <?php echo view('__head', $data); ?>
</head>

<body>
    <div id="fb-root"></div>
    <div class="wrapper-frame">
        <?php echo view('_header', $data); ?>
        <?php if (!empty($main_content)) echo $main_content; ?>
        <?php echo view('_footer', $data); ?>
    </div>
    <?php echo view('__script', $data); ?>
</body>

</html>