<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="container-fluid p-0">
@include('partials.navbar')
            <!------Welcome Message ---->
          <div class="welcome row py-4 container-fluid">
            <div class="message col d-flex justify-content-center  flex-column">
                <h1 class="">Welcome To <span style="color:rgba(113, 135, 249, 1);">Medicare</span></h1>
                <p style="width:75%;">Located in the bustling district of south-east Botswana, MediCare supports the capital, Gaborone, and its surrounding areas. The hospital delivers quality healthcare to local patients without their having to travel long distances, and the hospital leads their care with the understanding that they have a responsibility to meet the expectations of those entrusted to them as well as their loved ones.</p>
            </div>
            <div class="hero col-6 text-center">
                <img src="images/logo and hero.svg" alt="" style="width: 600px;" class="img-fluid">
            </div>
          </div>
          <!-----------Services-->
          <div class="services-section container-fluid">
            <h1>Services</h1>
            <div class="container-fluid row ">
                <div class="card col m-3 p-0 " style="width: 15rem;">
                    <img src="images/surgery.svg" class="card-img-top " alt="..."style="width: 100%;height:190px; ">
                    <div class="card-body">
                      <h5 class="card-title">Surgery</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary" style="background-color:rgba(113, 135, 249, 1) ;">Learn more</a>
                    </div>
                 </div>
                 <div class="card col m-3 p-0 " style="width: 15rem;">
                    <img src="images/consultation.svg" class="card-img-top " alt="..."style="width: 100%;height:190px; ">
                    <div class="card-body">
                      <h5 class="card-title">Consultation</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary"style="background-color:rgba(113, 135, 249, 1) ;">Learn More</a>
                    </div>
                 </div>
                 <div class="card col m-3 p-0 " style="width: 15rem;">
                    <img src="images/paediatrics.svg" class="card-img-top " alt="..."style="width: 100%;height:190px; ">
                    <div class="card-body">
                      <h5 class="card-title">Paediatrics</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary"style="background-color:rgba(113, 135, 249, 1) ;">Learn More</a>
                    </div>
                 </div>

            </div>
          </div>

    </div>
@include('partials.footer')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>