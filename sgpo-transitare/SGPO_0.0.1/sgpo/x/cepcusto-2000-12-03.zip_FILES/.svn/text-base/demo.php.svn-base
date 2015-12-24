<?PHP

include "cepcusto.php";
$cepcusto = new cepcusto;

#poe o arquivo cepcusto.dat para o array dados
$data = $cepcusto->read_database("cepcusto.dat");

#imprime o valor do cep para o estado do RJ com o cep 20000
print $cepcusto->valor($data,"RJ",20000);


?>