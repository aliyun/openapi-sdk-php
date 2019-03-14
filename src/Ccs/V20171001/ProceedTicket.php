<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * Api ProceedTicket
 *
 * @method string getMemo()
 * @method string getId()
 * @method string getCcsInstanceId()
 * @method string getOperation()
 * @method string getOperatorId()
 */
class ProceedTicket extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';

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
