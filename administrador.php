<?php 
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport"content="width-device-width,initial-scale=1.0">
    <title>Dashboard</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
    rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet"href="css/estilosadmin.css">
</head>
<body>
    <div class="container">
         <aside>
             <div class="top">
                  <div class="logo">
                       <img src="images/WhatsApp Image 2022-03-24 at 3.25.21 PM.jpeg">
                       <h2>BARBER<span class="danger">EXOTIC</span></h2>
                  </div>
                  <div class="close"id="close-btn">
                      <span class="material-icons-sharp">close</span>
                  </div>
             </div>
             <div class="sidebar">
                  <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                  </a>
                  <a href="#" class="active">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Perfil</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Ordenes</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Análisis</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Mensajes</h3>
                    <span class="message-count">26</span>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Productos</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Reportes</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Ajustes</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">add</span>
                    <h3>Añadir tabla</h3>
                  </a>
                  <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Cerrar sesión</h3>
                  </a>
             </div>
         </aside>
         <!------------------END OF ASIDE---------------------->
         <main>
             <h1>Dashboard</h1>

             <div class="date">
                 <input type="date">
             </div>

             <div class="insights">
                <div class="sales">
                  <span class="material-icons-sharp">analytics</span>
                  <div class="middle">
                    <div class="left">
                        <h3>Total sales</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progress">
                      <svg>
                        <circle cx='38' cy='38' r='29'></circle>
                      </svg>
                      <div class="number">
                        <p>81%</p>
                      </div>
                    </div>
                  </div>
                  <small class="text-muted">Durante las 24 horas</small>
                </div>
                <!------------------End of sales------------------->
                <div class="expenses">
                  <span class="material-icons-sharp">bar_chart</span>
                  <div class="middle">
                    <div class="left">
                        <h3>Total Expenses</h3>
                        <h1>$14,160</h1>
                    </div>
                    <div class="progress">
                      <svg>
                        <circle cx='38' cy='38' r='30'></circle>
                      </svg>
                      <div class="number">
                        <p>62%</p>
                      </div>
                    </div>
                  </div>
                  <small class="text-muted">Durante las 24 horas</small>
                </div>
              <!------------------End of expenses------------------->
              <div class="income">
                <span class="material-icons-sharp">stacked_line_chart</span>
                <div class="middle">
                  <div class="left">
                      <h3>Total Income</h3>
                      <h1>$10,864</h1>
                  </div>
                  <div class="progress">
                    <svg>
                      <circle cx='38' cy='38' r='30'></circle>
                    </svg>
                    <div class="number">
                      <p>44%</p>
                    </div>
                  </div>
                </div>
                <small class="text-muted">Durante las 24 horas</small>
              </div>
            <!------------------End of income------------------->
             </div>
            <!------------------Final de los insights----------->

            <div class="recent-orders"><br>
              <h2>Usuarios</h2>
              <table>
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombres de Usuario</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                    <th>Contacto</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php

$sql= "SELECT * FROM `usuario`";
$result=mysqli_query($conec, $sql);

while($filas=mysqli_fetch_assoc($result))
{
    echo "<tr>";
        echo "<td>"; echo $filas['Id_usuario']; echo "</td>";
        echo "<td>"; echo $filas['Nombre_usuario']; echo "</td>";
        echo "<td>"; echo $filas['Contraseña_usuario']; echo "</td>";
        echo "<td>"; echo $filas['Email_usuario']; echo "</td>";
        echo "<td>"; echo $filas['Contacto_u']; echo "</td>";
        echo "<td> <a href='modificar.php?Id_usuario=".$filas['Id_usuario']."'><button class='boton' type='button'>Modificar</button></a> </td>";
        echo "<td> <a href='eliminar.php?Id_usuario=".$filas['Id_usuario']."''><button class='boton' type='button'>Eliminar</button></a> </td>"; 
    echo "</tr>";
}
 ?>
                </tbody>
              </table>
              <a href="#">Show All</a>
            </div>
         </main>
         <!-----------------END OF MAIN------------------------->

         <div class="right">
           <div class="top">
             <button id="menu-btn">
              <span class="material-icons-sharp">menu</span>
             </button>
             <div class="theme-toggler">
              <span class="material-icons-sharp active">light_mode</span>
              <span class="material-icons-sharp">dark_mode</span>
            </div>
            <div class="profile">
              <div class="info">
                <p>Hola, <b>Exotico</b></p>
                <small class="text-muted">Admin</small>
              </div>
              <div class="profile-photo">
                <img src="images/perfil_orn.jpg">
              </div>
            </div>
           </div>
           <!-----------------END OF TOP----------------------->
           <div class="recent-updates">
             <h2>Actualizaciones recientes</h2>
             <div class="updates">
               <div class="update">
                 <div class="profile-photo">
                   <img src="images/fanning.jpg">
                 </div>
                 <div class="message">
                   <p><b>Elle fanning</b> sus servicios con las mujeres es
                  de lo mejor, y muy especial.</p>
                  <small class="text-muted">hace 2 minutos</small>
                 </div>
               </div><br>
               <div class="update">
                <div class="profile-photo">
                  <img src="images/tom.jpg">
                </div>
                <div class="message">
                  <p><b>Tom Cruise</b> Muy buen servicio en esta plataforma.</p>
                 <small class="text-muted">hace 2 minutos</small>
                </div>
              </div>               
              <div class="update">
                <div class="profile-photo">
                  <img src="images/alex.jpg">
                </div>
                <div class="message">
                  <p><b>Alex Campos</b> Un muy buen servicio de corte
                  de cabello, muy profesional.</p>
                 <small class="text-muted">hace 2 minutos</small>
                </div>
              </div>
             </div>
           </div>
           <!-----------END OF RECENT UPDATES---------------->
           <div class="sales-analytics">
             <h2>Análisis de ventas</h2>
             <div class="item online">
               <div class="icon">
                <span class="material-icons-sharp">shopping_cart</span>
               </div>
               <div class="right">
                 <div class="info">
                   <h3>ONLINE ORDERS</h3>
                   <small class="text-muted">Last 24 Hours</small>
                 </div>
                 <h5 class="success">+39%</h5>
                 <h3>3849</h3>
               </div>
             </div>
             <div class="item offline">
              <div class="icon">
               <span class="material-icons-sharp">local_mall</span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>OFFLINE ORDERS</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="danger">-17%</h5>
                <h3>1100</h3>
              </div>
            </div><div class="item customers">
              <div class="icon">
               <span class="material-icons-sharp">person</span>
              </div>
              <div class="right">
                <div class="info">
                  <h3>NEW CUSTOMERS</h3>
                  <small class="text-muted">Last 24 Hours</small>
                </div>
                <h5 class="success">+25%</h5>
                <h3>849</h3>
              </div>
            </div>
            <div class="item add-product">
              <div>
                <span class="material-icons-sharp">add</span>
                <h3>Add Product</h3>
              </div>
            </div>
           </div>
         </div>
    </div>

    <script src="js/orders.js"></script>
    <script src="js/indexadmin.js"></script>
</body>
</html>