
<table class="table table-bordered table-hover">
  <thead>
    <tr>

      <th>Id</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Clave</th>
      <th>Cargo</th>
    </tr>
  </thead>
  <tbody>
    <?php
    require_once('../../model/conexion.php');
    class verUsuario extends Conexion{
     public function verUsuario($id,$nombre,$email,$clave,$cargo)
     {
        parent::conectar();
        $consulta = "select * from usuarios";
        $select_posts= mysqli_query($consulta);
        while($row = mysqli_fetch_assoc($select_posts)){
          $id = $row['id'];
          $name = $row['nombre'];
          $email = $row['email'];
          $clave = $row['clave'];
          $cargo = $row['cargo'];
        
          echo "<tr>";
          echo "<td>$id</td>";
          echo "<td>$name</td>";
          echo "<td>$email</td>";
          echo "<td>$clave</td>";
          echo "<td>$cargo</td>";
        }
      }
    }
    ?>
  </tbody>
</table>