<?php
// AND (&&)
// Retorna verdadeiro se ambos os operandos forem verdadeiros.
$a = true;
$b = false;

if ($a && $b) {
    echo "Ambos são verdadeiros.\n";
} else {
    echo "Pelo menos um é falso.\n";
}

// OR (||)
// Retorna verdadeiro se pelo menos um dos operandos for verdadeiro.
$a = true;
$b = false;

if ($a || $b) {
    echo "Pelo menos um é verdadeiro.\n";
} else {
    echo "Ambos são falsos.\n";
}

// OR EXCLUSIVO (XOR)
// Retorna verdadeiro se exatamente um dos operandos for verdadeiro.
$a = true;
$b = false;

if ($a xor $b) {
    echo "Somente um dos valores é verdadeiro.\n";
} else {
    echo "Ambos são verdadeiros ou ambos são falsos.\n";
}

// NOT (!)
// Inverte o valor lógico da variável.
$a = false;

if (!$a) {
    echo "A variável é falsa.\n";
} else {
    echo "A variável é verdadeira.\n";
}
