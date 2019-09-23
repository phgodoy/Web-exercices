<?php
# 5 uma chamada por metodo
class funcionario{
    var $codigo;
    var $nome;
    var $salario;
    
    public function __construct(FuncionarioNome   $nome, FuncionarioCodigo $codigo ){
        $this->nome = $nome;
        $this->codigo = $codigo;
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

    #dois metodos de uma so vez;

    $pedro->registro("829122");
            ->salario(800);
    

