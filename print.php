<?php

    include_once('include/function.inc.php');
    $code = $_GET['id'];
    $fetchdata = new DB_con();
    $sql = $fetchdata->fetchdata_sell($code);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<script src="js/app.js"></script>
	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script src="bootstrap-4.5.3-dist/js/bootstrap.js"></script>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="page2.php">Sell</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="slip.php">Slip</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="book.php">Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    
  </div>
</nav>

<section class="container" aria-describedby="demos">
    <h2 id="demos">Print</h2>
    <br/>
    <div class="row">
      <div class="one-half column">
        <a id="basic" href="#nada" class="btn btn-success">Print container</a>
        <pre>
              <code>
$(".demo").printThis();
              </code>
            </pre>
      </div>
      
    </div>
<div class="row">
      <div class="demo twelve columns">
      <figure class="text-center">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
        <h3 class="text-center">Slip</h3>
<h3>ID : <?php echo $code; ?></h3>
    <table class="table table-bordered">
        <thead>
          <th>รหัส</th>
          <th>จำนวน</th>
          <th>วันที่</th>
          <th>เวลา</th>
        </thead>
        <tbody>
            <?php

                while($row = mysqli_fetch_array($sql)) {
            
            ?>
                <tr>
                    <td><?php echo $row["sell_id"]; ?></td>
                    <td><?php echo $row["sell_quantity"]; ?></td>
                    <td><?php echo $row["sell_date"]; ?></td>
                    <td><?php echo $row["sell_time"]; ?></td>
                    
                </tr>

            <?php } ?>
        </tbody>
    </table>

      </div>
      
    </div>
    
  </section>





<!-- printThis -->

<script type="text/javascript" src="js/printThis.js"></script>

<!-- demo -->
<script>
  $('#basic').on("click", function () {
    $('.demo').printThis({
      debug: false,               // show the iframe for debugging
      importCSS: true,            // import parent page css
      importStyle: false,         // import style tags
      printContainer: true,       // print outer container/$.selector
      loadCSS: "file:///C:/AppServ/www/web_cartV2/bootstrap-4.5.3-dist/css/bootstrap.min.css",                // path to additional css file - use an array [] for multiple
      pageTitle: "Print",              // add title to print page
      removeInline: false,        // remove inline styles from print elements
      removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
      printDelay: 333,            // variable print delay
      header: null,               // prefix to html
      footer: null,               // postfix to html
      base: false,                // preserve the BASE tag or accept a string for the URL
      formValues: true,           // preserve input/form values
      canvas: false,              // copy canvas content
      doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
      removeScripts: false,       // remove script tags from print content
      copyTagClasses: true,      // copy classes from the html & body tag
      beforePrintEvent: null,     // callback function for printEvent in iframe
      beforePrint: null,          // function called before iframe is filled
      afterPrint: null            // function called before iframe is removed
    });
  });
</script>


</body>
</html>