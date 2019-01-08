<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateMyGroupInstances
 *
 * @method string getInstances()
 * @method string getGroupId()
 */
class UpdateMyGroupInstances extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'UpdateMyGroupInstances';

    /**
     * @var string
     */
    public $method = 'POST';

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
