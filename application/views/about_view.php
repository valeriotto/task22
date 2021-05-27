<h1>Контакты</h1>
<?php
foreach ($data as $project) {
    echo '<div>'
        . '<div class="col-1">' . $project['name'] . '</div>'
        . '<div class="col-1">' . $project['description'] . '</div>'
        . '</div>';
}
?>