<?php 
$titulo = "Inicio";
require("../layout/header.php");

?>

<style>
    body {
      overflow-x: hidden;
    }
    #sidebar {
      min-height: 100vh;
      transition: width 0.3s;
    }
    #sidebar.collapsed {
      width: 60px;
    }
    #sidebar ul li a {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
</head>
<body>

<!-- Barra superior -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3">
  <button class="btn btn-outline-light me-3" id="toggleSidebar">☰</button>
  <a class="navbar-brand" href="login.php">MiSistema</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link active" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Perfil</a>
      </li>
    </ul>
  </div>
</nav>

<div class="d-flex">
  <!-- Menú lateral -->
  <div id="sidebar" class="bg-light border-end p-2" style="width: 200px;">
    <ul class="nav flex-column">
      <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Usuarios</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Reportes</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Salir</a></li>
    </ul>
  </div>

  <!-- Contenido principal -->
  <div class="p-4 flex-grow-1">
    <h2>Bienvenido</h2>

    <h2 class="mb-4">Dashboard</h2>
        <div class="bg-primary p-5">
            <h1>tabla</h1>
        </div>
  </div>
</div>

<script>
  const toggleBtn = document.getElementById('toggleSidebar');
  const sidebar = document.getElementById('sidebar');

  toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
  });
</script>

<?php require("../layout/footer.php"); ?>