<div class="row-fluid">
    <div class="span8">
        <h3 class="heading">
            Panel de Control
        </h3>
        <ul class="dshb_icoNav tac">
            <li>
                <a href="../users" style="background-image: url(../img/iconos/usuarios.png)" id="busuarios">Usuarios</a>
            </li>
            <li>
                <a href="../alumnos" style="background-image: url(../img/iconos/estudiantes.png)" id="bestudiantes">Alumnos</a>
            </li>  
            <li>
                <a href="../docentes" style="background-image: url(../img/iconos/profe.png)" id="bdocentes">Docentes</a>
            </li>         
            <li>
                <a href="../DocentesMaterias/eligecarreras/<?php echo $idm?>" style="background-image: url(../img/iconos/inscribe.png)" id="binscribe">Inscripciones</a>
            </li>
            
            <li>
                <a href="../Carreras" style="background-image: url(../img/iconos/periodos.png)">Carreras</a>
            </li>

            <li>
                <a href="../Mallas" style="background-image: url(../img/iconos/gestion.png)">Mallas</a>
            </li>
            <li>
                <a href="../materias" style="background-image: url(../img/iconos/mat.png)">Materias</a>
            </li>
            <li>
            
        </ul>
    </div>
    
</div>

<!-- sidebar -->
<?php
echo $this->
        element('sidebar/adminp');
?>
<!-- fin sidebar -->
<script>						
    $(document).ready(function() {
        $('#fbprofesor').hide();
        $('#fbusuario').hide();
        $('#fbinscribe').hide();
        $('#fbalumno').fadeIn(3000);
        
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