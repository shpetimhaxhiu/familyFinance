<?php
require_once('classes/Database.php');

$db = new Database('localhost', 'root', 'njeriop123!@#', 'familyfinance');

$db->query("select * from ledger");
if($db->numRows() == 0) {
  echo 'No entries';
} else {
  foreach($db->entries() as $article) {
    echo $article["EntryDate"], "<br>";
  }
  echo $db->numRows(), " entries";
}

$db->disconnect();
?>
