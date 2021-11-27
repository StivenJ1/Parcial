<html>
    <head>
        <title>Lista de alumnos</title>
        </head>
        <body>
        <?php
            include("conexion.php");
            $sql="select * from alumnos";
            $resultado=mysqli_query($conexion,$sql);
            ?>

        <table>
            <thead>
                <tr>
                    <th>no.</th>
                    <th>Nombre</th>
                    <th>No. control</th>
                    <th>Acciones</th>
                    </tr>
            </thead>
            <tbody>
                <?php
                while($filas=mysqli_fetch_array($resultado)){

                
                ?>

                <tr>
            <th><?php echo $filas['id']?></th>
            <th><?php echo $filas['nombre']?></th>
            <th><?php echo $filas['nocontrol']?></th>
            </tr>
            <?php
                }
            ?>
                </tbody>

</body>
</html>