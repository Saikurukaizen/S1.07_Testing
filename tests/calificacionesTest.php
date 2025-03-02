<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/calificaciones.php';

class CalificacionesTest extends TestCase{

    private $calificacion;

    protected function setUp(): void{
        $this->calificacion = new Calificaciones();
    }

    protected function tearDown(): void{
        $this->calificacion = null;
    }
    public function testVerificarPrimeraDivision(){
        $calificacion = new Calificaciones();
        $res = $calificacion->Calificacion(0.60);      
        $this->assertEquals('Ets Primera Divisió', $res);
    }

    public function testVerificarSegundaDivision(){
        $calificacion = new Calificaciones();
        $res = $calificacion->Calificacion(0.45);
        $this->assertEquals('Ets Segona Divisió', $res);
    }

    public function testVerificarTerceraDivision(){
        $calificacion = new Calificaciones();
        $res = $calificacion->Calificacion(0.33);
        $this->assertEquals('Ets Tercera Divisió', $res);
    }

    public function testVerificarPerReprovar(){
        $calificacion = new Calificaciones();
        $res = $calificacion->Calificacion(0.32);
        $this->assertEquals('Per reprovar', $res);
    }
}
?>