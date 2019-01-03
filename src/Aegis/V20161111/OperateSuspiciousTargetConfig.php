<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OperateSuspiciousTargetConfig
 *
 * @method string getTargetOperations()
 * @method string getSourceIp()
 * @method string getTargetType()
 * @method string getLang()
 * @method string getType()
 */
class OperateSuspiciousTargetConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'OperateSuspiciousTargetConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @deprecated deprecated since version 2.0, Use withTargetOperations() instead.
     *
     * @param string $targetOperations
     *
     * @return $this
     */
    public function setTargetOperations($targetOperations)
    {
        return $this->withTargetOperations($targetOperations);
    }

    /**
     * @param string $targetOperations
     *
     * @return $this
     */
    public function withTargetOperations($targetOperations)
    {
        $this->data['TargetOperations'] = $targetOperations;
        $this->options['query']['TargetOperations'] = $targetOperations;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetType() instead.
     *
     * @param string $targetType
     *
     * @return $this
     */
    public function setTargetType($targetType)
    {
        return $this->withTargetType($targetType);
    }

    /**
     * @param string $targetType
     *
     * @return $this
     */
    public function withTargetType($targetType)
    {
        $this->data['TargetType'] = $targetType;
        $this->options['query']['TargetType'] = $targetType;

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
}
