<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateGroup
 *
 * @method string getNewGroupName()
 * @method string getNewComments()
 * @method string getGroupName()
 */
class UpdateGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'UpdateGroup';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $newGroupName
     *
     * @return $this
     */
    public function withNewGroupName($newGroupName)
    {
        $this->data['NewGroupName'] = $newGroupName;
        $this->options['query']['NewGroupName'] = $newGroupName;

        return $this;
    }

    /**
     * @param string $newComments
     *
     * @return $this
     */
    public function withNewComments($newComments)
    {
        $this->data['NewComments'] = $newComments;
        $this->options['query']['NewComments'] = $newComments;

        return $this;
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
