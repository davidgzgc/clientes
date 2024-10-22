<h1>Agregar Clientes</h1>
<form action="<?php echo site_url('clientes/crear'); ?>" method="post">
    <div>

    <label for="nit">NIT:</label>
    <input type="text" name="nit" required>

    </div><br>

    <div>  

    <label for="dpi">DPI:</label>
    <input type="text" name="dpi" required>

    </div><br>

    <div>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    </div><br>

    <div>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required>


    </div><br>

  <div>

  <label for="apellido_casada">Apellidos_casada:</label>
  <input type="text" name="apellido_casada" required>

  </div><br>

   <div>

   <label for="direcion">Direcion</label>
   <input type="text" name="direcion" required>


   </div><br>

  <div>

  <label for="correo_electronico">Correo_electronico:</label>
  <input type="text" name="correo_electronico" required>


  </div><br>
    

<div>

<label for="nacionalidad">Nacionalidad</label>
<input type="text" name="nacionalidad" required> 


</div><br>



<div>

<label for="numero_telefonico">Numero_Telefonico</label>
<input type="text" name="numero_telefonico" required> 


</div><br>





    <input type="submit" value="Crear Clientes">
</form>