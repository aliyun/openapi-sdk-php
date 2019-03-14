<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * Api FindProjectsNameList
 *
 * @method string getOperationFlag()
 * @method string getCsbId()
 */
class FindProjectsNameList extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';

    /**
     * @param string $operationFlag
     *
     * @return $this
     */
    public function withOperationFlag($operationFlag)
    {
        $this->data['OperationFlag'] = $operationFlag;
        $this->options['query']['OperationFlag'] = $operationFlag;

        return $this;
    }

    /**
     * @param string $csbId
     *
     * @return $this
     */
    public function withCsbId($csbId)
    {
        $this->data['CsbId'] = $csbId;
        $this->options['query']['CsbId'] = $csbId;

        return $this;
    }
}
