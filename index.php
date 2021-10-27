<?php

    require __DIR__. '/vendor/autoload.php';

    use App\Entity\Cargo;
    use \App\Entity\Vaga;
    use \App\Entity\Empresa;
    use \App\Entity\Setor;

    //$vaganm = new Vaga;
    $vagas = Vaga::getVagas();
    $empresa = Empresa::getEmpresas();
    $cargo = Cargo::getCargo('descricao');
    $setor = Setor::getSetores();
    
    // $obVaga = Vaga::getVaga($_GET['id']);

    

    
    // public $id; 
    // public $descricao_setor;  
    // public $descricao_cargo;
    // public $nome_empresa; 
    // public $salario;
    
    
    include __DIR__.'/includes/header.php';    
    include __DIR__.'/includes/listagem.php';
    
    
    
    
    include __DIR__.'/includes/footer.php';