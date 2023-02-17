<?php
$topTres = $datosParaVista['datos'];

if ($topTres == null) {
    echo '<h1>Sin entradas</h1>';
} else {
    echo '<h1>Top 3 Entradas</h1>';
    echo '<br>';
    echo '<br>';
    foreach ($topTres as $top)
    {
        echo '<h5>' . $top->getEntrada()->getTexto() /* . ' Likes: ' . $top->getNumMegusta() */ . '</h5>';
        echo '<p> Usuarios que dieron like: </p>';
        foreach ($top->getUsuariosMeGusta() as $usuario){
            echo '<div>';
            echo $usuario->getNombre();
            if ($usuario->getAvatar()) {
                echo '<img class="rounded float-start me-2" width="32px" src="' . $usuario->getAvatar . '" </img>';
            } else {
                echo '<img class="rounded float-start me-2" width="32px" src=".\assets\img\bender.png"></img>';
            }
            echo '</div>';
            echo '<br>';
        }
        echo '<br>';
    }
}