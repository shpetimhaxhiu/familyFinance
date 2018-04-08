<?php
require_once('classes/Database.php');
include('header.php');

$db = new Database('localhost', 'root', 'njeriop123!@#', 'familyfinance');
$db->query("select * from ledger");
?>

<main role="main" class="container">
  <div class="starter-template">

  <?php
    if($db->numRows() == 0) {
      echo 'No entries';
    }
    else {
      foreach($db->entries() as $article) {
        echo '<p class="lead">', $article["EntryDate"], "<br></p>";
      }
      echo $db->numRows(), " entries";
    }
  ?>

  </div>
</main><!-- /.container -->



<?php
// $db->addEntry("INSERT into Ledger (EntryDate, EntryType) VALUES ('2018-03-03', 'Test 3')");

$db->disconnect();

include('footer.php');
?>
