<h1>Listado de clientes</h1>
<a href="<?php echo site_url('Clientes/crear'); ?>">Registrar Clientes</a>
<table>
    <tr>
        <th>NIT</th>
        <th>DPI</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Apellido casada</th>
        <th>Direccioón</th>
        <th>Correo electrónico</th>
        <th>Nacionalidad</th>
        <th>Numero Telefónico</th>
    </tr>
    <?php foreach ($clientes as $cliente): ?>
    <tr>
        <td><?php echo $cliente->nit; ?></td>
        <td><?php echo $cliente->DPI; ?></td>
        <td><?php echo $cliente->apelldio; ?></td>
        <td><?php echo $cliente->apellido_casada; ?></td>
        <td><?php echo $cliente->direcion; ?></td>
        <td><?php echo $cliente->correo_electronico; ?></td>
        <td><?php echo $cliente->nacionalidad; ?></td>
        <td><?php echo $cliente->numero_telefonico; ?></td>
        <td>
            <a href="<?php echo site_url('clientes/editar/' . $cliente->id); ?>">Editar</a>
            <a href="<?php echo site_url('clientes/eliminar/' . $cliente->id); ?>">Eliminar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
