<html>
<head>
    <title>insert</title>
    <style>
        body { color:gray; }
        h1 { font-size:18pt; font-weight:bold; }
        th { color:white; background:#999; }
        td { color:black; background:#eee; padding:5px 10px; }
    </style>
</head>
<body>
<h1>Insert</h1>
<?php if(count($errors) > 0) { ?>
    <?php foreach($errors->all() as $error) { ?>
    <font color="red"><?php echo $error; ?></font><br>
    <?php } ?>
<?php } ?>
<p><?php echo $message; ?></p>
<table>
    <form method="post" action= "/dbaccess/insert">
        <tr><td>NAME:</td><td><input type="text" name="name"></td></tr>
        <tr><td>MAIL:</td><td><input type="text" name="mail"></td></tr>
        <tr><td>AGE:</td><td><input type="text" name="age"></td></tr>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <tr><td></td><td><input type="submit"></td></tr>
    </form>
</table>
</body>