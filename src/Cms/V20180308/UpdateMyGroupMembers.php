<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateMyGroupMembers
 *
 * @method string getReaders()
 * @method string getGroupId()
 * @method string getMasters()
 */
class UpdateMyGroupMembers extends RpcRequest
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
    public $action = 'UpdateMyGroupMembers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withReaders() instead.
     *
     * @param string $readers
     *
     * @return $this
     */
    public function setReaders($readers)
    {
        return $this->withReaders($readers);
    }

    /**
     * @param string $readers
     *
     * @return $this
     */
    public function withReaders($readers)
    {
        $this->data['Readers'] = $readers;
        $this->options['query']['Readers'] = $readers;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withMasters() instead.
     *
     * @param string $masters
     *
     * @return $this
     */
    public function setMasters($masters)
    {
        return $this->withMasters($masters);
    }

    /**
     * @param string $masters
     *
     * @return $this
     */
    public function withMasters($masters)
    {
        $this->data['Masters'] = $masters;
        $this->options['query']['Masters'] = $masters;

        return $this;
    }
}
