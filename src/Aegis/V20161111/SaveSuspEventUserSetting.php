<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveSuspEventUserSetting
 *
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getLevelsOn()
 */
class SaveSuspEventUserSetting extends RpcRequest
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
    public $action = 'SaveSuspEventUserSetting';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

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
     * @deprecated deprecated since version 2.0, Use withFrom() instead.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        return $this->withFrom($from);
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLevelsOn() instead.
     *
     * @param string $levelsOn
     *
     * @return $this
     */
    public function setLevelsOn($levelsOn)
    {
        return $this->withLevelsOn($levelsOn);
    }

    /**
     * @param string $levelsOn
     *
     * @return $this
     */
    public function withLevelsOn($levelsOn)
    {
        $this->data['LevelsOn'] = $levelsOn;
        $this->options['query']['LevelsOn'] = $levelsOn;

        return $this;
    }
}
