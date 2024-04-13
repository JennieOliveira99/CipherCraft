<h1 align="center">Cifra de César </h1>

Projeto Desenvolvido utilizando Conceitos de Crptografia como Cifragem por Substituição.
Utilizando Cifragem de César para criptografar mensagens digitadas.


<p align="center"><img src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge"/></p>


## 📎 Como Usar:

1. Faça download do Programa "XAMPP" e o instale em seu computador.
2. Faça download do projeto e descompacte a pasta;
3. Mova a pasta do projeto dentro da pasta "htdocs" (armazenada na pasta Xampp, localizada no seu disco Local C:);
4. Abra o Xampp e execute Apache;
5. No navegador, escreva "localhost/" e coloque o nome da pasta / nome do arquivo index.html
 Você entrará na página principal do Projeto.

## 💻Conteúdo do Projeto
## ![PHP](https://img.shields.io/badge/-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![HTML](https://img.shields.io/badge/-HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS](https://img.shields.io/badge/-CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)  ![Git](https://img.shields.io/badge/-Git-F05032?style=for-the-badge&logo=git&logoColor=white) 

  
- Tela simples que recebe um texto do usuário e o converte na Cifra de César.
- 💻Cifra de Cesar é uma Cifragem por substituição, onde você substitui cada caractere por 3 casas a frente.
- Exemplo: a letra A = D e assim por diante.
- Leva esse nome porque Julio César foi o 1° usuário conhecido dessa Cifra.
- Na cifra de César, o deslocamento de caracteres é feito usando seus valores ASCII.
- Portanto, antes de aplicar a cifra de César para deslocar os caracteres, é necessário primeiro converter os caracteres da entrada em seus valores ASCII correspondentes.
- Veja a seguir a solução proposta:

<br>


| Solução  | Descrição                           |
| :---------- | :---------------------------------- |
| `if ($_SERVER["REQUEST_METHOD"] == "POST") { ... }`  |Nos dá o método de solicitação HTTP usado para acessar a página, seja "GET", "POST" ou outro método HTTP. |
| `$frase = $_POST["frase"];` | Pega o valor enviado através do formulário no HTML, onde o name é "frase".|
| `$codigo = '';` | Inicializa uma nova string para armazenar o codigo que será modificado. Comeca vazio porque conforme ocorre o loop, as letras serão armazenadas nele. |
| `for ($i = 0; $i < strlen($frase); $i++) {` | **$i = 0;** Esta é a inicialização do contador do loop, percorrer cada caractere na string $frase. **$i < strlen($frase);** Enquanto o valor de $i for menor que o comprimento da frase, strlen  =  retorna  o n° total de caracteres na frase digitada, o loop continuará até que $i seja igual ao n° de caracteres na frase para que cada caractere seja processado. **$i++** Move o loop para o próximo caractere na string $frase. |
| `$atualCode = ord($frase[$i]); ` | **ord** Obtém o código ASCII ((representação numérica de caracteres) ) do caractere atual da string. |
| ` $nextCode = $atualCode + 3; ` | O código ASCII do caractere atual ($atualCode) é deslocado por três posições para frente. Como exemplo, se o $atualCode for 65 (correspondente a 'A' em ASCII), então $nextCode será 65 + 3 = 68.|
| `$nextLetter = chr ($nextCode ); ` | **chr** Converte um valor ASCII de volta para o caractere correspondente. Exemplo: transformando 68 na letra D |
| ` $codigo .= $nextLetter; ` | O caractere **$nextLetter** obtido após o deslocamento  é concatenado à string **$codigo**|


## 🌟Colaboradores



<h2>🌸Jennyfer Alvim</h2> 


