<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Recepten</title>
    <style>
        * {
  margin: 0;
  padding: 0;
}
.box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    min-height: 60vh;
  }
  
  .receptContainer {
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin: 0;
  }
  
  .receptContainer .card {
    position: relative;
    width: 500px;
    height: auto;
    background: rgba(255, 255, 255, 0.05);
    margin: 20px;
    padding: 0 0 20px 0;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(10px);
  }

  .receptContainer .infoCard {
    position: relative;
    width: 700px;
    height: auto;
    background: rgba(255, 255, 255, 0.05);
    margin: 20px;
    padding: 0 0 20px 0;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(10px);
  }
  .receptContainer .infoCard .content {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: 0.5s;
  }

  .receptContainer .infoCard .content .imgBx {
    position: relative;
    width: 700px;
    height: 400px;
    overflow: hidden;
  }
  
  .receptContainer .card .content {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: 0.5s;
  }

  .receptContainer .infoCard .content .imgBx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  /* .container .card:hover .content {
    transform: translateY(-20px);
  } */
  
  .receptContainer .card .content .imgBx {
    position: relative;
    width: 500px;
    height: 400px;
    overflow: hidden;
  }
  
  .receptContainer .card .content .imgBx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .receptContainer .card .content .contentBx h3 {
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 500;
    font-size: 18px;
    text-align: center;
    margin: 20px 0 10px;
    line-height: 1.1em;
  }

  .navContainer {
    max-width: 1330px;
    display: flex;
    flex-wrap: inherit;
    align-items: right;
    justify-content: space-between;
  }
  .navbar-brand {
    padding-left: 100px;
  }
  .logout {
    border: none;
    margin-top: 10px;
    background: none;
  }

  .leesMeer {
    border-radius: 15px;
    background-color: yellow; 
    border: 0px; 
    padding: 20px;
    margin: 10px;
    width: 300px;
    
  }
  a:link {
      text-decoration: none;
      color: black;
}

a:visited {
      text-decoration: none;
      color: black;
}

a:hover {
      text-decoration: none;
}

a:active {
      text-decoration: none;
}

.btnEdit {
  float:left; 
  padding: 20px;
  border-radius: 15px;
  background-color: yellow; 
  border: 0px; 
  margin: 10px;
  width: auto;
}

  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: yellow;">
        <div class="navContainer">
            <a class="navbar-brand" href="/"><b>Premium Recepten</b></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" >
                    <li class="nav-item"><a class="nav-link" href="/">Alle Recepten</a></li>
                    @auth
                    <li class="nav-item"><a class="nav-link" href="/create">Maak Een Nieuw Recept</a></li>
                      <li class="nav-item"><a class="nav-link" href="/">{{auth()->user()->name}}</a></li>
                      <li class="nav-item right"><form action="/logout" method="post">
                        @csrf
                      <button type="submit" class="logout">Logout</button></form>
                        </li>
                    
                    @else
                    <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>