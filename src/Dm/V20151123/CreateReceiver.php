<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api CreateReceiver
 *
 * @method string getResourceOwnerId()
 * @method string getReceiversName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getReceiversAlias()
 * @method string getDesc()
 */
class CreateReceiver extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

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
