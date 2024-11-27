<?php

/*usar um $ adicional ANTES de uma variável vai criar uma variável de variável, ou variável variante */

$site = "cursoemvideo";
$$site = "curso de PHP";
echo "Essa é a variável normal ($ site) -> $site <br/>";
echo $$site. "<br/>"; 
echo $cursoemvideo. "<br/>"; // como já criei a variante, eu posso colocar ela na forma isolada, que é o mesmo valor da variável $site
echo "Essa é a variável de variável ($$ site) -> ". $$site. "<br/>"; // mostra o valor da variante $$site/$cursoemvideo
echo "Essa é a variável de variável ($$ site) -> $$site"; // mostra o nome da variante $$site, que é $cursoemvideo


/*O que acontece por trás de uma variável de variável:
o valor da variável passará a ser a nova variável em si
isso significa que agora eu tenho 2 variáveis: $site e $cursoemvideo, que foi o valor atribuído a $site
e o valor da variável de variável $curso em video, (também conhecida como $$site), será "curso de PHP"*/