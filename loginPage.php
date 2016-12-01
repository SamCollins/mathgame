<?php include("include/header.php"); ?>

<div class="row">
  <div class="text-center">
    <h1>Please Login<h1>
  </div>
</div>
<form action="credentialCheck.php" method="post" role="form" class="form-horizontal">
  <div class="row">
    <div class="form-group">
      <label class="col-xs-3 col-xs-offset-2 control-label">
        <p>Email:</p>
      </label>
      <div class="col-xs-6 col-sm-3">
        <input type="text" class="form-control" name="email" placeholder="Email" size="30">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group">
      <label class="col-xs-3 col-xs-offset-2 control-label">
        <p>Password:</p>
      </label>
      <div class="col-xs-6 col-sm-3">
        <input type="text" class="form-control" name="password" placeholder="Password" size="30">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="text-center">
      <input type="submit" class="btn btn-primary" value="Login" />
    </div>
  </div>
</form>
<br />
<div class="row">
  <div class="text-center">
    <?php
        if (isset($_GET["msg"])) {
            echo $_GET["msg"];
        }
    ?>
  </div>
</div>

<?php include("include/footer.php"); ?>
