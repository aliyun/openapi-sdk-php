<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TaskConfigDelete
 *
 * @method array getIdList()
 */
class TaskConfigDelete extends RpcRequest
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
    public $action = 'TaskConfigDelete';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $idList
     *
     * @return $this
     */
    public function withIdList(array $idList)
    {
        $this->data['IdList'] = $idList;
        foreach ($idList as $i => $iValue) {
            $this->options['query']['IdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
