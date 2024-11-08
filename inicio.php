<?php include("db.php"); ?>

<?php include("includes/header.php"); ?>

<div class="container">
    <a href="index.php" style="float: right;" class="btn btn-primary">INICIO</a>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message']?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php session_unset(); } ?>
                <div class="card card-body">
                    <form action="save.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Producto" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="number" name="stock" class="form-control" placeholder="Stock">
                        </div>
                        <input type="submit" name="save" class="btn btn-success btn-block" value="Guardar">
                    </form>
                </div>
            </div>

            <div class="col-md-8">
                <form action="" method="GET" class="form-inline mb-3">
                    <input type="text" name="search" class="form-control mr-sm-2" placeholder="Buscar productos" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Buscar</button>
                    <?php if (isset($_GET['search']) && $_GET['search'] != '') { ?>
                        <a href="inicio.php" class="btn btn-outline-danger ml-2">Quitar filtro</a>
                    <?php } ?>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Stock</th>
                            <th>Creado el</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Verificar si hay una búsqueda
                        $search = isset($_GET['search']) ? mysqli_real_escape_string($conexion, $_GET['search']) : '';
                        
                        // Modificar la consulta SQL para incluir el filtro de búsqueda
                        $query = "SELECT * FROM productos";
                        if ($search) {
                            $query .= " WHERE name LIKE '%$search%'";
                        }
                        
                        $result_prod = mysqli_query($conexion, $query);    

                        while($row = mysqli_fetch_assoc($result_prod)) { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['stock']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
