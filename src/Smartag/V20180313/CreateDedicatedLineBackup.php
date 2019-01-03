<?php

namespace AlibabaCloud\Smartag\V20180313;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDedicatedLineBackup
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getCcnId()
 * @method string getSmartAGId()
 * @method string getOwnerId()
 * @method string getVbrId()
 * @method string getVbrRegionId()
 */
class CreateDedicatedLineBackup extends RpcRequest
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
    public $action = 'CreateDedicatedLineBackup';

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
     * @deprecated deprecated since version 2.0, Use withCcnId() instead.
     *
     * @param string $ccnId
     *
     * @return $this
     */
    public function setCcnId($ccnId)
    {
        return $this->withCcnId($ccnId);
    }

    /**
     * @param string $ccnId
     *
     * @return $this
     */
    public function withCcnId($ccnId)
    {
        $this->data['CcnId'] = $ccnId;
        $this->options['query']['CcnId'] = $ccnId;

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
     * @deprecated deprecated since version 2.0, Use withVbrId() instead.
     *
     * @param string $vbrId
     *
     * @return $this
     */
    public function setVbrId($vbrId)
    {
        return $this->withVbrId($vbrId);
    }

    /**
     * @param string $vbrId
     *
     * @return $this
     */
    public function withVbrId($vbrId)
    {
        $this->data['VbrId'] = $vbrId;
        $this->options['query']['VbrId'] = $vbrId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVbrRegionId() instead.
     *
     * @param string $vbrRegionId
     *
     * @return $this
     */
    public function setVbrRegionId($vbrRegionId)
    {
        return $this->withVbrRegionId($vbrRegionId);
    }

    /**
     * @param string $vbrRegionId
     *
     * @return $this
     */
    public function withVbrRegionId($vbrRegionId)
    {
        $this->data['VbrRegionId'] = $vbrRegionId;
        $this->options['query']['VbrRegionId'] = $vbrRegionId;

        return $this;
    }
}
