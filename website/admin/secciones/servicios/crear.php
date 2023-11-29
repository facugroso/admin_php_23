<?php include("../../templates/header.php"); ?>

Crear servicios


<div class="card">
    <div class="card-header">
    </div>


    <div class="card-body">
        <form action="" enctype="multipart/from-data" method="post">

            <div class="mb-3">
              <label for="icono" class="form-label">Icono:</label>
              <input type="text"
                class="form-control" name="icono" id="icono" aria-describedby="helpId" placeholder="Icono">
            </div>

            <div class="mb-3">
              <label for="titulo" class="form-label">Título</label>
              <input type="text"
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Título">
            </div>

            <div class="mb-3">
              <label for="descripción" class="form-label">Descripción</label>
              <input type="text"
                class="form-control" name="descripción" id="descripción" aria-describedby="helpId" placeholder="Descripción">
            </div>

            <button type="button" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>


    <div class="card-footer text-muted">
    </div>
</div>

<?php include("../../templates/footer.php"); ?>