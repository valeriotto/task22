<h1>Портфолио</h1>
    <?php
    foreach ($data as $project) {
        echo '<div>'
            . '<div>'. $project['year'] . '</div>'
            . '<div>' . $project['name'] . '</div>'
            . '<div>' . $project['description'] . '</div>'
            . '</div>';
    }
    ?>
