<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api OperateSuspiciousTargetConfig
 *
 * @method string getTargetOperations()
 * @method string getSourceIp()
 * @method string getTargetType()
 * @method string getLang()
 * @method string getType()
 */
class OperateSuspiciousTargetConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
}
