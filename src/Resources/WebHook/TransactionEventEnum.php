<?php


namespace Zoop\Resources\WebHook;


class TransactionEventEnum
{

    const CREATED = 'transaction.created';
    const CANCELED = 'transaction.canceled';
    const CAPTURE_FAILED = 'transaction.capture.failed';
    const CAPTURE_SUCCEEDED = 'transaction.capture.succeeded';
    const CHARGE_BACK = 'transaction.charged_back';
    const COMISSION_SUCCEEDED = 'transaction.commission.succeeded';
    const DISPUTED = 'transaction.disputed';
    const DISPUTED_SUCCEEDED = 'transaction.dispute.succeeded';
    const PRE_AUTHORIZATION_FAILED = 'transaction.pre_authorization.failed';
    const PRE_AUTHORIZATION_SUCCEEDED = 'transaction.pre_authorization.succeeded';
    const PRE_AUTHORIZED = 'transaction.pre_authorized';
    const REVERSED = 'transaction.reversed';
    const SUCCEEDED = 'transaction.succeeded';
    const UPDATED = 'transaction.updated';
    const VOID_FAILED = 'transaction.void.failed';
    const VOID_SUCCEEDED = 'transaction.void.succeeded';
    const FAILED = 'transaction.failed';

    public static function listAll(): array
    {
        $list = [];
        $list[] = self::CREATED;
        $list[] = self::CANCELED;
        $list[] = self::CAPTURE_FAILED;
        $list[] = self::CAPTURE_SUCCEEDED;
        $list[] = self::CHARGE_BACK;
        $list[] = self::COMISSION_SUCCEEDED;
        $list[] = self::DISPUTED_SUCCEEDED;
        $list[] = self::PRE_AUTHORIZATION_FAILED;
        $list[] = self::PRE_AUTHORIZATION_SUCCEEDED;
        $list[] = self::PRE_AUTHORIZED;
        $list[] = self::REVERSED;
        $list[] = self::SUCCEEDED;
        $list[] = self::UPDATED;
        $list[] = self::VOID_FAILED;
        $list[] = self::VOID_SUCCEEDED;
        $list[] = self::FAILED;
        return $list;
    }

}