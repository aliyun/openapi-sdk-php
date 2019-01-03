<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of LogicalDeleteResource
 *
 * @method string getCountry()
 * @method string getHid()
 * @method string getSuccess()
 * @method string getInterrupt()
 * @method string getGmtWakeup()
 * @method string getPk()
 * @method string getInvoker()
 * @method string getBid()
 * @method string getMessage()
 * @method string getTaskExtraData()
 * @method string getTaskIdentifier()
 */
class LogicalDeleteResource extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'LogicalDeleteResource';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

    /**
     * @deprecated deprecated since version 2.0, Use withCountry() instead.
     *
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        return $this->withCountry($country);
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function withCountry($country)
    {
        $this->data['Country'] = $country;
        $this->options['query']['Country'] = $country;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHid() instead.
     *
     * @param string $hid
     *
     * @return $this
     */
    public function setHid($hid)
    {
        return $this->withHid($hid);
    }

    /**
     * @param string $hid
     *
     * @return $this
     */
    public function withHid($hid)
    {
        $this->data['Hid'] = $hid;
        $this->options['query']['Hid'] = $hid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSuccess() instead.
     *
     * @param string $success
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        return $this->withSuccess($success);
    }

    /**
     * @param string $success
     *
     * @return $this
     */
    public function withSuccess($success)
    {
        $this->data['Success'] = $success;
        $this->options['query']['Success'] = $success;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInterrupt() instead.
     *
     * @param string $interrupt
     *
     * @return $this
     */
    public function setInterrupt($interrupt)
    {
        return $this->withInterrupt($interrupt);
    }

    /**
     * @param string $interrupt
     *
     * @return $this
     */
    public function withInterrupt($interrupt)
    {
        $this->data['Interrupt'] = $interrupt;
        $this->options['query']['Interrupt'] = $interrupt;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGmtWakeup() instead.
     *
     * @param string $gmtWakeup
     *
     * @return $this
     */
    public function setGmtWakeup($gmtWakeup)
    {
        return $this->withGmtWakeup($gmtWakeup);
    }

    /**
     * @param string $gmtWakeup
     *
     * @return $this
     */
    public function withGmtWakeup($gmtWakeup)
    {
        $this->data['GmtWakeup'] = $gmtWakeup;
        $this->options['query']['GmtWakeup'] = $gmtWakeup;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPk() instead.
     *
     * @param string $pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        return $this->withPk($pk);
    }

    /**
     * @param string $pk
     *
     * @return $this
     */
    public function withPk($pk)
    {
        $this->data['Pk'] = $pk;
        $this->options['query']['Pk'] = $pk;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInvoker() instead.
     *
     * @param string $invoker
     *
     * @return $this
     */
    public function setInvoker($invoker)
    {
        return $this->withInvoker($invoker);
    }

    /**
     * @param string $invoker
     *
     * @return $this
     */
    public function withInvoker($invoker)
    {
        $this->data['Invoker'] = $invoker;
        $this->options['query']['Invoker'] = $invoker;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBid() instead.
     *
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        return $this->withBid($bid);
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['Bid'] = $bid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMessage() instead.
     *
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        return $this->withMessage($message);
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function withMessage($message)
    {
        $this->data['Message'] = $message;
        $this->options['query']['Message'] = $message;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskExtraData() instead.
     *
     * @param string $taskExtraData
     *
     * @return $this
     */
    public function setTaskExtraData($taskExtraData)
    {
        return $this->withTaskExtraData($taskExtraData);
    }

    /**
     * @param string $taskExtraData
     *
     * @return $this
     */
    public function withTaskExtraData($taskExtraData)
    {
        $this->data['TaskExtraData'] = $taskExtraData;
        $this->options['query']['TaskExtraData'] = $taskExtraData;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTaskIdentifier() instead.
     *
     * @param string $taskIdentifier
     *
     * @return $this
     */
    public function setTaskIdentifier($taskIdentifier)
    {
        return $this->withTaskIdentifier($taskIdentifier);
    }

    /**
     * @param string $taskIdentifier
     *
     * @return $this
     */
    public function withTaskIdentifier($taskIdentifier)
    {
        $this->data['TaskIdentifier'] = $taskIdentifier;
        $this->options['query']['TaskIdentifier'] = $taskIdentifier;

        return $this;
    }
}
