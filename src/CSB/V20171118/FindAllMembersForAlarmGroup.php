<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api FindAllMembersForAlarmGroup
 *
 * @method string getButlerGroupId()
 */
class FindAllMembersForAlarmGroup extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

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
