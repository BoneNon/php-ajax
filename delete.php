<?php

    include_once('include/function.inc.php');
    
    if (isset($_GET['del'])) {
        $book_code = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($book_code);

        if ($sql) {
            echo "<script>alert('Deleted Successfully!');</script>";
            echo "<script>window.location.href='book.php'</script>";
        }else {
            echo "<script>alert('Deleted fall!');</script>";
            echo "<script>window.location.href='book.php'</script>";
        }
    }
?>