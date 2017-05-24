<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<p><?php echo $message; ?></p>
<table>
    <form method="post" action="/hello/login">
        <tr>
            <td>ID:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <tr>
            <td><input type="submit"></td>
        </tr>
    </form>
</table>
</body>