<!doctype html>
<html>
<head>
    <title>Sample</title>
    <style>
        body { color:gray; }
        h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
<h1>Sample</h1>
<p><?php echo $message; ?></p>
<form method="post" action="/hello">
    <input type="text" name="str">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="submit">
</form>
</body>
</html>