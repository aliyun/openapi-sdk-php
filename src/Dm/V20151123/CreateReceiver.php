<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateReceiver
 *
 * @method string getResourceOwnerId()
 * @method string getReceiversName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getReceiversAlias()
 * @method string getDesc()
 */
class CreateReceiver extends RpcRequest
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
    public $action = 'CreateReceiver';

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
     * @deprecated deprecated since version 2.0, Use withReceiversName() instead.
     *
     * @param string $receiversName
     *
     * @return $this
     */
    public function setReceiversName($receiversName)
    {
        return $this->withReceiversName($receiversName);
    }

    /**
     * @param string $receiversName
     *
     * @return $this
     */
    public function withReceiversName($receiversName)
    {
        $this->data['ReceiversName'] = $receiversName;
        $this->options['query']['ReceiversName'] = $receiversName;

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
     * @deprecated deprecated since version 2.0, Use withReceiversAlias() instead.
     *
     * @param string $receiversAlias
     *
     * @return $this
     */
    public function setReceiversAlias($receiversAlias)
    {
        return $this->withReceiversAlias($receiversAlias);
    }

    /**
     * @param string $receiversAlias
     *
     * @return $this
     */
    public function withReceiversAlias($receiversAlias)
    {
        $this->data['ReceiversAlias'] = $receiversAlias;
        $this->options['query']['ReceiversAlias'] = $receiversAlias;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDesc() instead.
     *
     * @param string $desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        return $this->withDesc($desc);
    }

    /**
     * @param string $desc
     *
     * @return $this
     */
    public function withDesc($desc)
    {
        $this->data['Desc'] = $desc;
        $this->options['query']['Desc'] = $desc;

        return $this;
    }
}
