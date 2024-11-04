<?php
use PHPUnit\Framework\TestCase;

require 'path/to/your/index.php'; // Asegúrate de incluir el archivo que contiene las funciones a probar

class ApiTest extends TestCase
{
    public function testGetAPI()
    {
        $url = "https://jsonplaceholder.typicode.com/posts";
        $result = getAPI($url);
        $this->assertIsArray($result);
        $this->assertNotEmpty($result);
    }

    public function testReplaceNum()
    {
        $data = [
            ['id' => 1, 'title' => 'foo'],
            ['id' => 2, 'title' => 'bar']
        ];
        $expected = [
            ['id' => 'es numérico', 'title' => 'foo'],
            ['id' => 'es numérico', 'title' => 'bar']
        ];
        $result = replaceNum($data);
        $this->assertEquals($expected, $result);
    }

    public function testShowTable()
    {
        $data = [
            ['id' => 'es numérico', 'title' => 'foo'],
            ['id' => 'es numérico', 'title' => 'bar']
        ];
        ob_start();
        showTable($data);
        $output = ob_get_clean();
        $this->assertStringContainsString('<table', $output);
        $this->assertStringContainsString('<th>id</th>', $output);
        $this->assertStringContainsString('<td>es numérico</td>', $output);
    }
}