<?php
require_once('classes/Database.php');
$page = "Transactions List";

include('header.php');


$db = new Database('localhost', 'root', 'njeriop123!@#', 'familyfinance');
$db->query("select * from ledger");
?>

<main role="main" class="container">
  <div class="starter-template">
  <h1>Welcome to Family Finances</h1>
  <p class="lead">
    Here is a list of transactions from the ledger.
  </p>
    <table id="entriesTable" class="table" width="100%">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Entry Date</th>
          <th scope="col">Entry Type</th>
          <th scope="col">Amount</th>
          <th scope="col">Registered By</th>
          <th scope="col">Actions</th>


        </tr>
      </thead>
      <tbody>

        <?php
          if($db->numRows() == 0) {
            echo 'No entries';
          }
          else {
            foreach($db->entries() as $article) {
              echo '<tr>';
              echo   '<td>', $article["EntryID"], '</td>';
              echo   '<td>', $article["EntryDate"], '</td>';
              echo   '<td>', (double)$article["Value"], '</td>';
              echo   '<td><h5>', $article["EntryType"] == "Expense" ? '<span class="badge badge-danger">' : '<span class="badge badge-success">' ,  $article["EntryType"],  '</span></h5></td>';
              echo   '<td>', $article["RegisteredBy"], '</td>';
              echo   '<td><a href="#" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a> <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> </a></td>';
              echo '</tr>';
            }
              // echo '<tr><td colspan="6" class="text-right">', $db->numRows(), " entries </td></tr>";
          }
        ?>

      </tbody>
    </table>
  </div>
</main><!-- /.container -->



<?php
// $db->addEntry("INSERT into Ledger (EntryDate, EntryType) VALUES ('2018-03-03', 'Test 3')");

$db->disconnect();

include('footer.php');
?>
