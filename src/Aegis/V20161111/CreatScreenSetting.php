<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatScreenSetting
 *
 * @method string getSourceIp()
 * @method string getScreenTitle()
 * @method string getScreenIdSetting()
 */
class CreatScreenSetting extends RpcRequest
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
    public $action = 'CreatScreenSetting';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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

    /**
     * @param string $screenIdSetting
     *
     * @return $this
     */
    public function withScreenIdSetting($screenIdSetting)
    {
        $this->data['ScreenIdSetting'] = $screenIdSetting;
        $this->options['query']['ScreenIdSetting'] = $screenIdSetting;

        return $this;
    }
}
