<?php
  // Edit page which will handle the update
  // of the entry.
  //
  //  Author: Shpetim Haxhiu
  //  Application: FamilyFinance
  //
  require_once 'classes/Database.php';
$page = "Editing entry";
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

    $query = sprintf("update ledger set EntryType='%s', EntryDate='%s', Value=%f, RegisteredBy='%s' where EntryID=%b",
      mysql_real_escape_string($entryType),
      mysql_real_escape_string($entryDate),
      mysql_real_escape_string($value),
      mysql_real_escape_string($registeredBy),
      mysql_real_escape_string($entryID));

    echo $query;


    if($db->updateEntry($query)){
      $success = true;
      // // Redirect to self ...
      header("Location: edit.php?id=" .$entryID . "&success=true" );
      die();

    } else {
      $error = true;
      // // Redirect to self ...
      header("Location: edit.php?id=" .$entryID . "&error=true" );
      die();

    }





  }

  // When its GET (Editing) and ID is not empty

  elseif ($_GET && !empty($_GET["id"])) {

    $qry = "select * from ledger WHERE EntryID=" . (string)$_GET["id"];
    $db->query($qry);

    // GET case
?>

    <main role="main" class="container">
      <div class="starter-template">
      <h1>Editing Entry</h1>
            <?php if(isset($_GET["success"])) {
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Entry updated successfuly!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>


              <?php
            } ?>
            <?php
              if($db->numRows() == 0) {
                echo 'No entries';
              }
              else {
                $x = $db->getEntry();
                ?>

                <div class="row justify-content-md-center">
                  <div class="col-lg-8">
                    <form method="POST">
                      <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label text-right">EntryID</label>
                        <div class="col-sm-9">
                          <input type="text" readonly class="form-control-plaintext" id="id" name="id" value="<?php echo htmlentities($x["EntryID"]); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="EntryDate" class="col-sm-3 col-form-label text-right">Entry Date</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" id="EntryDate" name="EntryDate" value="<?php echo htmlentities($x["EntryDate"]); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Value" class="col-sm-3 col-form-label text-right">Amount</label>
                        <div class="col-sm-9">
                          <input type="number" id="Value" class="form-control"  name="Value" value="<?php echo htmlentities($x["Value"]); ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="EntryType" class="col-sm-3 col-form-label text-right">Entry Type</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="EntryType" id="EntryType">
                            <option value="Expense" <?php if($x["EntryType"] == "Expense") echo 'selected="selected"'; ?> >Expense</option>
                            <option value="Income" <?php if($x["EntryType"] == "Income") echo 'selected="selected"'; ?> >Income</option>
                          </select>

                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="RegisteredBy" class="col-sm-3 col-form-label text-right">Registered By</label>
                        <div class="col-sm-9">
                          <input type="text" id="RegisteredBy" class="form-control"  name="RegisteredBy" value="<?php echo $x["RegisteredBy"]; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-lg-12 text-right">
                          <a href="index.php" name="button" class="btn btn-secondary">Cancel</a>
                          <button type="submit" name="button" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

            <?php } ?>

      </div>
    </main><!-- /.container -->

<?php
  }
  else {
    echo 'Neither $_POST nor $_GET.';
  }

include('footer.php');
?>
