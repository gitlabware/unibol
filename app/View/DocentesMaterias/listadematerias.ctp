<table align="center">
    <tr>
        <td><h2>CARRERA : <?php echo $materias['0']['Carrera']['nombre'] ?></h2> </td>

    </tr>
    <tr>
        <td>MALLA : <?php echo $materias['0']['Malla']['nombre'] ?></td>

    </tr>
</table>
<div align="center">
    <h3>PREPARATORIO</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 2): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>PRIMER SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 3): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>SEGUNDO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 4): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>TERCER SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 5): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>CUARTO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 6): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>QUINTO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 7): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>SEXTO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 8): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>SEPTIMO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 9): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>OCTABO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 10): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas', $ma['DocentesMateria']['id'], $idcarrera, $idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>NOVENO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 11): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "NOTAS ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas',$ma['DocentesMateria']['id'],$idcarrera,$idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<div align="center">
    <h3>DECIMO SEMESTRE</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nombre</th>
                <th>Docente</th>
                <th>Pre-Requisito</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($materias as $ma): ?>
                <?php if ($ma['Materia']['semestre_id'] == 12): ?>
                    <tr>
                        <td><?php echo $ma['Materia']['sigla'] ?></td>
                        <td><?php echo $ma['Materia']['nombre'] ?></td>
                        <td><?php echo $ma['User']['nombre_completo'] ?></td>
                        <td>
                            <?php echo $ma['Materia']['r1'] ?>,
                            <?php echo $ma['Materia']['r2'] ?>,
                            <?php echo $ma['Materia']['r3'] ?>,
                            <?php echo $ma['Materia']['r4'] ?>
                        </td>
                        <td>
                            <?php
                            echo $this->Html->image("iconos/calificaciones.png", array(
                                "title" => "notas ",
                                'url' => array('controller' => 'Alumnosnotas', 'action' => 'notas',$ma['DocentesMateria']['id'],$idcarrera,$idmalla)
                            ));
                            ?> 
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>
<!-- sidebar -->
<?php echo $this->element('sidebar/mallas'); ?>
<!-- fin sidebar -->
<?php echo $this->element('jstablas'); ?>
