<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateSmartAccessGatewayVersion
 *
 * @method string getResourceOwnerId()
 * @method string getSerialNumber()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSmartAGId()
 * @method string getOwnerId()
 * @method string getVersionCode()
 */
class UpdateSmartAccessGatewayVersion extends RpcRequest
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
    public $action = 'UpdateSmartAccessGatewayVersion';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'smartag';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withSerialNumber() instead.
     *
     * @param string $serialNumber
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        return $this->withSerialNumber($serialNumber);
    }

    /**
     * @param string $serialNumber
     *
     * @return $this
     */
    public function withSerialNumber($serialNumber)
    {
        $this->data['SerialNumber'] = $serialNumber;
        $this->options['query']['SerialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withSmartAGId() instead.
     *
     * @param string $smartAGId
     *
     * @return $this
     */
    public function setSmartAGId($smartAGId)
    {
        return $this->withSmartAGId($smartAGId);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withVersionCode() instead.
     *
     * @param string $versionCode
     *
     * @return $this
     */
    public function setVersionCode($versionCode)
    {
        return $this->withVersionCode($versionCode);
    }

    /**
     * @param string $versionCode
     *
     * @return $this
     */
    public function withVersionCode($versionCode)
    {
        $this->data['VersionCode'] = $versionCode;
        $this->options['query']['VersionCode'] = $versionCode;

        return $this;
    }
}
