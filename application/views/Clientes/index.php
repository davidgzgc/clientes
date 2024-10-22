<h1>Listado de clientes</h1>
<a href="<?php echo site_url('Clientes/crear'); ?>">Registrar Clientes</a>
<table>
    <tr>
        <th>NIT</th>
        <th>DPI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Apellidos_casada</th>
        <th>Direcion</th>
        <th>Correo_electronico</th>
        <th>Nacionalidad</th>
        <th>Numero_Telefonico</th>
    </tr>
    <?php foreach ($clientes as $clientes): ?>
    <tr>
        <td><?php echo $clientes->NIT; ?></td>
        <td><?php echo $clientes->DPI; ?></td>
        <td><?php echo $clientes->Apellido; ?></td>
        <td><?php echo $clientes->Apellidos_casada; ?></td>
        <td><?php echo $clientes->Direcion; ?></td>
        <td><?php echo $clientes->Correo_electronico; ?></td>
        <td><?php echo $clientes->Nacionalidad; ?></td>
        <td><?php echo $clientes->Numero_Telefonico; ?></td>
        <td>
            <a href="<?php echo site_url('clientes/editar/' . $cliente->id); ?>">Editar</a>
            <a href="<?php echo site_url('clientes/eliminar/' . $cliente->id); ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>