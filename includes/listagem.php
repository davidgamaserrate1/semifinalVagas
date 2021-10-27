<?php 
    use \App\Entity\Empresa;
use App\Entity\Vaga;
use App\Entity\Cargo;
$cargo = Cargo::getCargo('descricao');
$empresa = Empresa::getEmpresas();
     
    $mensagem = '';

    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $mensagem = '<div class= "alert alert-success"> Ação executada com sucesso!</div';
                break;

            case 'error':
                $mensagem = '<div class= "alert alert-danger"> Ação não executada!</div' ;
                    break;
            
        }
    }

    $resultados = '';
    foreach($vagas as $vaga){
        $resultados .=  '<tr>
                            <td>'. $vaga->id .'</td>
                            <td>'. $vaga->descricao_setor.'</td>
                            <td>'. $vaga->descricao_cargo .'</td>
                            <td>'. $vaga->nome_empresa .'</td>                            
                            <td>'. $vaga->salario.'</td>
                            <td>'. $vaga->setor_id.'</td>
                            <td>'. $vaga->empresa_id.'</td>
                            
                             </td>
                            <td>
                                <a href="editar.php?id='.$vaga->id.'">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                <a/>
                                <a href="excluir.php?id='.$vaga->id.'">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                <a/>                                
                            </td>
                        </tr>';

    }

    $resultados = strlen($resultados) ? $resultados : '<tr>    
                                                        <td colspan = "6" class=text-center>
                                                            Nenhuma vaga encontrada!
                                                        </td>
                                                        </tr>';

?>
<main>
 <?=$mensagem?>
    <section>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova Vaga</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID VAGA</th>
                    <th>Empresa</th>
                    <th>Cargo</th>
                    <th>Setor</th>                    
                    <th>Salário</th>
                    <th>Ação</th>
                    <th>Setor ID</th>
                    <th>Empresa ID</th>
                </tr>
            </thead>            <tbody>
                <?=$resultados?>
            </tbody>

        </table>
    </section>


</main>