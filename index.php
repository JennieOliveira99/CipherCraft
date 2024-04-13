<?php

//**************$_SERVER
//Quando um navegador solicita uma página da web a um servidor, ele envia várias informações junto com essa solicitação.
// Essas informações são acessíveis no lado do servidor através da superglobal $_SERVER.
// O PHP organiza essas informações em um array associativo, onde cada chave é um nome específico que representa um aspecto da solicitação.

//$_SERVER["REQUEST_METHOD"] nos dá o método de solicitação HTTP usado para acessar a página, seja "GET", "POST" ou outro método HTTP.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Pega o valor enviado pelo formulário com o name "frase"
    $frase = $_POST["frase"];

    // Inicializa uma nova string para armazenar o codigo transformado
    $codigo = '';  // comeca vazio pq conforme ocorre o loop, as letras serao armazenadas nele


   
    // Percorre a frase original caractere por caractere
    for ($i = 0; $i < strlen($frase); $i++) {
         // ****explicacao do FOR
        //$i = 0;
        // Esta é a inicialização do contador do loop, percorrer cada caractere na string $frase 
        //-----------------------------------------------------------
        //$i < strlen($frase); 
        //enquanto o valor de $i for menor que o comprimento da frase
        // strlen  =  retorna  o n° total de caracteres na frase digitada
        //o loop continuará até que $i seja igual ao n° de caracteres na frase para que cada caractere seja processado
        //-----------------------------------------------------------
        //$i++
        //move o loop para o próximo caractere na string $frase



        // Obtém o codigo ASCII do caractere atual através da FUNCAO NATIVA ord
        $atualCode = ord($frase[$i]); 
         //estamos calculando o valor ASCII do caractere na posição $i da string $frase e armazenando esse valor na variável $codigo
        //uando utilizamos $frase[$i], estamos acessando o caractere na posição indicada pelo contador $i na string $frase
        // E assim, $i vem do loop for, que está controlando o processo de iteração sobre os caracteres da string $frase





        // Calcula o codigo ASCII da terceira letra seguinte atraves da FUNCAO NATIVA chr
        //Aqui, o código ASCII do caractere atual ($atualCode) é deslocado por três posições para frente.
        //Como exemplo, se o $atualCode for 65 (correspondente a 'A' em ASCII), então $nextCode será 65 + 3 = 68, que corresponde a 'D' em ASCII.
        $nextCode = $atualCode + 3;
        
          
        // Obtém a letra correspondente ao código ASCII calculado
        $nextLetter = chr ($nextCode );


        $codigo .= $nextLetter;
        // .=
        // é um operador de concatenação em PHP, é usado para concatenar o valor à direita com a variável à esquerda e atribuir o resultado à variável à esquerda. 
    
    }

    // Exibe o codigo transformado
    echo '<div style="background-color: #040205; color: #cdedee; text-align: center; height: 100%; margin-top: 20px;  padding:30px; font-size:30px;">';
    echo 'codigo: ' . $codigo;
    echo '</div>';
}
?>
