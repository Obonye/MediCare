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
<body style="background-image:url(images/authentication.svg); background-repeat:no-repeat; background-position:left; width:100%; height:100vh;">
    <div class="container-fluid p-0" >

        @include('partials.navbar')
          <div class="sign-up-form d-flex justify-content-center align-items-center flex-column container-fluid p-4" style=" width:100%; height:100vh;">
            <h1>Sign Up</h1>
              <form class="col g-3 d-flex justify-content-center align-items-center flex-column container-fluid" style="width:50%; border: 3px solid rgba(113, 135, 249, 1) ; border-radius:10px; box-shadow:10px 10px rgb(52, 51, 51); background-color:rgba(179, 174, 174, 0.733);">
                <div class="col-md-8">
                  <label for="inputEmail4" class="form-label"></label>
                  <input type="email" class="form-control" id="Email" placeholder="Email">
                </div>
                <div class="col-md-8">
                    <label for="inputEmail4" class="form-label"></label>
                    <input type="text" class="form-control" id="userName" placeholder="Username">
                  </div>
                <div class="col-md-8">
                    <label for="Password" class="form-label"></label>
                  <input type="password" class="form-control" id="Password" placeholder="Password">
                </div>
                <div class="col-md-8">
                    <label for="vPassword" class="form-label"></label>
                    <input type="password" class="form-control" id="vPassword" placeholder="Verify Password">
                  </div>
                <div class="col-md-8">
                  <label for="inputAddress" class="form-label"></label>
                  <input type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
                <div class="col-md-8">
                  <label for="inputAddress2" class="form-label"></label>
                  <input type="text" class="form-control" id="lastName" placeholder="Last Name" >
                </div>
                <div class="col-md-8">
                  <label for="inputCity" class="form-label"></label>
                  <input type="number" class="form-control" id="idNumber" placeholder="ID Number">
                </div>
                <div class="col-md-8">
                  <label for="inputState" class="form-label"></label>
                    <input type="text" class="form-control" id="city" placeholder="City/Town/Village">
                </div>
                <div class="col-md-8">
                  <label for="inputZip" class="form-label"></label>
                  <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number">
                </div>
                <div class="col-md-8 d-flex justify-content-around">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Female
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Other
                    </label>
                  </div>
                </div>
                <div class="col-md-8 d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary" style="background-color:rgba(113, 135, 249, 1) ;width:300px;">Sign Up</button>
                </div>
              </form>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>