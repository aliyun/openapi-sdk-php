<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api AddMyGroupInstances
 *
 * @method string getInstances()
 * @method string getGroupId()
 */
class AddMyGroupInstances extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $instances
     *
     * @return $this
     */
    public function withInstances($instances)
    {
        $this->data['Instances'] = $instances;
        $this->options['query']['Instances'] = $instances;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }
}
