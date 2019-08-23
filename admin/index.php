<?php
    include('header_admin.php');
?>

<body> 
<?php
          if(isset($_SESSION['correou'])){
            $a = $_SESSION['correou'];
            echo "<br> <br>
                <div class='container'><br>
                    <h1 class='mt-5 display-4 text-center'>Bienvenid@ $a</h1>
                </div>";
          }else{
              echo " <br><div class='container'>
              
              <h1 class= 'mt-5 display-4 text-center'>Administrador</h1>
              <div class='row mt-5 col-'>
                  <p class='mx-auto'>Si no estás registrado para hacer uso de esta sección comunicate con el administrador de la Web.</p>
              </div>
          </div>
      
          <div class='container'>
              <div class='row'>
                  <div class='col-md-4 mx-auto mt-5'>
                      <form method='post' action='index.php'>
                          <div class='form-group'>
                              <label for='exampleInputEmail1'>Usuario</label>
                              <input type='text' class='form-control' name = 'admi' aria-describedby='emailHelp' placeholder='Nombre administrador' required>
                          </div>
                          <div class='form-group'>
                              <label for='exampleInputPassword1'>Password</label>
                              <input type='password' class='form-control' name='pass' placeholder='Contraseña' required>
                          </div>
                          <div>
                            <button type='submit' name='login' class='btn btn-primary' >Entrar</button>
                            <a href='../index.php' class='btn btn-outline-danger float-right'>Volver a la pagina inicial</a>
                          </div>
                          
                      </form>
                      
                  </div>
              </div>
          </div>";
          }
?>      

</body>
</html>


<?php
    if(isset($_POST['login'])){
    
        $admi = $_POST['admi'];
        $pass = $_POST['pass'];
        mysqli_set_charset($conexion,"utf8");
        $select_admin= "SELECT nomadmin,contrasenaa FROM administrador where nomadmin='$admi'";
        
        $run_admin = mysqli_query($conexion,$select_admin);
        $check_admin = mysqli_num_rows($run_admin);
    
        $fila = mysqli_fetch_array($run_admin);
        $contraseña = $fila['contrasenaa'];

        if($contraseña == $pass){
            $_SESSION['nomadmin']=$admi;
            echo "<script>alert('Inicio de sesion exitoso')</script>"; 
            echo "<script>window.open('index.php', '_self')</script>"; 
        }else{
          echo "<script>alert('Usuario o contraseña incorrectos')</script>";
          exit();
        }
    }
?>