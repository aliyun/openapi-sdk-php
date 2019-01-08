<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDeviceGroupTags
 *
 * @method string getTagString()
 * @method string getGroupId()
 */
class SetDeviceGroupTags extends RpcRequest
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
    public $action = 'SetDeviceGroupTags';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $tagString
     *
     * @return $this
     */
    public function withTagString($tagString)
    {
        $this->data['TagString'] = $tagString;
        $this->options['query']['TagString'] = $tagString;

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
