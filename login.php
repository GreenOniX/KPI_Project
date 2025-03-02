<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPI Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<style>
html,body {
  height: 100%;
  background-color: #c2b9b8;
}
</style>

<div class="h-100 d-flex align-items-center justify-content-center"> 
    <form method="post" action="checklogin.php">
    <div class="mb-3 pb-3 text-center">
        <h1>Kpi manager</h1>
    </div>
    <div class="mb-3">
        <label for="InputLogin" class="form-label">Login</label>
        <input type="text" class="form-control" name="user_name" id="text" aria-describedby="emailHelp">
        
    </div>
    <div class="mb-3">
        <label for="InputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="text">
    </div>
   
    <div class="d-grid gap-2 col-8 p-2 mx-auto">
        <button type="submit" class="btn btn-primary" value="Login">Submit</button>
    </div>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="main.js"></script>

</body>
</html>