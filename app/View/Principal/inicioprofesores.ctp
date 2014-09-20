<div class="row-fluid">
    <div class="span8">
        <h3 class="heading">
            Panel de Control
        </h3>
        <ul class="dshb_icoNav tac">            
            <li>
                <a href="../principal/profesores" style="background-image: url(../img/iconos/paralelo.png)">Paralelos</a>
            </li>            
            <li>
                <a href="../profesores/materias" style="background-image: url(../img/iconos/mat.png)">Materias</a>
            </li>           
            <li>
                <a href="../AlumnosParalelos/horario" style="background-image: url(../img/iconos/horario.png)">Horarios</a>
            </li>  
            <li>
                <a href="../profesores/consultas" style="background-image: url(../img/iconos/report.png)">Consultas</a>
            </li>          
        </ul>
    </div>
    <div class="span4"> 
        <h3 class="heading">
            Datos Personales
        </h3>
        <table class="table">
            <thead>
                <tr>                    
                    <th colspan="2">Profesor</th>           
                </tr>
            </thead>
            <tbody>                
                <tr>                  
                    <td><b>Nombre</b></td>
                    <td><?php echo $datosProfesor['Profesore']['nombre'] ?></td>
                </tr>
                <tr>                  
                    <td><b>Apellido</b></td>
                    <td><?php echo $datosProfesor['Profesore']['ap_paterno'];?>&nbsp;<?php echo $datosProfesor['Profesore']['ap_materno'];?></td>
                </tr>
                <tr>                  
                    <td><b>Telefono</b></td>
                    <td><?php echo $datosProfesor['Profesore']['telefono'];?> - <?php echo $datosProfesor['Profesore']['telefono_movil'];?></td>
                </tr>
                <tr>                  
                    <td><b>Correo</b></td>
                    <td><?php echo $datosProfesor['Profesore']['email'];?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- sidebar -->
<?php
echo $this->element('sidebar/profesor');
?>
<!-- fin sidebar -->
<script>						
    $(document).ready(function() {
        $('#fbprofesor').hide();
        $('#fbusuario').hide();
        $('#fbinscribe').hide();
        
        $('#binscribe').click(function() {
            $('#fbinscribe').show('slow');
            $('#fbalumno').hide('slow');
            $('#fbprofesor').hide('slow');  
            $('#fbusuario').hide('slow');                      
        });
        
        $('#bestudiantes').click(function() {
            $('#fbinscribe').hide();
            $('#fbalumno').show('slow');
            $('#fbprofesor').hide('slow');  
            $('#fbusuario').hide('slow');                      
        });
        
        $('#bprofesores').click(function() {
            $('#fbinscribe').hide();
            $('#fbalumno').hide('slow');
            $('#fbprofesor').show('slow');  
            $('#fbusuario').hide('slow');                      
        });
        
        $('#busuarios').click(function() {
            $('#fbinscribe').hide();
            $('#fbalumno').hide('slow');
            $('#fbprofesor').hide('slow');  
            $('#fbusuario').show('slow');                      
        });
    });		
</script>