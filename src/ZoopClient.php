<?php
namespace Zoop;

use Zoop\Core\Zoop;

/**
 * ZoopClient class
 *
 * Essa classe é responsável por ser usada como primeira camada
 * uma especie de guarda chuvas para todas as classes registradas
 * dentro de aplicação em formato de bundle, os bundles (classes que
 * podem ser chamadas seus métodos públicos por essa class cliente
 * são registrados dentro da classe Abstrata extendida pelo cliente
 * Zoop\Zoop).
 *
 * @method \Zoop\Resources\MarketPlace\Buyers createBuyer(array $user)
 * @method \Zoop\Resources\MarketPlace\Buyers getAllBuyers()
 * @method \Zoop\Resources\MarketPlace\Buyers getBuyer(string $id)
 * @method \Zoop\Resources\MarketPlace\Buyers searchBuyer(string $taxpayerId)
 * @method \Zoop\Resources\MarketPlace\Buyers updateBuyer(string $id, array $user)
 * @method \Zoop\Resources\MarketPlace\Buyers deleteBuyer(string $id)
 *
 * @method \Zoop\Resources\MarketPlace\Transactions postTransaction(array $transaction)
 * @method \Zoop\Resources\MarketPlace\Transactions captureTransaction(string $transactionId, int $amount)
 * @method \Zoop\Resources\MarketPlace\Transactions refundTransaction(string $transactionId, int $amount)
 * @method \Zoop\Resources\MarketPlace\Transactions getAllTransactions()
 * @method \Zoop\Resources\MarketPlace\Transactions getTransaction(string $transaction)
 *
 * @method \Zoop\Resources\MarketPlace\Sellers getAllSellers()
 * @method \Zoop\Resources\MarketPlace\Sellers getSeller(string $sallerId)
 *
 * @method \Zoop\Resources\Payment\CreditCard payCreditCard(array $card, string $referenceId = null)
 * @method \Zoop\Resources\Payment\Ticket generateTicket(array $ticket, string $userId, string $referenceId = null)
 *
 * @method \Zoop\Resources\WebHook\WebHook getAllWebHooks()
 * @method \Zoop\Resources\WebHook\WebHook createWebHook(string $url, array $events, string $description)
 * @method \Zoop\Resources\WebHook\WebHook deleteWebHook(string $webhookId)
 * @method \Zoop\Resources\WebHook\WebHook webHookListen()
 *
 * @method \Zoop\Resources\Marketplace\Cards associateTokenOnCustomer(array $tokenCustomer)
 *
 * @author italodeveloper <italoaraujo788@gmail.com>
 * @package ZoopClient
 * @version 1.0.0
 */
class ZoopClient extends Zoop
{
    public function __construct($configurations)
    {
        parent::__construct($configurations);
    }
}