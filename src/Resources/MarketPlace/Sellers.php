<?php
namespace Zoop\Resources\MarketPlace;

use Zoop\Core\Zoop;

/**
 * Class Sellers
 * 
 * Essa classe é resposavel por lidar com os usuarios
 * dentro do marketplace ao nivel do marketplace zoop.
 * 
 * @package Zoop\MarketPlace
 * @author italodeveloper <italoaraujo788@gmail.com>
 * @version 1.0.0
 */
class Sellers extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * getSeller function
     *
     * Pega os dados de um vendedor utilizando seu id
     * como paramtro.
     *
     * @param string|int $sallerId
     *
     * @return void
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function getSeller($sallerId)
    {
        $request = $this->configurations['guzzle']->request(
            'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/sellers/'. $sallerId
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }

    /**
     * getAllSellers function
     *
     * Lista todos os vendedores do marketplace
     * 
     * @throws GuzzleHttp\Exception\ClientException
     * @return array|void
     */
    public function getAllSellers()
    {
        $request = $this->configurations['guzzle']->request(
            'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/sellers'
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }
}