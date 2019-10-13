<?php
    function copyrightDate($year) {
        if ($year >= date('Y')) {
            echo '&copy: ' . date('Y');
        } else {
            echo '&copy ' . $year, - date('Y');
        }
    }
    copyrightDate(2015);
?>
