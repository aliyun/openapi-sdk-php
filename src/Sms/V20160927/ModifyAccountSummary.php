<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyAccountSummary
 *
 * @method string getResourceOwnerId()
 * @method string getMonthQuota()
 * @method string getResourceOwnerAccount()
 * @method string getDailyQuota()
 * @method string getOwnerId()
 */
class ModifyAccountSummary extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sms';

    /**
     * @var string
     */
    public $version = '2016-09-27';

    /**
     * @var string
     */
    public $action = 'ModifyAccountSummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $monthQuota
     *
     * @return $this
     */
    public function withMonthQuota($monthQuota)
    {
        $this->data['MonthQuota'] = $monthQuota;
        $this->options['query']['MonthQuota'] = $monthQuota;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $dailyQuota
     *
     * @return $this
     */
    public function withDailyQuota($dailyQuota)
    {
        $this->data['DailyQuota'] = $dailyQuota;
        $this->options['query']['DailyQuota'] = $dailyQuota;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
