<?php
namespace TestProjectMaker\TestInterface;
use PHPUnit\Framework\TestCase;
use ProjectMaker\Interface\Usuario;
use PHPUnit\Framework\Attributes\CoversClass;
#[CoversClass(Usuario::class)]

class InterfaceTest extends TestCase
{
    public function testCriacaoDeObjetos()
    {
        $usuario = new Usuario();
        $this->assertInstanceOf(Usuario::class, $usuario);
        $usuario->nome = 'José';
        $usuario->funcao = 'Gestor';
        $usuario->email = 'josecampos@gmail.com.br';
        $this->assertEquals('José', $usuario->nome);
        $this->assertEquals('Gestor', $usuario->funcao);
        $this->assertStringContainsString('com.br', $usuario->email);
        $usuario->funcao = 'Funcionario';
        $this->assertEquals('Funcionario', $usuario->funcao);
    }
}
