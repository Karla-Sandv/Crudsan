<?php
$url_base="/../TECNOCLINICLTAY/";
?>
<!DOCTYPE html>
<html>
<head>
<title>TecnoClinic</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
<style>
            html, body {
    margin: 0;
    padding: 0;
}

header {
    background-color: #F0F3F4;
    padding: 28px 0;
    text-align: center;
    font-size: 18px;
    color: black;
}

nav {
    background-color: #229954 ;
    padding: 20px 0;
    text-align: center;
    font-size: 18px;
    color: white;
}

content {
    padding: 30px;
    width: 100%;
    background-color: #ABEBC6;
    height: 600px;
    box-sizing: border-box;
}
article {
    padding: 30px;
    width: 100%;
    background-color:  #ECF0F1;
    height: 800px;
    box-sizing: border-box;
}

footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}
                .btn-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-left {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

    /* Estilos para el botón de búsqueda */
    .search-bar {
        display: flex;
        align-items: center;
    }

    .search-bar input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .search-bar button {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        margin-left: 10px;
        cursor: pointer;
        border-radius: 5px;
    }

    .search-bar button:hover {
        background-color: #218838;
    }

    /* Estilos para la barra de navegación */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #229954;
        padding: 20px 0;
        font-size: 18px;
        color: white;
    }

    .navbar ul {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
    }

    .navbar li {
        margin-right: 20px;
    }

    .navbar a {
        text-decoration: none;
        color: white;
    }

    .navbar a:hover {
        text-decoration: underline;
    }

    /* Estilos para el contenido */
    content {
        padding: 30px;
        width: 100%;
        background-color: #ABEBC6;
        height: 600px;
        box-sizing: border-box;
    }

    article {
        padding: 30px;
        width: 100%;
        background-color:  #ECF0F1;
        height: 800px;
        box-sizing: border-box;
    }

    /* Otros estilos */
    .btn-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo-left {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
        margin: 0;
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }

    
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: black;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 1px 0 0 1px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: black;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: black;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .overlay {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: 0.5s;
        }

        .overlay-content {
            position: relative;
            top: 25%;
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .overlay a:hover,
        .overlay a:focus {
            color: #f1f1f1;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        @media screen and (max-height: 450px) {
            .overlay a {
                font-size: 20px
            }

            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
  
  /* Estilos para el botón de búsqueda */
  .search-bar {
    display: flex;
    align-items: center;
  }
  
  .search-bar input[type="text"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .search-bar button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    margin-left: 10px;
    cursor: pointer;
    border-radius: 5px;
  }
  
  .search-bar button:hover {
    background-color: #218838;
  }

        #header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        table, th, td {
  border:0px solid black;
  text-align: center;
  align-content: center;

        }
        a {
  color: dodgerblue;
}
titulo {
    font-family:Helvetica;
    font-size: 60px;
    font-weight: bold;
    color:  #218838;
  }
  h1 {
    font-family:Helvetica;
    font-size: 40px;
    font-weight: ;
    color:  #218838;
  }

</style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<header>
    <div class="logo-left">
        <img src="https://i.postimg.cc/fL1VJ1G3/55306527-removebg.png" width="130" height="80">
        <img src="https://seeklogo.com/images/U/universidad-tecnologica-del-valle-de-toluca-logo-82F16BF313-seeklogo.com.png" alt="Foto logo es" width="100" height="50">
    </div>
</header>

</nav>
<div id="encabezado">
    <br>
   <center><titulo>TecnoClinic</titulo></center>
    <br>
</div>
<br>
<div id="section">

</div>
<div id="content">
</div>
</nav>
<main class="container">