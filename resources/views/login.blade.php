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
    <title>Login</title>
</head>
<body >
    <div class="container-fluid p-0" style="background-image:url(images/welcome.svg); background-repeat:no-repeat; background-position:center; width:100%; height:100vh;">
          @include('partials.navbar')

          <div class="sign-in-form d-flex justify-content-center align-items-center flex-column" style=" width:100%; height:100vh;">

            <h1>Welcome Back</h1>
            <form style="width: 50%; border: 3px solid rgba(113, 135, 249, 1) ; border-radius:10px; box-shadow:10px 10px rgb(52, 51, 51); background-color:rgba(179, 174, 174, 0.733);" class="container fluid p-4" >
                <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label"></label>
                  <input type="email" class="form-control" id="usernameEmail" aria-describedby="emailHelp" placeholder="Email or User ID">
                  <div id="emailHelp" class="form-text" style="color:black ;">We'll never share your details with anyone else.</div>
                </div>
                <div class="mb-3">
                  
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="keep-signed-in">
                  <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color:rgba(113, 135, 249, 1) ;">Login</button>
              </form>
          </div>
    </div>
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>