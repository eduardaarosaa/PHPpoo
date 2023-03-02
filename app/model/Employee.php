<?php 

class Employee extends User{
    private $salario;
    private $cargo;

    //Função para calcular salario 
    function ObterSalario()
    {
    
       $this->salario -=$this->salario * 0.1;
        echo "Salário:{$this->salario}<br>";
    }

    function ImprimeDados()
    {
        //Recuperando as informações da Classe User
        parent::ImprimeDados();
        echo "Salário Bruto: {$this->salario}<br>";
        echo "Cargo: {$this->cargo}<br>";
    }

}