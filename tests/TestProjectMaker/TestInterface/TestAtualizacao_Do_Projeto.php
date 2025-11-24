<?php
namespace TestProjectMaker\TestAtualizacao_do_Projeto;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Atualizacao_Do_Projeto\Funcionario;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Funcionario::class)]

class TestAtualizacao_do_Projeto extends TestCase{

 public function testCraicaoDeObjetos(){
    $funcionario = new Funcionario();
    $this->assertInstanceOf(Funcionario::class==$funcionario);
    $funcionario->clicarEmProjetosPendentes=TRUE;
     $funcionario->realizarOProjeto=TRUE;
      $funcionario->clicarEmFinalizarProjeto=FALSE;
      $this->assertEquals(TRUE,$funcionario->clicarEmProjetosPendentes);
       $this->assertEquals(TRUE,$funcionario->realizarOProjeto);
       $this->assertEquals(FALSE,$funcionario->clicarEmFinalizarProjeto);
 }






}
