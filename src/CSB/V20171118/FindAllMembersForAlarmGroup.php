<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindAllMembersForAlarmGroup
 *
 * @method string getButlerGroupId()
 */
class FindAllMembersForAlarmGroup extends RpcRequest
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
    public $action = 'FindAllMembersForAlarmGroup';

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
