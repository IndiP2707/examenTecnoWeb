<!--<?php
if(!empty($listadosecciones)){
    foreach($listadosecciones as $item){
        // echo $item->nombre_curso . " - " . $item->fecha_inicio . " - " . $item->cupos . "<br>";
        // echo $item->nombre_curso."<br>";
    }
}
?>-->


<?php if (!empty($listadosecciones)): ?>
    <div class="row text-center">
        <?php foreach ($listadosecciones as $curso): ?>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="<?= base_url() . $curso->ruta . $curso->nombre_archivo ?>" alt="<?= htmlspecialchars($curso->alt) ?>" width="400" height="300">
                    <p><strong><?= htmlspecialchars($curso->nombre_curso) ?></strong></p>
                    <p>Empieza <?= date("d M Y", strtotime($curso->fecha_inicio)) ?></p>
                    <p><span class="badge"><?= $curso->cupos ?> cupos</span></p>
                    <button class="btn" data-toggle="modal" data-target="#myModal">INSCRIBIRSE</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <p class="text-center">No hay cursos disponibles actualmente.</p>
<?php endif; ?>
