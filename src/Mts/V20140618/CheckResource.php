<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CheckResource
 *
 * @method string getCountry()
 * @method string getHid()
 * @method string getLevel()
 * @method string getInvoker()
 * @method string getMessage()
 * @method string getUrl()
 * @method string getSuccess()
 * @method string getInterrupt()
 * @method string getGmtWakeup()
 * @method string getPk()
 * @method string getBid()
 * @method string getPrompt()
 * @method string getTaskExtraData()
 * @method string getTaskIdentifier()
 */
class CheckResource extends RpcRequest
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
    public $action = 'CheckResource';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level'] = $level;
        $this->options['query']['Level'] = $level;

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
     * @param string $url
     *
     * @return $this
     */
    public function withUrl($url)
    {
        $this->data['Url'] = $url;
        $this->options['query']['Url'] = $url;

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
     * @param string $prompt
     *
     * @return $this
     */
    public function withPrompt($prompt)
    {
        $this->data['Prompt'] = $prompt;
        $this->options['query']['Prompt'] = $prompt;

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
