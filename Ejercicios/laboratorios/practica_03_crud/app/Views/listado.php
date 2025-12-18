<!DOCTYPE html>
<html>
<head>
    <title>CRUD CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container p-4">
    <h1>CRUD Personas (CodeIgniter 4)</h1>
    
    <div class="card p-3 mb-4">
        <form action="<?= base_url('/crear') ?>" method="POST">
            <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" required>
            <input type="text" name="paterno" placeholder="Paterno" class="form-control mb-2" required>
            <input type="text" name="materno" placeholder="Materno" class="form-control mb-2" required>
            <button class="btn btn-primary">Guardar</button>
        </form>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datos as $d): ?>
            <tr>
                <td><?= $d['nombre'] ?></td>
                <td><?= $d['paterno'] ?></td>
                <td><?= $d['materno'] ?></td>
                <td>
                    <a href="<?= base_url('/eliminar/'.$d['id_nombre']) ?>" class="btn btn-danger btn-sm">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>