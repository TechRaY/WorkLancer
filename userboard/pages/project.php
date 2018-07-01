<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>

  <body>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<div class="main-container">
<?php session_start();include("header.php"); ?>
<div class="container">
  <form action="recommend.php" method="POST">
    <div class="form-group row">
      <label for="CompanyName" class="col-sm-2 col-form-label">Name of Company</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="CompanyName" name="CompanyName" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="ProjectDescription" class="col-sm-2 col-form-label">Work Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="ProjectDescription" name="ProjectDescription" rows="3"required></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="SkillSet" class="col-sm-2 col-form-label">Skill sets required</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="SkillSet" name="SkillSet" rows="3" required></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="Stipend" class="col-sm-2 col-form-label">Stipend</label>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-addon">&#8377;</span>
          <input type="number" class="form-control" aria-label="Amount (to the nearest rupee)" id="Stipend" name="Stipend" required>
          <span class="input-group-addon">per month</span>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ProjectDuration" class="col-sm-2 col-form-label">Duration of Project</label>
        <div class="input-group col-sm-4">
          <input type="number" class="form-control" aria-label="Amount (to the nearest months)" id="ProjectDuration" name="ProjectDuration" required>
          <span class="input-group-addon">months</span>
        </div>
    </div>
    <div class="form-group row">
      <label for="RefundPeriod" class="col-sm-2 col-form-label">Refund Period</label>
        <div class="input-group col-sm-4">
          <input type="number" class="form-control" aria-label="Amount (to the nearest days)" id="RefundPeriod" name="RefundPeriod" required>
          <span class="input-group-addon">days</span>
        </div>
    </div>                
    <div class="form-group row">
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" required>I have read and accepted the terms and conditions and will adhere by them.
          </label> 
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php include("footer.php"); ?>
</div>

  </body>
</html>