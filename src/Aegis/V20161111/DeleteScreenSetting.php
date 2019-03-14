<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DeleteScreenSetting
 *
 * @method string getSourceIp()
 * @method string getScreenTitle()
 */
class DeleteScreenSetting extends Rpc
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
     * @param string $screenTitle
     *
     * @return $this
     */
    public function withScreenTitle($screenTitle)
    {
        $this->data['ScreenTitle'] = $screenTitle;
        $this->options['query']['ScreenTitle'] = $screenTitle;

        return $this;
    }
}
