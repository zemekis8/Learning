<?php
class Point {
    public int $x;
    public int $y;

    public function __construct( $x,  $y ) {
        $this->x = $x;
        $this->y = $y;
    }
}

// Передаём оба параметра.
$p1 = new Point(4, 5);
// Передаём только обязательные параметры. Для $y используется значеие по умолчанию 0.
$p2 = new Point(4,1);
echo $p2->x;
echo "<br>" . $p2->y;
// Вызываем с именованными параметрами (начиная с PHP 8.0):
//$p3 = new Point(y: 5, x: 4)