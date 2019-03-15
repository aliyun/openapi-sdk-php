<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getAddGroup1()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRemoveGroup1()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyImageShareGroupPermission extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $addGroup1
     *
     * @return $this
     */
    public function withAddGroup1($addGroup1)
    {
        $this->data['AddGroup1'] = $addGroup1;
        $this->options['query']['AddGroup.1'] = $addGroup1;

        return $this;
    }

    /**
     * @param string $removeGroup1
     *
     * @return $this
     */
    public function withRemoveGroup1($removeGroup1)
    {
        $this->data['RemoveGroup1'] = $removeGroup1;
        $this->options['query']['RemoveGroup.1'] = $removeGroup1;

        return $this;
    }
}
