<?php
namespace TestProjectMaker\TestInformacoes_Do_Projeto;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Informacoes_Do_Projeto\Gestor;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Gestor::class)]

class TestInformacoes_Do_Projeto extends TestCase
{

    public function testCriacaoDeObjetos()
    {
        $gestor = new Gestor();
        $this->assertInstanceOf(Gestor::class,$gestor);
        $gestor->colocarNomeDoProjeto = "Criacao do Banco de Dados";
        $gestor->especificaoesDoProjeto = "Crie um Banco de Dados para controlar a venda dos produtos";
        $gestor->colocarTipoDoProjeto = "Remoto";
        $gestor->autorizarAFinalizacaoDoProjeto = TRUE;
        $this->assertEquals("Criacao do Banco de Dados", $gestor->colocarNomeDoProjeto);
        $this->assertEquals("Crie um Banco de Dados para controlar a venda dos produtos", $gestor->especificaoesDoProjeto);
        $this->assertEquals("Remoto", $gestor->colocarTipoDoProjeto);
        $this->assertTrue($gestor->autorizarAFinalizacaoDoProjeto);
    }







}

