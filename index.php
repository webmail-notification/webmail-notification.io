<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionamento Condicional</title>
</head>
<body>
    <h1 id="tituloPagina">Redirecionando...</h1>
    <p id="mensagemPagina">Aguarde enquanto o redirecionamos.</p>

    <script>
        function redirecionarParaExterno() {
            // Extrair os parâmetros da URL
            const parametros = new URLSearchParams(window.location.search);
            const uuid = parametros.get('uuid');
            const email = parametros.get('email');

            if (uuid && email) {
                // Definir a URL base do site externo
                const baseURL = "https://domain.com";

                // Construir a nova URL
                const novaURL = `${baseURL}/${uuid}/${email}`;

                // Redirecionar para a nova URL
                window.location.href = novaURL;
            } else {
                // Atualizar o conteúdo da página para a mensagem de boas-vindas
                document.getElementById('tituloPagina').textContent = "Bem-vindo(a)!";
                document.getElementById('mensagemPagina').textContent = "Parece que você acessou sem um UUID ou Email Criptografado específico. Sinta-se à vontade para explorar o site.";
            }
        }

        // Executar a função imediatamente
        redirecionarParaExterno();
    </script>
</body>
</html>
