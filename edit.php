<?php
  // Edit page which will handle the update
  // of the entry.
  //
  //  Author: Shpetim Haxhiu
  //  Application: FamilyFinance
  //
include('header.php');

  if($_POST) {
    echo var_dump($_POST);
  } elseif ($_GET) {
    echo var_dump($_GET);
  } else {
    echo 'You don`t have access.';
  }


include('footer.php');
?>
