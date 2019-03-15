<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getResourceOwnerId()
 * @method string getStartStatisTime()
 * @method string getResourceOwnerAccount()
 * @method string getLevel()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEndStatisTime()
 */
class GetOSSStatis extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'GetOSSStatis';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId']             = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $startStatisTime
     *
     * @return $this
     */
    public function withStartStatisTime($startStatisTime)
    {
        $this->data['StartStatisTime']             = $startStatisTime;
        $this->options['query']['StartStatisTime'] = $startStatisTime;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount']             = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level']             = $level;
        $this->options['query']['Level'] = $level;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount']             = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $endStatisTime
     *
     * @return $this
     */
    public function withEndStatisTime($endStatisTime)
    {
        $this->data['EndStatisTime']             = $endStatisTime;
        $this->options['query']['EndStatisTime'] = $endStatisTime;

        return $this;
    }
}
