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
     * @deprecated deprecated since version 2.0, Use withOperationFlag() instead.
     *
     * @param string $operationFlag
     *
     * @return $this
     */
    public function setOperationFlag($operationFlag)
    {
        return $this->withOperationFlag($operationFlag);
    }

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
     * @deprecated deprecated since version 2.0, Use withCsbId() instead.
     *
     * @param string $csbId
     *
     * @return $this
     */
    public function setCsbId($csbId)
    {
        return $this->withCsbId($csbId);
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
