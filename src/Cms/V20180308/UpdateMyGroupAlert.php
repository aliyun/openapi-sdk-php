<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api UpdateMyGroupAlert
 *
 * @method string getGroupAlertJson()
 */
class UpdateMyGroupAlert extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $groupAlertJson
     *
     * @return $this
     */
    public function withGroupAlertJson($groupAlertJson)
    {
        $this->data['GroupAlertJson'] = $groupAlertJson;
        $this->options['query']['GroupAlertJson'] = $groupAlertJson;

        return $this;
    }
}
