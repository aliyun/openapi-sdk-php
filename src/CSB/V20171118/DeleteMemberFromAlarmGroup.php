<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteMemberFromAlarmGroup
 *
 * @method string getData()
 * @method string getButlerGroupId()
 */
class DeleteMemberFromAlarmGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'DeleteMemberFromAlarmGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withData() instead.
     *
     * @param string $data
     *
     * @return $this
     */
    public function setData($data)
    {
        return $this->withData($data);
    }

    /**
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withButlerGroupId() instead.
     *
     * @param string $butlerGroupId
     *
     * @return $this
     */
    public function setButlerGroupId($butlerGroupId)
    {
        return $this->withButlerGroupId($butlerGroupId);
    }

    /**
     * @param string $butlerGroupId
     *
     * @return $this
     */
    public function withButlerGroupId($butlerGroupId)
    {
        $this->data['ButlerGroupId'] = $butlerGroupId;
        $this->options['query']['ButlerGroupId'] = $butlerGroupId;

        return $this;
    }
}
