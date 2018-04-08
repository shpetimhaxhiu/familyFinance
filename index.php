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

$db->addEntry("INSERT into Ledger (EntryDate, EntryType) VALUES ('2018-03-03', 'Test 3')");

$db->disconnect();
?>
