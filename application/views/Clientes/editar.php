<h1>Cliente</h1>
<form action="<?php echo site_url('Clientes/editar/' . $clientes->id); ?>" method="post">
    <label for="nit">nit:</label>
    <input type="text" name="nit" value="<?php echo $clientes->nit; ?>" required>


    <label for="dpi">dpi:</label>
    <input type="text" name="dpi" value="<?php echo $clientes->dpi; ?>" required>

    <label for="marca">nombre:</label>
    <input type="text" name="nombre" value="<?php echo $clientes->nombre; ?>" required>

    
    <label for="apellido">apellido:</label>
    <input type="text" name="apellido" value="<?php echo $clientes->apellido; ?>" required>


    <label for="apellido_casada">apellido_casada:</label>
    <input type="text" name="apellido_casada" value="<?php echo $clientes->apellido_casada; ?>" required>

    <label for="direccion">direccion:</label>
    <input type="text" name="direccion" value="<?php echo $clientes->direccion; ?>" required>



        
    <label for="correo_electronico">correo_electronico:</label>
    <input type="text" name="correo_electronico" value="<?php echo $clientes->correo_electronico; ?>" required><br>



    <label for="nacionalidad">nacionalidad:</label>
    <input type="text" name="nacionalidad" value="<?php echo $clientes->nacionalidad; ?>" required><br>




    <label for="numero_telefonico">numero_telefonico:</label>
    <input type="text" name="numero_telefonico" value="<?php echo $clientes->numero_telefonico; ?>" required><br>


    
    <input type="submit" value="Actualizar Clientes"><br>
</form>