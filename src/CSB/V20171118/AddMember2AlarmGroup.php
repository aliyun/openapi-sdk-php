<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddMember2AlarmGroup
 *
 * @method string getData()
 * @method string getButlerGroupId()
 */
class AddMember2AlarmGroup extends RpcRequest
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
    public $action = 'AddMember2AlarmGroup';

    /**
     * @var string
     */
    public $method = 'POST';

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
