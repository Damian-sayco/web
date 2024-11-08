<?php
include("db.php");
$title = '';
$description = '';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM productos WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $stock = $row['stock'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $name = trim($_POST['name']);
  $stock = trim($_POST['stock']);

  if (!empty($name) && !empty($stock)) {
    $query = "UPDATE productos SET name = '$name', stock = '$stock' WHERE id=$id";
    mysqli_query($conexion, $query);
    $_SESSION['message'] = 'Producto Actualizado Correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: inicio.php');
  } else {
    $_SESSION['message'] = 'El nombre y el stock no pueden estar vacíos';
    $_SESSION['message_type'] = 'danger';
  }
}
?>

<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="name" type="text" class="form-control" value="<?php echo isset($name) ? $name : ''; ?>" placeholder="Cambiar Producto">
        </div>
        <div class="form-group">
          <input name="stock" type="number" class="form-control" value="<?php echo isset($stock) ? $stock : ''; ?>" placeholder="Stock">
        </div>
        <button class="btn-success" name="update">
          Actualizar
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>