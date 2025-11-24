<?php
namespace TestProjectMaker\TestInterpretador;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Interpretador\Interpretador;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Interpretador::class)]

class TestInterpretador extends TestCase
{

    public function testCriacaoDeObjetos()
    {
        $interpretador= new Interpretador();
        $this->assertInstanceOf(Interpretador::class,$interpretador);
        $interpretador->receberDados = TRUE;
        $interpretador->interpretarDados = TRUE;
        $this->assertTrue($interpretador->receberDados);
        $this->assertTrue($interpretador->interpretarDados);
    }







}
