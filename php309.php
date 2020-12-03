<?php
    echo "The logical operators<hr />";
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo "<hr />";

    $user = "James";
    echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo "<hr />";
?>