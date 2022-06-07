<?php

use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;


class SearchTest extends TestCase{

      /**
     * @dataProvider dadosTeste
     */

public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
    $resultados = new Search;
    $resultados = $resultados->getAddressFromZipcode($input);

    


 $this->assertEquals($esperado, $resultados);

}

public function dadosTeste(){
    return [
        "Endereço Rua Rio Curuarés" => [
            "06673785",
            [
                "cep" => "06673-785",
                "logradouro" => "Rua Rio Curuarés",
                "complemento" => "",
                "bairro" => "Recanto Verde dos Lagos",
                "localidade" => "Itapevi",
                "uf" => "SP",
                "ibge" => "3522505",
                "gia" => "3736",
                "ddd" => "11",
                "siafi" => "6551",
            ]
                
        ],
        "Endereço Qualquer" => [
            "06663-055",
            [
                "cep" => "06663-055",
                "logradouro" => "Rua Sebastião Mamede",
                "complemento" => "",
                "bairro" => "Conjunto Habitacional - Setor D",
                "localidade" => "Itapevi",
                "uf" => "SP",
                "ibge" => "3522505",
                "gia" => "3736",
                "ddd" => "11",
                "siafi" => "6551",
            ]
                
        ]                  
            
            ];

}
    
}