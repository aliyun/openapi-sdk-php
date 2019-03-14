<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api RollbackSuspEventQuaraFile
 *
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getQuaraFileId()
 */
class RollbackSuspEventQuaraFile extends Rpc
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
