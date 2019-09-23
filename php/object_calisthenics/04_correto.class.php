<?php
# 4 envolver collections em class
class funcionario{
    var $codigo;
    var $nome;
    var $altura;
    var $pesso;
    var $idade;
    var $nacimento;
    var $escolaridade;
    var $salario;
    
    public function __construct(FuncionarioNome   $nome, FuncionarioNacimento  $nacimento, FuncionarioCodigo $codigo ){
        $this->nome = $nome;
        $this->nacimento = $nacimento;
    }

    public function registrado($registro){
        if($this->codigo == $registro)
            echo "esta na empresa";
    }

    public function salario($pagamento){
     
        if($pagamento = 0){
            echo " pessoa nao recebe pagamento";
        }
            $this->salario +=$pagamento;    
            
    }

}

$pedro = new funcionario(
    new FuncionarioNome('Pedro'),
    new FuncionarioNacimento('2000-05-05'),
    new FuncionarioCodigo ("829122")
);

foreach ($pedro as $pedro) {
    if ($pedro->registro("829122")) {
        $pedro->salario(800);
    }
}




?>