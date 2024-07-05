<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/3edd4ce379.js" crossorigin="anonymous"></script>
</head>

<body>

  <header>
    <nav>


      <div id="logo" class="navChild"><img id="logocoi" src="./pictures/logo.png" alt="Logo de COI"></div>

      <div id="menu" class="navChild">
        <a href="/link"><i class="fas fa-search"></i></a>
        <input type="search" id="site-search" name="q" placeholder="Buscar" />
        <button id="button-search">Buscar</button>

      </div>

      <div id="menu2" class="navChild">
        <button id="cart-button"><a href="/link"><i class="fas fa-shopping-cart"></i></a> Carrito</button>
        <button id="user-button"><a href="/link"><i class="fas fa-user"></i></a>Perfil</button>
        <button id="button1"><a href="/link">Button 1</a></button>
        <button id="button2"><a href="/link">Button 2</a></button>
      </div>


    </nav>

  </header>

  <div id="banner">

  </div>

  <main role="main" id="textBanner">
    <article>
      <h2>¿QUIÉNES SOMOS?</h2>
      <p>Somos una empresa Mexicana dedicada a la venta e instalacion de TI ,líderes en productos de electrónica y Redes, buscamos brindarte la mejor atención, calidad y asesoría comercial para el desarrollo de proyectos de infraestructura tecnológica con una gran variedad de productos certificados, con marcas de altos estándares de calidad.
      </p>
    </article>
  </main>

  <h1 id="textoCarusel">Carusel de ofertas</h1>
  <div id="carusel">

    <?php
    include 'configIndex.php';

    try {
      $host = $config['DB_HOST'];
      $dbname = $config['DB_DATABASE'];
      $username = $config['DB_USERNAME'];
      $password = $config['DB_PASSWORD'];
      $table = $config['DB_TABLE'];

      $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $items = array();
      // Fetching data from the table specified in $config['DB_TABLE']
      $stmt = $conn->query("SELECT * FROM $table");
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $items[] = $row;
      }

      if (empty($items)) {
        echo '<p class="lead text-center">No listings in this category yet.</p>';
      } else {
        foreach ($items as $item) {
          echo '<div class="contenedorProducto">
                <img src="pictures/Untitled.jpg" alt="Producto 1">
                <h3>Producto 1</h3>
                <p>Descripción del producto 1</p>
                <p>$100.00</p>
                <button>Comprar</button>
                </div>';
        }
      }
    } catch (PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    ?>







  </div>
  <h1>Categorias</h1>
  <div id="categorias">

    <div class="grid-container">
      <div class="grid-item" style="background-image: url('/pictures/categorias/videoconferenciasala.png');">Salas de videoconferencia</div>
      <div class="grid-item">Telefonos</div>
      <div class="grid-item">Cuidado personal</div>
      <div class="grid-item">Cableado estructurado</div>
      <div class="grid-item">Audifonos</div>
      <div class="grid-item">1</div>
      <div class="grid-item">2</div>
      <div class="grid-item">3</div>
      <div class="grid-item">4</div>
    </div>
  </div>

  <footer>
    <p>&copy; HTML Cheat Sheet</p>
    <address>
      Contact <a href="mailto:me@html6.com">me</a>
    </address>
  </footer>


</body>

</html>