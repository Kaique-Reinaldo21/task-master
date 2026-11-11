
<?php

use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    public function testApiRetornaListaEmJson()
    {
        // Simula uma requisição à API
        $url = "http://localhost:8000/api.php?action=list";

        $content = file_get_contents($url);

        // Verifica se a requisição retornou conteúdo
        $this->assertNotFalse($content);

        // Converte a resposta JSON para um array PHP
        $data = json_decode($content, true);

        // Verifica se o retorno é um array válido
        $this->assertIsArray($data);
        $this->assertSame(JSON_ERROR_NONE, json_last_error());
    }
}
