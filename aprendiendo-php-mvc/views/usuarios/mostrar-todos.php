<h1>Todos los usuarios</h1>
<?php while($usuario = $usuarios->fetch_object()): ?>
    <?= $usuario->id ?> - <?= $usuario->nombre?> <br/>
<?php endwhile;?>