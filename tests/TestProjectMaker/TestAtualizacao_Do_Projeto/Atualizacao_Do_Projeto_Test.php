<?php
namespace TestProjectMaker\Atualizacao_do_Projeto_Test;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Atualizacao_Do_Projeto\Funcionario;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Funcionario::class)]

class TestAtualizacao_do_Projeto extends TestCase{

 public function testCriacaoDeObjetos(){
    $funcionario = new Funcionario();
    $this->assertInstanceOf(Funcionario::class,$funcionario);
    $funcionario->clicarEmProjetosPendentes=TRUE;
     $funcionario->realizarOProjeto=TRUE;
      $funcionario->clicarEmFinalizarProjeto=TRUE;
      $this->assertTrue($funcionario->clicarEmProjetosPendentes);
       $this->assertTrue($funcionario->realizarOProjeto);
       $this->assertTrue($funcionario->clicarEmFinalizarProjeto);
 }






}











