<?php
# 8 Nao tenha mais de duas variaveis de instancia em sua classe
#decompoe a classe
class pessoa{
    var $nome;
}
class funcionario{
    var $codigo;
    var $salario;
    
    public function __construct(FuncionarioNome   $nome, FuncionarioCodigo $codigo ){
        $this->nome = $nome;
       $this->codigo = $codigo;
    }
    
    public function registro($registro){
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

?>