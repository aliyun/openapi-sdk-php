<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUserSetting
 *
 * @method string getSourceIp()
 * @method string getAlertLevels()
 * @method string getInvalidWarningKeepDays()
 */
class CreateUserSetting extends RpcRequest
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
    public $action = 'CreateUserSetting';

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
     * @param string $alertLevels
     *
     * @return $this
     */
    public function withAlertLevels($alertLevels)
    {
        $this->data['AlertLevels'] = $alertLevels;
        $this->options['query']['AlertLevels'] = $alertLevels;

        return $this;
    }

    /**
     * @param string $invalidWarningKeepDays
     *
     * @return $this
     */
    public function withInvalidWarningKeepDays($invalidWarningKeepDays)
    {
        $this->data['InvalidWarningKeepDays'] = $invalidWarningKeepDays;
        $this->options['query']['InvalidWarningKeepDays'] = $invalidWarningKeepDays;

        return $this;
    }
}
