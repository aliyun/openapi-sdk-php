<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api DeleteMemberFromAlarmGroup
 *
 * @method string getData()
 * @method string getButlerGroupId()
 */
class DeleteMemberFromAlarmGroup extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

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
