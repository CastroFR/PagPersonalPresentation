<?php
$nombre = "Kevin Castro";
$edad = 20;
$sexo = "Masculino";
$departamento = "Chalatenango";
$municipio = "Comalapa";
$distrito = "Sur";

$gustos = [
    'musica' => ['Rock', 'Salsa/Merengue', 'Electrónica'],
    'comida' => ['Pizza', 'Lasaña', 'Pupusas'],
    'pasatiempos' => ['Hacer ejercicio', 'Disfrutar del campo', 'Conocer lugares']
];

$listas = [
    'mascotas' => ['Becerro', 'Caballo', 'Loro', 'Conejo'],
    'colores' => ['Azul', 'Negro', 'Rojo', 'Verde'],
    'bebidas' => ['Café', 'Té verde', 'Jugo de naranja', 'Agua mineral']
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de <?php echo $nombre; ?></title>
    <link rel="stylesheet" href="Castro.Style.css">
</head>
<body>
    <div class="perfil-container">
        <!-- Sección de datos personales -->
        <div class="datos-personales">
            <h1>Perfil de <?php echo $nombre; ?></h1>
            <p><strong>Edad:</strong> <?php echo $edad; ?></p>
            <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>
            <p><strong>Ubicación:</strong> <?php echo "$municipio, $departamento, $distrito"; ?></p>
        </div>

        <!-- Tabla de gustos -->
        <h2>Gustos Preferidos</h2>
        <table class="gustos-table">
            <tr>
                <th>Género Musical</th>
                <th>Comida Favorita</th>
                <th>Pasatiempos</th>
            </tr>
            <tr>
                <?php foreach($gustos as $categoria): ?>
                <td>
                    <ul>
                        <?php foreach($categoria as $item): ?>
                        <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>
                <?php endforeach; ?>
            </tr>
        </table>

        <!-- Sección de listas -->
        <h2>Mis Favoritos</h2>
        <div class="listas-container">
            <?php foreach($listas as $titulo => $elementos): ?>
            <div class="lista">
                <h3><?php echo ucfirst($titulo); ?></h3>
                <ul>
                    <?php foreach($elementos as $item): ?>
                    <li><?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>