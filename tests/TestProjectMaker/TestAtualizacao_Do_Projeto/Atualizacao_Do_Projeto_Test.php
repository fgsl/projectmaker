<?php
namespace TestProjectMaker\TestAtualizacao_Do_Projeto;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Atualizacao_Do_Projeto\Funcionario;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Funcionario::class)]

class Atualizacao_do_Projeto_Test extends TestCase{

 public function testCriacaoDeObjetos(){
    $caminho=TestAtualização_Do_Projeto.'/Atualizacao_Do_Projeto_test.php';
    $funcionario = new Funcionario();
    $this->assertInstanceOf(Funcionario::class,$funcionario);
    $funcionario->clicarEmProjetosPendentes=TRUE;
     $funcionario->realizarOProjeto=TRUE;
      $funcionario->clicarEmFinalizarProjeto=TRUE;
      $this->assertTrue($funcionario->clicarEmProjetosPendentes);
       $this->assertTrue($funcionario->realizarOProjeto);
       $this->assertTrue($funcionario->clicarEmFinalizarProjeto);
        $this->assertTrue(file_exists($caminho), "O arquivo não foi encontrado.");
 }






}
















