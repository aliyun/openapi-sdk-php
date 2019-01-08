<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchGetAliyunIdByAliyunPk
 *
 * @method array getPkList()
 */
class BatchGetAliyunIdByAliyunPk extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Crm';

    /**
     * @var string
     */
    public $version = '2015-04-08';

    /**
     * @var string
     */
    public $action = 'BatchGetAliyunIdByAliyunPk';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param array $pkList
     *
     * @return $this
     */
    public function withPkList(array $pkList)
    {
        $this->data['PkList'] = $pkList;
        foreach ($pkList as $i => $iValue) {
            $this->options['query']['PkList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
