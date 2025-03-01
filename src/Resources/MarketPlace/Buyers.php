<?php
namespace Zoop\Resources\MarketPlace;

use Zoop\Core\Zoop;

/**
 * Class Buyers
 *
 * Essa classe é resposavel por lidar com os usuarios
 * dentro do marketplace ao nivel do marketplace zoop.
 *
 * @package Zoop\MarketPlace
 * @author italodeveloper <italoaraujo788@gmail.com>
 * @version 1.0.0
 */
class Buyers extends Zoop
{
    public function __construct(array $configurations)
    {
        parent::__construct($configurations);
    }

    /**
     * createBuyer function
     *
     * Cria o usuario dentro do markeplace ('não é associado ao vendedor')
     *
     * @param array $user
     *
     * @return bool|array
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function createBuyer(array $user)
    {
        $request = $this->configurations['guzzle']->request(
            'POST', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers',
            ['json' => $user]
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }

    /**
     * getAllBuyers function
     *
     * Lista todos os usuarios do marketplace
     * ('não realiza associação com o vendedor')
     *
     * @return bool|array
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function getAllBuyers()
    {
        $request = $this->configurations['guzzle']->request(
            'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers'
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }

    /**
     * function getBuyer
     *
     * Pega os dados do usuario associado
     * ao id passado como parametro.
     *
     * @param string $userId
     *
     * @return bool|array
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function getBuyer($userId)
    {
        $request = $this->configurations['guzzle']->request(
            'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/' . $userId
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }

  /**
   * function searchBuyer
   *
   * Busca os usuario por CPF/CNPJ
   *
   * @param string $taxpayerId
   *
   * @return bool|array
   * @throws GuzzleHttp\Exception\ClientException
   */
  public function searchBuyer($taxpayerId)
  {
    $request = $this->configurations['guzzle']->request(
      'GET', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/search',
      ['query' => ['taxpayer_id' => $taxpayerId]]
    );
    $response = \json_decode($request->getBody()->getContents(), true);
    if($response && is_array($response)){
      return $response;
    }
    return false;
  }

    /**
     * function getBuyer
     *
     * Atualiza os dados do comprador
     *
     * @param string $userId
     *
     * @return bool|array
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function updateBuyer($userId, array $user)
    {
        $request = $this->configurations['guzzle']->request(
            'PUT', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/' . $userId,
            ['json' => $user]
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }

    /**
     * function deleteBuyer
     *
     * Delta um usuario do marketplace utilizando como parametro
     * seu id.
     *
     * @param $userId
     *
     * @return bool|mixed|void
     * @throws GuzzleHttp\Exception\ClientException
     */
    public function deleteBuyer($userId)
    {
        $request = $this->configurations['guzzle']->request(
            'DELETE', '/v1/marketplaces/'. $this->configurations['marketplace']. '/buyers/' . $userId
        );
        $response = \json_decode($request->getBody()->getContents(), true);
        if($response && is_array($response)){
            return $response;
        }
        return false;
    }
}