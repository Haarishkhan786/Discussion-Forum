<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container{
            background-color: rgb(250, 249, 249);
            height:32vh;
            width: 30vw;
            position: absolute;
            top:10vh;
            left:30vw;
            border-radius: 10px;
        }
        .container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 24vw;
        }
        .container form input{
            border-radius: 20px;
            padding: 1vh;
            margin: 1vh;
        }
        form{
            position: relative;
            left: 5vh;
            top: 1vh;
        }
    </style>
    <title>Admin login</title>
  </head>
  <body>


<div class="container shadow-lg">
    <h5 class="text-center my-3">Enter your details </h5>
  <form>
      <input type="text" placeholder="Username">
      <input type="password" placeholder="Passcode">
      <button class="btn btn-outline-success my-2" style="border-radius: 20px;">Login</button>
  </form>
</div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
