<?php


try{
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","root");
}
catch(\PDOException $e){
    echo "Não foi possivel estabelecer a conexão: ".$e->getCode().": ".$e->getMessage();

}
#listar todos os alunos

    $query = "Select * from alunos";

    $stmt = $conexao->query($query);

        foreach ($conexao->query($query) as $aluno) {
              echo $aluno['nome']." - Nota: ";
              echo $aluno['nota']."<br>";
            }

    echo "<hr>";
#listar os que têm as três maiores



?>


