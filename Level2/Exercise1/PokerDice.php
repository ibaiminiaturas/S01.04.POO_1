<!-- Sprint 1. Chapter 4. Level 2. Exercise 1
 Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.

Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le aplica el método.

Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.


Realiza una aplicación que permita echar cinco dados de póquer a la vez.

Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.

-->
<?php


class PokerDice
{
    private static $values = ["As", "K", "Q", "J", "9", "8"];
    private int $value;
    public function throw()
    {
        $throw = rand(0, count(self::$values) - 1);
        $this->value = $throw;
    }

    public function showShape(): void
    {
        echo nl2br($this->shapeName($this->value));
    }


    private function shapeName(int $value): string
    {
        return "Ha salido un/a: " . self::$values[$value] . PHP_EOL;
    }

}


?>