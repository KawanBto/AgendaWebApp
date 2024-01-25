<?php
 
function inserirContato($conexao,$nomeContato,$foneContato)
{
    $query = "insert into contatostb(nomeContato,foneContato)values('{$nomeContato}','{$foneContato}')";
    return mysqli_query($conexao,$query);
}
 
function buscarContato($conexao,$nomeContato)
{
    $query = "Select * from contatostb where nomeContato like '%{$nomeContato}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}
 
function buscarContatoID($conexao,$idContato){
    $query = "select * contatostb where idContato = '{idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
     

}


function alterarContato($conexao, $idContato, $nomeContato, $foneContato)
{
    $query = "update contatostb set nomeContato = '{$nomeContato}', foneContato = '{$foneContato}' where idContato = '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
   
}
 
function deletarContato($conexao, $idContato)
{
    $query = "delete from contatostb where idContato = '{$idContato}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}