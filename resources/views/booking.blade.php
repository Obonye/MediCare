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
    <title>Sign Up</title>
</head>
<body >
    @include('partials.navbar_two')
    <div class="container-fluid p-0" style="background-image:url(images/authentication.svg); background-repeat:no-repeat; background-position:left; width:100%; height:100vh;" >


          <div class="sign-up-form d-flex justify-content-center align-items-center flex-column container-fluid p-4" style=" width:100%; height:100vh;">
              <form action="" class="col g-3 d-flex justify-content-center align-items-center flex-column container-fluid" style="width:50%; border: 3px solid rgba(113, 135, 249, 1) ; border-radius:10px; box-shadow:10px 10px rgb(52, 51, 51); background-color:rgba(179, 174, 174, 0.733);">
                <h1>Book Now</h1>
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label">Date</label>
                  <input type="date" class="form-control" id="date" placeholder="">
                </div>
                <div class="col-md-8">
                    <label for="inputEmail4" class="form-label">Time</label>
                    <input type="time" class="form-control" id="userName" placeholder="Username">
                  </div>
                  <div class="col-md-8 mt-3">
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Doctor</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                  </div>
              
              

                <div class="col-md-8 d-flex justify-content-center mt-3">
                  <button type="submit" class="btn btn-primary" style="background-color:rgba(113, 135, 249, 1) ;width:300px;">Book</button>
                </div>
              </form>
          </div>
    </div>
</body>