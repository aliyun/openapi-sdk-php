<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDomainRecord
 *
 * @method string getRecordId()
 * @method string getRR()
 * @method string getLine()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getType()
 * @method string getPriority()
 * @method string getValue()
 * @method string getTTL()
 */
class UpdateDomainRecord extends RpcRequest
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
    public $action = 'UpdateDomainRecord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'alidns';

    /**
     * @deprecated deprecated since version 2.0, Use withRecordId() instead.
     *
     * @param string $recordId
     *
     * @return $this
     */
    public function setRecordId($recordId)
    {
        return $this->withRecordId($recordId);
    }

    /**
     * @param string $recordId
     *
     * @return $this
     */
    public function withRecordId($recordId)
    {
        $this->data['RecordId'] = $recordId;
        $this->options['query']['RecordId'] = $recordId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRR() instead.
     *
     * @param string $rR
     *
     * @return $this
     */
    public function setRR($rR)
    {
        return $this->withRR($rR);
    }

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
     * @deprecated deprecated since version 2.0, Use withLine() instead.
     *
     * @param string $line
     *
     * @return $this
     */
    public function setLine($line)
    {
        return $this->withLine($line);
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
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use withPriority() instead.
     *
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        return $this->withPriority($priority);
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
     * @deprecated deprecated since version 2.0, Use withValue() instead.
     *
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        return $this->withValue($value);
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
     * @deprecated deprecated since version 2.0, Use withTTL() instead.
     *
     * @param string $tTL
     *
     * @return $this
     */
    public function setTTL($tTL)
    {
        return $this->withTTL($tTL);
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
