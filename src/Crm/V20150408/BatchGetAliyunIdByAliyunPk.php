<?php

namespace AlibabaCloud\Crm\V20150408;

use AlibabaCloud\Rpc;

/**
 * @method array getPkList()
 */
class BatchGetAliyunIdByAliyunPk extends Rpc
{
    public $product = 'Crm';

    public $version = '2015-04-08';

    public $method = 'POST';

    public $serviceCode = 'crm';

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
