
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
<a target="_blank" href="https://icons8.com/icon/11668/notification"></a>
    <title>Dashboard</title>
</head>
<body>
    @include('partials.navbar_two')
    <div class="functions-section container-fluid d-flex justify-content-center flex-column" style="background: url('images/sysadminbg.svg'); background-repeat:no-repeat; object-fit:fill; object-position:right;">
        <h1>Functions</h1>
        <div class="container-fluid row ">
            <div class="card col m-3 p-0 " style="width: 15rem;">
                <img src="images/surgery.svg" class="card-img-top " alt="..."style="width: 100%;height:190px; ">
                <div class="card-body">
                  <h5 class="card-title">Manage Users</h5>
                  <a href="#" class="btn btn-primary" style="background-color:rgba(113, 135, 249, 1) ;">Learn more</a>
                </div>
             </div>
             <div class="card col m-3 p-0 " style="width: 15rem;">
                <img src="images/consultation.svg" class="card-img-top " alt="..."style="width: 100%;height:190px; ">
                <div class="card-body">
                  <h5 class="card-title">Manage Records</h5>
                  <a href="#" class="btn btn-primary"style="background-color:rgba(113, 135, 249, 1) ;">Learn More</a>
                </div>
             </div>
             <div class="card col m-3 p-0 " style="width: 15rem;">
                <img src="images/paediatrics.svg" class="card-img-top " alt="..."style="width: 100%;height:190px; ">
                <div class="card-body">
                  <h5 class="card-title">Paediatrics</h5>
                  <a href="#" class="btn btn-primary"style="background-color:rgba(113, 135, 249, 1) ;">Learn More</a>
                </div>
             </div>

        </div>
      </div>

</body>
</html>