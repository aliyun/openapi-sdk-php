<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateSnatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getSourceVSwitchId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSourceCIDR()
 * @method string getSnatTableId()
 * @method string getOwnerId()
 * @method string getSnatIp()
 */
class CreateSnatEntry extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'CreateSnatEntry';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @param string $sourceVSwitchId
     *
     * @return $this
     */
    public function withSourceVSwitchId($sourceVSwitchId)
    {
        $this->data['SourceVSwitchId'] = $sourceVSwitchId;
        $this->options['query']['SourceVSwitchId'] = $sourceVSwitchId;

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
     * @param string $sourceCIDR
     *
     * @return $this
     */
    public function withSourceCIDR($sourceCIDR)
    {
        $this->data['SourceCIDR'] = $sourceCIDR;
        $this->options['query']['SourceCIDR'] = $sourceCIDR;

        return $this;
    }

    /**
     * @param string $snatTableId
     *
     * @return $this
     */
    public function withSnatTableId($snatTableId)
    {
        $this->data['SnatTableId'] = $snatTableId;
        $this->options['query']['SnatTableId'] = $snatTableId;

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

    /**
     * @param string $snatIp
     *
     * @return $this
     */
    public function withSnatIp($snatIp)
    {
        $this->data['SnatIp'] = $snatIp;
        $this->options['query']['SnatIp'] = $snatIp;

        return $this;
    }
}
