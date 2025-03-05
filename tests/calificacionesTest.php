<?php

use PHPUnit\Framework\TestCase;
use App\Calificaciones;

class CalificacionesTest extends TestCase{

    private $calificacion;

    protected function setUp(): void{

    }

    protected function tearDown(): void{
        $this->calificacion = null;
    }
    public function testEsAprobadoSufi(){
        $calificacion = new Calificaciones(5);
        $this->assertTrue($calificacion->Aprobado(5, 10));
    }

    public function testEsAprobadoNotable(){
        $calificacion = new Calificaciones(7);
        $this->assertTrue($calificacion->Aprobado(7, 10));
    }
    public function testEsAprobadoNotaMaxima(){
        $calificacion = new Calificaciones(10);
        $this->assertTrue($calificacion->Aprobado(10, 10));
    }
    public function testEsSuspendido(){
        $calificacion = new Calificaciones(4);
        $this->assertFalse($calificacion->Aprobado(4.9, 10));
    }
    public function testEsInvalido(){
        $calificacion = new Calificaciones(-1);
        $this->assertFalse($calificacion->Aprobado(-1, 10));
    }
}
?>