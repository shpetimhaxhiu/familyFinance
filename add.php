<?php
  // Add new Entry Page
  //
  //  Author: Shpetim Haxhiu
  //  Application: FamilyFinance
  //
  require_once 'classes/Database.php';
$page = "Adding new entry";
include('header.php');






$db = new Database('localhost', 'root', 'njeriop123!@#', 'familyfinance');

$error = false;
$success = false;

  // When its POST (Saving)
  if($_POST && !empty($_POST)) {
    $entryID = $_POST["id"];
    $entryType = $_POST["EntryType"];
    $entryDate = $_POST["EntryDate"];
    $value = $_POST["Value"];
    $registeredBy = $_POST["RegisteredBy"];

    $query = sprintf("INSERT into ledger (EntryType, EntryDate, Value, RegisteredBy) VALUES('%s', '%s', %f, '%s')",
      mysql_real_escape_string($entryType),
      mysql_real_escape_string($entryDate),
      mysql_real_escape_string($value),
      mysql_real_escape_string($registeredBy));

    echo $query;


    if($db->updateEntry($query)){
      $success = true;
      // // Redirect to self ...
      header("Location: index.php?&success=true" );
      die();

    } else {
      $error = true;
      // // Redirect to self ...
      header("Location: add.php?id=&error=true" );
      die();

    }


  }

  else { ?>

    <main role="main" class="container">
      <div class="starter-template">
      <h1>Adding new Entry</h1>
      <?php if(isset($_GET["error"])) {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Entry not added!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <?php
      } ?>
      <hr>
        <div class="row justify-content-md-center">
          <div class="col-lg-8">
            <form method="POST">
              <div class="form-group row">
                <label for="EntryDate" class="col-sm-3 col-form-label text-right">Entry Date</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="EntryDate" name="EntryDate" value="<?php echo date('Y-m-d'); ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="Value" class="col-sm-3 col-form-label text-right">Amount</label>
                <div class="col-sm-9">
                  <input type="number" id="Value" class="form-control"  name="Value" value="" step="0.01">
                </div>
              </div>
              <div class="form-group row">
                <label for="EntryType" class="col-sm-3 col-form-label text-right">Entry Type</label>
                <div class="col-sm-9">
                  <select class="form-control" name="EntryType" id="EntryType">
                    <option value="Expense" selected="selected">Expense</option>
                    <option value="Income">Income</option>
                  </select>

                </div>
              </div>
              <div class="form-group row">
                <label for="RegisteredBy" class="col-sm-3 col-form-label text-right">Registered By</label>
                <div class="col-sm-9">
                  <input type="text" id="RegisteredBy" class="form-control"  name="RegisteredBy" value="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12 text-right">
                  <a href="index.php" name="button" class="btn btn-secondary">Cancel</a>
                  <button type="submit" name="button" class="btn btn-primary">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main><!-- /.container -->

    <?php
  }

include('footer.php');
?>
