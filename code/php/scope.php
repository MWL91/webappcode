<!DOCTYPE html>
<html>

<head>
    <title>Hello world</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="login" />
        <input type="password" name="passwd" />
        <input type="file" name="f" />
        <button type="submit">Send</button>
    </form>
    <pre>
    <?php
    var_dump($_FILES);
    ?>
    </pre>
</body>

</html>