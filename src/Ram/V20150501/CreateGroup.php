<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateGroup
 *
 * @method string getComments()
 * @method string getGroupName()
 */
class CreateGroup extends RpcRequest
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
    public $action = 'CreateGroup';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function withComments($comments)
    {
        $this->data['Comments'] = $comments;
        $this->options['query']['Comments'] = $comments;

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
