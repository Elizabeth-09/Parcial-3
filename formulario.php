<form action="guardar_tarea.php" method="post">
    <div class="form-group">
    <label>Nombre de la tarea</label>
    <input type="text" name="Nombre_Tarea" class="form-control" placeholder="Cocinar, Limpiar, Tirar la basura " require>
    </div>
    <div class="form-group">
    <label>Descripcion</label>
    <textarea class="form-control" name="Descripcion" rows="2" required  placeholder="Descripcion"></textarea>
    </div>
    <div class="form-group">
    <label>Fecha de registro</label>
    <input type="date" name="fecha" class="form-control" required>
    </div>

    </div>

    <input type="submit" class="btn btn-success btn-block" value="Registre" name="Registrar">

    </form>