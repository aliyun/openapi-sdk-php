<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api PhysicalDeleteResource
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
class PhysicalDeleteResource extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
