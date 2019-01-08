<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddTrancodeSEI
 *
 * @method string getDelay()
 * @method string getAppName()
 * @method string getRepeat()
 * @method string getDomainName()
 * @method string getPattern()
 * @method string getText()
 * @method string getOwnerId()
 * @method string getStreamName()
 */
class AddTrancodeSEI extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'AddTrancodeSEI';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $delay
     *
     * @return $this
     */
    public function withDelay($delay)
    {
        $this->data['Delay'] = $delay;
        $this->options['query']['Delay'] = $delay;

        return $this;
    }

    /**
     * @param string $appName
     *
     * @return $this
     */
    public function withAppName($appName)
    {
        $this->data['AppName'] = $appName;
        $this->options['query']['AppName'] = $appName;

        return $this;
    }

    /**
     * @param string $repeat
     *
     * @return $this
     */
    public function withRepeat($repeat)
    {
        $this->data['Repeat'] = $repeat;
        $this->options['query']['Repeat'] = $repeat;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $pattern
     *
     * @return $this
     */
    public function withPattern($pattern)
    {
        $this->data['Pattern'] = $pattern;
        $this->options['query']['Pattern'] = $pattern;

        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function withText($text)
    {
        $this->data['Text'] = $text;
        $this->options['query']['Text'] = $text;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $streamName
     *
     * @return $this
     */
    public function withStreamName($streamName)
    {
        $this->data['StreamName'] = $streamName;
        $this->options['query']['StreamName'] = $streamName;

        return $this;
    }
}
