<?php

foreach($slides as $row) {
    if($row[mark] == 'text') {
    echo '<div class="slide">';
    echo '<img src="' . $row['image_path'] . '" alt="Slide Image">';
    echo '<div class="info">' . $row['text_info'] . '</div>';
    echo '</div>';
    } if($row[mark] == 'pic') {
    echo '<div class="slide">';
    echo '<img src="' . $row['image_path'] . '" alt="Slide Image">';
    echo '</div>';
    }
}

?>