<?php namespace Decorator\GA; ?>
<h2 style="margin-top: -5px"><!--30-->
	<a href="https://www.grafikart.fr/tutoriels/php/tdd-kahlan-805" target="_blank">Test unitaire avec Kahlan (GA)</a>
</h2>
<?php
use Tests\Demo\Demo;

require dirname( __DIR__ ) . '/autoloader.php';
//require dirname( dirname( __DIR__ ) ) . '/vendor/autoload.php';

$d = new Demo();
//$d->randomFail();

var_dump( $d );
var_dump( [ '$d->a ' => $d->a ] );
