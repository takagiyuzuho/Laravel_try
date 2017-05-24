<!doctype html>
<html>
<head>
    <title>Sample</title>
    <style>
        body { color:gray; }
        h1 { font-size:18pt; font-weight:bold; } </style>
</head>
<body>
<h1>Sample</h1>
<p><?php echo $message; ?></p>
<table>
    <tr><th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th></tr>
    <?php echo $name=session('session_name')?>さん、こんにちは
    <?php foreach($data as $val){ ?>
        <tr>
            <td><?php echo $val->id; ?></td>
            <td><?php echo $val->name; ?></td>
            <td><?php echo $val->mail; ?></td>
            <td><?php echo $val->age; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>