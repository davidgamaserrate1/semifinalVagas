<?php
    
    require __DIR__.'/vendor/autoload.php';

    define('TITLE','Editar vaga');


    use \App\Entity\Vaga;

    //VALIDAR ID
    if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
        header('location: index.php?status=error');
        exit;
    }

    //CONSULTA A VAGA
    $obVaga = Vaga::getVaga($_GET['id']);
   
    
    //VALIDAÇÃO DA VAGA
    if(!$obVaga instanceof Vaga){
        header('location: index.php?status=error');
        exit;
    }

    if(isset($_POST['empresaNome'],$_POST['cargoDescricao'],$_POST['cargoSalario'],$_POST['cargoSetor_id'], $_POST['cargoDescricao_setor'], $_POST['cargoEmpresa_id'])){ 
         
         //INSERE REGISTRO NAS TABELAS :         
         
          //AUX DE VAGA        public $id; 
    // public $descricao_setor;  
    // public $descricao_cargo;
    // public $nome_empresa; 
    // public $salario;
         $obVaga  -> descricao_setor   = $_POST['cargoDescricao_setor'];
         $obVaga   -> descricao_cargo  = $_POST['cargoDescricao'];
         $obVaga  -> nome_empresa   = $_POST['empresaNome']; 
         $obVaga   -> salario  = $_POST['cargoSalario'];
         $obVaga -> atualizar();
         //INSERE REGISTRO NA TABELA VAGAS :
         //$obVaga = new Vaga ($auxVagasdescricao_setor,  $auxVagasdescricao_cargo ,   $auxVagasnome_empresa  ,  $auxVagasSalario    );  
          
         //$obVaga2 = new Vaga($_POST['cargoDescricao_setor'], $_POST['cargoDescricao'],$_POST['empresaNome'] , $_POST['cargoSalario'] ) ;
        
 //
     
         
       
        header('location: index.php');
        exit;
    }

    
    include __DIR__.'/includes/header.php';    
    include __DIR__.'/includes/formulario.php';    
    include __DIR__.'/includes/footer.php';