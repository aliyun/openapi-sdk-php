<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api ModifyConcernNecessity
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getConcernNecessity()
 */
class ModifyConcernNecessity extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

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
     * @param string $concernNecessity
     *
     * @return $this
     */
    public function withConcernNecessity($concernNecessity)
    {
        $this->data['ConcernNecessity'] = $concernNecessity;
        $this->options['query']['ConcernNecessity'] = $concernNecessity;

        return $this;
    }
}
