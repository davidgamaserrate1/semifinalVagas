<?php

  namespace App\Entity;

  use \App\Db\DataBase;
  use \PDO;


class Vaga{
 
    public $id; 
    public $descricao_setor;  
    public $descricao_cargo;
    public $nome_empresa; 
    public $salario;
    public $setor_id;
    public $empresa_id;

    public function Vaga ( $auxVagasdescricao_setor, $auxVagasdescricao_cargo,  $auxVagasnome_empresa, $auxVagasSalario ,$setor_id, $empresa_id){
      $this->descricao_setor = $auxVagasdescricao_setor;
      $this->auxVagasdescricao_cargo = $auxVagasdescricao_cargo;
      $this->auxVagasnome_empresa = $auxVagasnome_empresa;
      $this->auxVagasSalario = $auxVagasSalario;      
      $this->setor_id = $setor_id;   
      $this->empresa_id = $empresa_id;   
    }
    
    // public function insertVagas(){
    //   $obDatabase = new Database('vagas');
    //   $obDatabase -> insertVagas();
    // }
    public function cadastrar($auxVagasdescricao_setor,  $auxVagasdescricao_cargo ,   $auxVagasnome_empresa  ,  $auxVagasSalario, $setor_id, $empresa_id){      
        //inserir vaga no banco
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insert([
                'descricao_setor'    => $auxVagasdescricao_setor,
                'descricao_cargo'   =>  $auxVagasdescricao_cargo,
                'nome_empresa'     =>  $auxVagasnome_empresa ,
                'salario'      =>$auxVagasSalario,
                'setor_id'      =>$setor_id,
                'empresa_id'      =>$empresa_id
        ]);
      //RETORNAR STATUS
      return true;
    }
   
    public function atualizar(){
    
      return (new Database('vagas'))->update('id = '.$this->id,[
      'descricao_setor'    => $this->descricao_setor,
      'descricao_cargo' => $this->descricao_cargo,
      'nome_empresa'     => $this->nome_empresa,
      'salario'      => $this->salario,
      'setor_id'      => $this->setor_id,
      'empresa_id'      => $this->empresa_id
      ]);
  }

 
    public static function getVagas(){
        return (new Database('vagas'))->selectVagas()
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
   
    public static function getVaga($id){
        return (new Database('vagas'))->select('id = '.$id)
                                      ->fetchObject(self::class);
    }
 
    public function excluir(){
        return (new Database('vagas'))->delete('id ='.$this->id);
    }

}


