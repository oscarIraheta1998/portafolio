<?php include ("../IMG/iconosSVG/iconos-redes.php");?>
<article class="articulo column" id="card-leng">
    <h1 class="article-titulo">Tecnologías</h1>
    <h2 class="subtitulo">Principales</h2>
    <div class="contenedor-card row">
        <?php
            foreach ($lenguajesPrincipales as $i)  {
                include ("../maquetacion/card.php");
            }
            unset($i);
        ?>
    </div>
    <h2 class="subtitulo">secundarias</h2>
    <div class="contenedor-card row">
        <?php
            foreach ($lenguajesSecundarios as $i)  {
                include ("../maquetacion/card.php");
            }
            unset($i);
        ?>
    </div>
</article>
<article class="articulo column" id="card-proyectos">
    <h1 class="article-titulo">proyectos</h1>
    <div class="contenedor-card row">
        <div class="card3 column">
            <img src="../IMG/otros/Captura.PNG" alt="" class="card3-img">
            <div class="card3-details">
                <p class="text-title">Esta página</p>
                <br>
                <p>lenguajes usados</p> 
            </div>
                <div class="L row">
                <?php 
                    foreach ($lenguajesPrincipales as $i)  {
                        echo $iconosLenguajes[$i]; 
                    }
                ?>
            </div>
            <div class="row card3-botones-contenedor">
                <a href="#" class="card3-button-ir"><button card3-button>ver web</button></a>
                <a href="#" class="card3-button-repositorio"><?php echo $iconosRedes['Github'];?></a>
            </div>
            
        </div>
    </div>
</article>
<article class="articulo column" id="habilidades">
    <h1 class="article-titulo">Habilidades</h1>
    <h2 class="subtitulo">WEB</h2>
    <lu>
        <li class="viñeta">Desarrollo de aplicaciones utilizando Javascript, PHP, MySQL</li>
        <li class="viñeta">Maquetación HTML5, CSS, Bootstra, PHP</li>
    </lu>
    <h2 class="subtitulo">Multiplataforma</h2>
    <lu>
        <li class="viñeta">Creación de aplicaciones multiplataforma con flutter</li>
    </lu>
</article>
<article class="articulo column" id="formacion">
    <h1 class="article-titulo">Formación</h1>
    <div class="contenedor-card row">
        <?php
        $certificado=array(
            'utec'=>array(
                'img'=>'<img src="../IMG/otros/Utec.png" alt="">',
                'titulo'=>'Lic. Informática.',
                'lugar'=>'Universidad Tecnológica de El Salvador (UTEC)',
                'tiempo'=>'Ene, 2016 - Dic, 2024',
                'certificado'=>'',
            ),
            'azulschool'=>array(
                'img'=>'<img src="../IMG/otros/azulscool.png" alt="">',
                'titulo'=>'Curso profesional de HTML y CSS.',
                'lugar'=>'azulschool',
                'tiempo'=>'Ene, 2023 - Mar, 2023',
                'certificado'=>'',
            ),
        );
        foreach ($certificado as $institucion) {
            $img=$institucion['img'];
            $titulo=$institucion['titulo'];
            $lugar=$institucion['lugar'];
            $tiempo=$institucion['tiempo'];
            $certificado=$institucion['certificado'];
            include ("../maquetacion/card2.php");
        }
        ?>
    </div>
</article>

<article class="articulo" id="contacto">
    <h1 class="article-titulo">contacto</h1>
    <address class="contenedor-redes row">
    <?php
        foreach ($iconosRedes as $red => $icono)  {
            echo '<a class="red '.$red.'" href="'.$redes[$red].'" title="'.$red.'" target="_blank">'.$icono.'</a>';
        }
    ?>
    </address>
</article>