<?php

require_once __DIR__ . '/vendor/autoload.php';

use Treinamento\BuscadorCurso\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar('cursos-online-programacao/python');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso->textContent);
}
