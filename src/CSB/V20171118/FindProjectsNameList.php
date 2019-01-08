<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of FindProjectsNameList
 *
 * @method string getOperationFlag()
 * @method string getCsbId()
 */
class FindProjectsNameList extends RpcRequest
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
    public $action = 'FindProjectsNameList';

    /**
     * @var string
     */
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
