<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStatusValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getStatusKey()
 */
class ModifyUserBusinessBehavior extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $statusValue
     *
     * @return $this
     */
    public function withStatusValue($statusValue)
    {
        $this->data['StatusValue'] = $statusValue;
        $this->options['query']['statusValue'] = $statusValue;

        return $this;
    }

    /**
     * @param string $statusKey
     *
     * @return $this
     */
    public function withStatusKey($statusKey)
    {
        $this->data['StatusKey'] = $statusKey;
        $this->options['query']['statusKey'] = $statusKey;

        return $this;
    }
}
