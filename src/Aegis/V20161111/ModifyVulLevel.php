<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyVulLevel
 *
 * @method string getConcernLevel()
 * @method string getSourceIp()
 */
class ModifyVulLevel extends RpcRequest
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
    public $action = 'ModifyVulLevel';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $concernLevel
     *
     * @return $this
     */
    public function withConcernLevel($concernLevel)
    {
        $this->data['ConcernLevel'] = $concernLevel;
        $this->options['query']['ConcernLevel'] = $concernLevel;

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
}
