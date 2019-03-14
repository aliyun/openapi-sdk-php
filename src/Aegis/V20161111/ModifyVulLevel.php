<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ModifyVulLevel
 *
 * @method string getConcernLevel()
 * @method string getSourceIp()
 */
class ModifyVulLevel extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

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
