<?php

  // $db = new mysqli('localhost', 'root', 'njeriop123!@#', 'familyfinance');
  // $db->query("SELECT * from ledger");
  //
  // if($db->num_rows() == 0) {
  //   echo "No entries.";
  // } else {
  //   foreach($db->rows() as $entry) {
  //     echo $entry['EntryID'];
  //   }
  // }

require_once('classes/Database.php');

$db = new Database('localhost', 'root', 'njeriop123!@#', 'familyfinance');

$db->query("select * from ledger");
if($db->numRows() == 0) {
  echo 'No entries';
} else {
  foreach($db->rows() as $article) {
    echo '<pre>', print_r($article, true), '</pre>';
  }
}

$db->disconnect();
?>
