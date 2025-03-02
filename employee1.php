<?php 
include("sqlconnect.php");
include("data1.php");
include("session.php");
include("checklogin.php");
$user_data = check_login($mysqli);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KPI Monitor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">KPI Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data.php">Показатели Компании</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="employeeall.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Показатели сотрудников
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item active" href="employee1.php">Иван</a></li>
                <li><a class="dropdown-item" href="employee2.php">Пётр</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="employeeall.php">Все сотрудники</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Выход</a>
            </li>
            
          </ul>
          
          </form>
        </div>
      </div>
    </nav>

       


    <div class="container-fluid text-center">
      
    <div class="row">
        
    <div class="col-4 mt-5 order-sm-2">
           <div class="container">
             <h2>Прибыль за последний месяц: <?php echo($row["total_amount"]) ?></h2>
            </div>
        </div>

        <div class="col-sm-8 mt-5 order-sm-1">
          
          <div class="container-sm">
            <canvas id="myChart"></canvas>
            <div>&nbsp;</div>
          </div>    
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="incomeemp1.js"></script>
          </div>
        
      </div>
    </div>
  </div>
    

<style type="text/css">
  html {
          overflow: hidden;
  }
</style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="gauge.min.js"></script>
    <script src="utils.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.js" integrity="sha512-7DgGWBKHddtgZ9Cgu8aGfJXvgcVv4SWSESomRtghob4k4orCBUTSRQ4s5SaC2Rz+OptMqNk0aHHsaUBk6fzIXw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>S
  </body>
</html>
