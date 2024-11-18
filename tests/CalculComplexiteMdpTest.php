<?php

use PHPUnit\Framework\TestCase;
require_once "src/Fonctions/fonctions.php";

class CalculComplexiteMdpTest extends TestCase
{
    public function testCalculComplexiteMdpTest()
    {
        // Arrange
        $mdp = "aubry";
        // Act
        $resultat = \App\Fonctions\CalculComplexiteMdp($mdp);
        // Assert
        $this->assertEquals('23', $resultat);
    }
    public function testCalculComplexiteMdpTest2()
    {
        // Arrange
        $mdp = "super@ubry";
        // Act
        $resultat = \App\Fonctions\CalculComplexiteMdp($mdp);
        // Assert
        $this->assertEquals('45', $resultat);
    }
    public function testCalculComplexiteMdpTest3()
    {
        // Arrange
        $mdp = "Super@ubry2022";
        // Act
        $resultat = \App\Fonctions\CalculComplexiteMdp($mdp);
        // Assert
        $this->assertEquals('63', $resultat);
    }
    public function testCalculComplexiteMdpTest4()
    {
        // Arrange
        $mdp = "Giroud-Président||2027";
        // Act
        $resultat = \App\Fonctions\CalculComplexiteMdp($mdp);
        // Assert
        $this->assertEquals('104', $resultat);
    }
}



