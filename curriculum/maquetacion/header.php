<header>
    <div class="portada" id="home">
        <div class="lenguajes row">
            <?php 
                foreach ($lenguajesPrincipales as $i)  {
                    echo $iconosLenguajes[$i]; 
                }
            ?>
        </div>
        <div class="perfil">
            <img class="foto-curriculum" src="../IMG/otros/foto-curriculum.png" alt="">
            <div class="perfil-mensaje column">
                <div class="perfir-saludo column">
                    <h1>Hola, soy Oscar Iraheta</h1>
                    <h2>--Desarrollo web Front-end--</h2>
                    <p>Soy un apasionado al desarrollo de software, preparado para utilizar mis habilidades y pasión para impulsar la misión de la compañía.</p>
                </div>
            </div>
        </div>
    </div>
</header>