<?php 

$idade = 18;
$numerodepessoas = 1;

echo "voce só pode entrar a partir de 18 anos ou a partir dos 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18){
    echo "voce tem $idade anos. Pode entrar sozinho.";
}else if ($idade >= 16 && $numerodepessoas > 1){
    echo "voce só tem $idade anos, está acompanhado(a), então pode entrar";
}else{
    echo "veco só tem $idade anos. voce não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";