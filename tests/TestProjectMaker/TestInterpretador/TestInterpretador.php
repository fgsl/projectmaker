<?php
namespace TestProjectMaker\TestInterpretador;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Interpretador\Interpretador;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Interpretador::class)]

class TestInterpretador extends TestCase
{

    public function testCraicaoDeObjetos()
    {
        $interpretador= new Interpretador();
        $this->assertInstanceOf(Interpretador::class,$interpretador);
        $interpretador->receberDados = TRUE;
        $interpretador->interpretarDados = TRUE;
        $this->assertEquals(TRUE, $interpretador->receberDados);
        $this->assertEquals(TRUE, $interpretador->interpretarDados);
    }






}