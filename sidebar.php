<div class="sidebar" >
  <div class="logocontent">
  <div class="logo">
  <i class='bx bxl-c-plus-plus'></i>
    <div class="logoname">Cavesoft</div>
  </div>
  </div>
  <i class='bx bx-menu-alt-left' id="btn" ></i>
  <ul class="navlist">
    <li>
    <i class='bx bx-search-alt-2'></i>
     <input type="text" placeholder="Search..." class="searchbar">
      <!--<span class="link-name">Dashboard</span>-->
  </li>
  <li>
      <a href="home.php">
      <i class='bx bx-home' ></i>
      <span class="link-name">Inicio</span>
    </a>
  </li>
  <li>
      <a href="#">
      <i class='bx bxs-user'></i>
      <span class="link-name">My User</span>
    </a>
      <!--<span class="link-name">Dashboard</span>-->
  </li>
  <li>
      <a href="index.php">
    <i class='bx bx-hard-hat' ></i>
      <span class="link-name">Empleados</span>
    </a>
    <!--<span class="link-name">Dashboard</span>-->
  </li>
  <li>
      <a href="ocupaciones.php">
    <i class='bx bx-briefcase' ></i>
      <span class="link-name">Empleos</span>
    </a>
    <!--<span class="link-name">Dashboard</span>-->
  </li>
  <li>
      <a href="departamento.php">
    <i class='bx bx-sitemap' ></i>
      <span class="link-name">Departamentos</span>
    </a>
    <!--<span class="link-name">Dashboard</span>-->
  </li>
  </ul>
  <div class="profile_content">
    <div class="profile">
      <div class="profile_details">
        <div class="name_job">
          <div class="name"><?= $_SESSION['nombre']." ".$_SESSION['apellido']?></div>
        </div>
      </div>
      <a href='desloguear.php'><i class="bx bx-log-out" id="logout"></i></a>
    </div>
  </div>
  </div>
</div>
<script>
  let btn = document.querySelector("#btn");
  let sidebar = document.querySelector(".sidebar");
  let searchBtn = document.querySelector(".bx-search-alt-2");
 
  btn.onclick = function(){
  sidebar.classList.toggle("active");
  }
  searchBtn.onclick = function(){
  sidebar.classList.toggle("active");
  }

</script>
