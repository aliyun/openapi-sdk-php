<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDomainTrackName
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getCnameTrackRecord()
 * @method string getDomainId()
 */
class UpdateDomainTrackName extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'UpdateDomainTrackName';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withCnameTrackRecord() instead.
     *
     * @param string $cnameTrackRecord
     *
     * @return $this
     */
    public function setCnameTrackRecord($cnameTrackRecord)
    {
        return $this->withCnameTrackRecord($cnameTrackRecord);
    }

    /**
     * @param string $cnameTrackRecord
     *
     * @return $this
     */
    public function withCnameTrackRecord($cnameTrackRecord)
    {
        $this->data['CnameTrackRecord'] = $cnameTrackRecord;
        $this->options['query']['CnameTrackRecord'] = $cnameTrackRecord;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDomainId() instead.
     *
     * @param string $domainId
     *
     * @return $this
     */
    public function setDomainId($domainId)
    {
        return $this->withDomainId($domainId);
    }

    /**
     * @param string $domainId
     *
     * @return $this
     */
    public function withDomainId($domainId)
    {
        $this->data['DomainId'] = $domainId;
        $this->options['query']['DomainId'] = $domainId;

        return $this;
    }
}
