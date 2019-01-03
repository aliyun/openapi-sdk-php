<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySasAssetStatisticsColumn
 *
 * @method string getSourceIp()
 * @method string getStatisticsColumn()
 */
class ModifySasAssetStatisticsColumn extends RpcRequest
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
    public $action = 'ModifySasAssetStatisticsColumn';

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
     * @deprecated deprecated since version 2.0, Use withStatisticsColumn() instead.
     *
     * @param string $statisticsColumn
     *
     * @return $this
     */
    public function setStatisticsColumn($statisticsColumn)
    {
        return $this->withStatisticsColumn($statisticsColumn);
    }

    /**
     * @param string $statisticsColumn
     *
     * @return $this
     */
    public function withStatisticsColumn($statisticsColumn)
    {
        $this->data['StatisticsColumn'] = $statisticsColumn;
        $this->options['query']['StatisticsColumn'] = $statisticsColumn;

        return $this;
    }
}
