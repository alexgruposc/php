<?
$conexao=pg_connect("host=postg-dev port=5432 dbname=postgres user=postgres password=Pass2020!");
if(!$conexao){
echo"Falha na conexão com o banco. Veja detalhes técnicos:".pg_last_error($conexao);
}
?>
