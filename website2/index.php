<?php include 'server-info.php' ?>
<!DOCTYPE html>
<html>
<head>
    <title>System Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <?php   if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach;  ?>
            </ul>
        <?php endif; ?>
        <br>
        <h1>Client Side Info</h1>
        <?php   if($client): ?>
            <ul class="list-group">
                <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value; ?>
                    </li>
                <?php endforeach;  ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>