<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $altura;
    public $cor;
    //?
    public function __construct($nome, $idade, $altura, $cor)
    {
        $this->nome   = $nome;
        $this->idade  = $idade;
        $this->altura = $altura;
        $this->cor    = $cor;
    }

public function salvar()
{
    
    $arquivo = "dados.csv";

    
    $ultimoId = 0;

    //?
    if (file_exists($arquivo)) {

        //?
        $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if (!empty($linhas)) {
            //?
            $ultimaLinha = trim(end($linhas)); 

            //?
            $colunas = explode(";", $ultimaLinha);

            //?
            if (isset($colunas[0]) && is_numeric($colunas[0])) {
                $ultimoId = (int)$colunas[0];
            }
        }
    }

    //?
    $novoId = $ultimoId + 1;

    //?
    $linha = $novoId . ";" .
             $this->nome . ";" .
             $this->idade . ";" .
             $this->altura . ";" .
             $this->cor . "\n";
    //?
    file_put_contents($arquivo, $linha, FILE_APPEND);

}

    public static function gerarLinhasTabela(): void
    {
        
        
        $arquivo = "dados.csv";
        $ultimoId = 0;

        //?
        $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        //?
        foreach ($linhas as $key => $linha) {
            //?
            $linha = explode(';',$linha);
            //?
            var_dump($linha); 
            //?
            echo ("  <tr>
                                <th scope='row'>$linha[0]</th>
                                <td>$linha[1]</td>
                                <td>$linha[2]</td>
                                <td>$linha[3]</td>
                                <td>
                                    <span style='display:inline-block; background-color: $linha[4] ; width: 50px; height: 20px; border: 1px solid $linha[4];'></span>
                                </td>
                            </tr>");
        }
       
        
                            
    }
}
