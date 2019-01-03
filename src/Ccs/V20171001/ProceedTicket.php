<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ProceedTicket
 *
 * @method string getMemo()
 * @method string getId()
 * @method string getCcsInstanceId()
 * @method string getOperation()
 * @method string getOperatorId()
 */
class ProceedTicket extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'ProceedTicket';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use withMemo() instead.
     *
     * @param string $memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        return $this->withMemo($memo);
    }

    /**
     * @param string $memo
     *
     * @return $this
     */
    public function withMemo($memo)
    {
        $this->data['Memo'] = $memo;
        $this->options['query']['Memo'] = $memo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withId() instead.
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        return $this->withId($id);
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function withId($id)
    {
        $this->data['Id'] = $id;
        $this->options['query']['Id'] = $id;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOperation() instead.
     *
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        return $this->withOperation($operation);
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function withOperation($operation)
    {
        $this->data['Operation'] = $operation;
        $this->options['query']['Operation'] = $operation;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOperatorId() instead.
     *
     * @param string $operatorId
     *
     * @return $this
     */
    public function setOperatorId($operatorId)
    {
        return $this->withOperatorId($operatorId);
    }

    /**
     * @param string $operatorId
     *
     * @return $this
     */
    public function withOperatorId($operatorId)
    {
        $this->data['OperatorId'] = $operatorId;
        $this->options['query']['OperatorId'] = $operatorId;

        return $this;
    }
}
