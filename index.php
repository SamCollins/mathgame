<?php
  session_start();
  if (!isset($_SESSION["credentialCheck"])) {
      header("Location: loginPage.php");
  }
  include("Include/header.php");

  extract($_POST);

  if (!isset($total)) {
    $total = 0;
  }

  if (!isset($correct)) {
    $correct = 0;
  }

  if (!isset($statement)) {
    $statement = "";
  }

  if ( isset($operand1)
      && isset($operand2)
      && isset($operation)
      && isset($input)
  ) {

      
    if (!is_numeric($input)) {
      $statement = "Please enter a number";
    } else if ($operation == 1) {
      $sum = $operand1 + $operand2;
        if ($sum == $input) {
          $statement = "Correct, the answer was $sum";
          $correct++;
        } else {
          $statement = "Incorrect, the answer was $sum";
        }
        $total++;
  } else {
    $sum = $operand1 - $operand2;
      if ($sum == $input) {
        $statement = "Correct, the answer was $sum";
        $correct++;
      } else {
        $statement = "Incorrect, the answer was $sum";
      }
      $total++;
  }
}

  $num1 = rand(0,20);
  $num2 = rand(0,20);
  $operation = rand(1,2);
  $operationSign = "";

  if ($operation == 1) {
    $operationSign = "+";
  } else ($operation == 2) {
    $operationSign = "-"
  }

?>

<form action="index.php" method="post" role="form" class="form-horizontal">
  <div class="row">
    <div class="text-center">
      <h1>Math Game</h1>
    </div>
  </div>
  <div class="row">
    <div class="text-center">
      <p><?php echo $num1 ?><?php echo $operationSign ?><?php echo $num2 ?></p>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4">
        <input type="text" class="form-control" name="input" placeholder="Enter answer" size="6">
      </div>
    </div>
  </div>

  <input type="hidden" name="operand1" value="<?php echo $num1; ?>" />
  <input type="hidden" name="operand2" value="<?php echo $num2; ?>" />
  <input type="hidden" name="operation" value="<?php echo $operation; ?>" />
  <input type="hidden" name="total" value="<?php echo $total; ?>" />
  <input type="hidden" name="correct" value="<?php echo $correct; ?>" />

  <div class="row">
    <div class="col-xs-3 col-xs-offset-3 col-sm-offset-4">
      <input type="submit" name="submit" class="btn btn-primary" />
    </div>
    <div class="col-xs-3">
      <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
  </div>
</form>
<br />
<div class="text-center">
  <p><?php echo $statement; ?></p>
</div>
<div class="text-center">
  <p>You have gotten <?php echo $correct ?>/<?php echo $total ?> correct</p>
</div>
<?php include("Include/footer.php"); ?>
