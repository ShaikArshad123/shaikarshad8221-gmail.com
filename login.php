<?php
include "db.php";

?>
<!DocType html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <eta http-equiv="X-UA_Compatible" content="ie=edge">
    <title>Ajax Signup</title>
    <link re1="stylesheet" href="bootstrap.min.css 1">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-5 mx-auto mt-5">
    <?php if(isset($_SESSION['created'])) ?>
    </div>
<?php endif; ?>
<?php unset($_SESSION['created']); ?>
    <div class="card">
    <div class="card-header">
    <h3>Login User</h3>
    </div>
    <div class="card-body">
    <form>
    <div class="form-group">
    <inout type="text" id="name" class="form-control name"
    placeholder="Name">
    <div class="invalid-feedback" style="font-size:16px;">Name is required</div>
    </div>
    <!-- close form-group -->
    <div class="form-group">
    <input type="email" id="email" class="form-control email"
    placeholder="Email">
    <div class="invalid-feedback" style="font-size:16px;">Email is required</div>
    </div>
    <!-- close form-group -->
    <div class="form-group">
    <input type="password" id="password" class="form-control password"
    placeholder="Password">
    <div class="invalid-feedback" style="font-size:16px;">Password is required</div>
    </div>
    <!-- close form-group -->
    <div class="form-group">
    <button type="button" id="Login" class="btn btn-info">Login &rarr;</button>
    </div>
    <!-- close form-group -->
    </form>
    </div>
    <!-- close card-body -->
    </div>
    <!-- close card -->
    </div>
    <!-- close col-md-5 -->
    </div>
    <!-- close row -->
    </div>
    <!-- close container -->
    
    <script src="jquery-3.6.1.min.map"></script>
</body>
</html>
    