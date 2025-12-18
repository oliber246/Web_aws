<?php require 'conexion.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Gráfico de Edades</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="width: 80%; margin: auto; text-align: center;">
    <h1>Edades de Estudiantes</h1>
    <canvas id="myChart"></canvas>

    <?php
    $nombres = [];
    $edades = [];
    $sql = "SELECT nombre, edad FROM rep_alumnos";
    $res = $mysqli->query($sql);
    while ($r = $res->fetch_assoc()) {
        $nombres[] = $r['nombre'];
        $edades[] = $r['edad'];
    }
    ?>

    <script>
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($nombres); ?>,
                datasets: [{
                    label: 'Edad',
                    data: <?php echo json_encode($edades); ?>,
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
                }]
            }
        });
    </script>
</body>

</html>