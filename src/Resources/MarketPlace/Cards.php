<?php
namespace Zoop\Resources\MarketPlace;

use Zoop\Core\Zoop;

/**
 * Cards class
 * 
 * Essa classe é responsavel por cuidar das associações do token do cartão de crédito ao comprador
 * 
 * @package Zoop\Marketplace
 * @author dilnei.soethe <dilnei.soethe@gmail.com>
 * @version 1.0.0
 */
class Cards extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * @param string $transaction
     *
     * @return array|bool
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function associateTokenOnCustomer(array $tokenCustomer)
    {
        $request = $this->configurations['guzzle']->request(
            'POST', '/v1/marketplaces/'. $this->configurations['marketplace']. '/cards',
            ['json' => $tokenCustomer]
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }
}