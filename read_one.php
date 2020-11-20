<?php 
    // set page headers
    $page_title = "Read One Product";
    include_once "layout_header.php";

    // read products button
    echo "<div>";
        echo "<a href='index.php' class='btn btn-primary pull-right'>";
            echo "<span class='glyphicon glyphicon-list'></span> Read Products";
        echo "</a>";
    echo "</div>";

    // set footer
    include_once "layout_footer.php";
?>