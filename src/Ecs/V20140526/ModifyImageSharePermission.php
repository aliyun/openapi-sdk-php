<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method array getAddAccount()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getRemoveAccount()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyImageSharePermission extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $addAccount
     *
     * @return $this
     */
    public function withAddAccount(array $addAccount)
    {
        $this->data['AddAccount'] = $addAccount;
        foreach ($addAccount as $i => $iValue) {
            $this->options['query']['AddAccount.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $removeAccount
     *
     * @return $this
     */
    public function withRemoveAccount(array $removeAccount)
    {
        $this->data['RemoveAccount'] = $removeAccount;
        foreach ($removeAccount as $i => $iValue) {
            $this->options['query']['RemoveAccount.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
