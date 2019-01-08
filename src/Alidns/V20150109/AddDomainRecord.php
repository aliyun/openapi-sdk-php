<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddDomainRecord
 *
 * @method string getRR()
 * @method string getLine()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getLang()
 * @method string getType()
 * @method string getPriority()
 * @method string getValue()
 * @method string getTTL()
 */
class AddDomainRecord extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Alidns';

    /**
     * @var string
     */
    public $version = '2015-01-09';

    /**
     * @var string
     */
    public $action = 'AddDomainRecord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @param string $rR
     *
     * @return $this
     */
    public function withRR($rR)
    {
        $this->data['RR'] = $rR;
        $this->options['query']['RR'] = $rR;

        return $this;
    }

    /**
     * @param string $line
     *
     * @return $this
     */
    public function withLine($line)
    {
        $this->data['Line'] = $line;
        $this->options['query']['Line'] = $line;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

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
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['query']['Value'] = $value;

        return $this;
    }

    /**
     * @param string $tTL
     *
     * @return $this
     */
    public function withTTL($tTL)
    {
        $this->data['TTL'] = $tTL;
        $this->options['query']['TTL'] = $tTL;

        return $this;
    }
}
