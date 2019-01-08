<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDayu
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyDayu extends RpcRequest
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
    public $action = 'ModifyDayu';

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
}
