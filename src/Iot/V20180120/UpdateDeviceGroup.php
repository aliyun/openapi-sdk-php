<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDeviceGroup
 *
 * @method string getGroupDesc()
 * @method string getGroupId()
 */
class UpdateDeviceGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'UpdateDeviceGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $groupDesc
     *
     * @return $this
     */
    public function withGroupDesc($groupDesc)
    {
        $this->data['GroupDesc'] = $groupDesc;
        $this->options['query']['GroupDesc'] = $groupDesc;

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
