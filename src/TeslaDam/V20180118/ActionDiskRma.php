<?php

namespace AlibabaCloud\TeslaDam\V20180118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ActionDiskRma
 *
 * @method string getDiskName()
 * @method string getExecutionId()
 * @method string getDiskSlot()
 * @method string getHostname()
 * @method string getDiskMount()
 * @method string getDiskReason()
 * @method string getDiskSn()
 */
class ActionDiskRma extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaDam';

    /**
     * @var string
     */
    public $version = '2018-01-18';

    /**
     * @var string
     */
    public $action = 'ActionDiskRma';

    /**
     * @param string $diskName
     *
     * @return $this
     */
    public function withDiskName($diskName)
    {
        $this->data['DiskName'] = $diskName;
        $this->options['query']['DiskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $executionId
     *
     * @return $this
     */
    public function withExecutionId($executionId)
    {
        $this->data['ExecutionId'] = $executionId;
        $this->options['query']['ExecutionId'] = $executionId;

        return $this;
    }

    /**
     * @param string $diskSlot
     *
     * @return $this
     */
    public function withDiskSlot($diskSlot)
    {
        $this->data['DiskSlot'] = $diskSlot;
        $this->options['query']['DiskSlot'] = $diskSlot;

        return $this;
    }

    /**
     * @param string $hostname
     *
     * @return $this
     */
    public function withHostname($hostname)
    {
        $this->data['Hostname'] = $hostname;
        $this->options['query']['Hostname'] = $hostname;

        return $this;
    }

    /**
     * @param string $diskMount
     *
     * @return $this
     */
    public function withDiskMount($diskMount)
    {
        $this->data['DiskMount'] = $diskMount;
        $this->options['query']['DiskMount'] = $diskMount;

        return $this;
    }

    /**
     * @param string $diskReason
     *
     * @return $this
     */
    public function withDiskReason($diskReason)
    {
        $this->data['DiskReason'] = $diskReason;
        $this->options['query']['DiskReason'] = $diskReason;

        return $this;
    }

    /**
     * @param string $diskSn
     *
     * @return $this
     */
    public function withDiskSn($diskSn)
    {
        $this->data['DiskSn'] = $diskSn;
        $this->options['query']['DiskSn'] = $diskSn;

        return $this;
    }
}
