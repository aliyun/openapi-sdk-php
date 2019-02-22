<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUserFlowStatistics
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSmartAGId()
 * @method array getUserNames()
 * @method string getOwnerId()
 */
class DescribeUserFlowStatistics extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Smartag';

    /**
     * @var string
     */
    public $version = '2018-03-13';

    /**
     * @var string
     */
    public $action = 'DescribeUserFlowStatistics';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $smartAGId
     *
     * @return $this
     */
    public function withSmartAGId($smartAGId)
    {
        $this->data['SmartAGId'] = $smartAGId;
        $this->options['query']['SmartAGId'] = $smartAGId;

        return $this;
    }

    /**
     * @param array $userNames
     *
     * @return $this
     */
    public function withUserNames(array $userNames)
    {
        $this->data['UserNames'] = $userNames;
        foreach ($userNames as $i => $iValue) {
            $this->options['query']['UserNames.' . ($i + 1)] = $iValue;
        }

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
