
<form method="post">
    <input type="text" name="name" />
    <input type="submit" />
</form>

<?php

// localhost:8888/?name=test
if (isset($_GET['name'])) {
    echo '<p>The name(GET) is ' . $_GET['name'];
}

if (isset($_POST['name'])) {
    echo '<p>The name is(POST) ' . $_POST['name'];
}
?>