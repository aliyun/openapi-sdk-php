<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RollbackSuspEventQuaraFile
 *
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getQuaraFileId()
 */
class RollbackSuspEventQuaraFile extends RpcRequest
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
    public $action = 'RollbackSuspEventQuaraFile';

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
     * @param string $quaraFileId
     *
     * @return $this
     */
    public function withQuaraFileId($quaraFileId)
    {
        $this->data['QuaraFileId'] = $quaraFileId;
        $this->options['query']['QuaraFileId'] = $quaraFileId;

        return $this;
    }
}
