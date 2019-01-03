<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TriggerRecord
 *
 * @method string getIotId()
 * @method string getStreamType()
 * @method string getPreRecordDuration()
 * @method string getRecordDuration()
 */
class TriggerRecord extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'TriggerRecord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIotId() instead.
     *
     * @param string $iotId
     *
     * @return $this
     */
    public function setIotId($iotId)
    {
        return $this->withIotId($iotId);
    }

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId'] = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStreamType() instead.
     *
     * @param string $streamType
     *
     * @return $this
     */
    public function setStreamType($streamType)
    {
        return $this->withStreamType($streamType);
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function withStreamType($streamType)
    {
        $this->data['StreamType'] = $streamType;
        $this->options['query']['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPreRecordDuration() instead.
     *
     * @param string $preRecordDuration
     *
     * @return $this
     */
    public function setPreRecordDuration($preRecordDuration)
    {
        return $this->withPreRecordDuration($preRecordDuration);
    }

    /**
     * @param string $preRecordDuration
     *
     * @return $this
     */
    public function withPreRecordDuration($preRecordDuration)
    {
        $this->data['PreRecordDuration'] = $preRecordDuration;
        $this->options['query']['PreRecordDuration'] = $preRecordDuration;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRecordDuration() instead.
     *
     * @param string $recordDuration
     *
     * @return $this
     */
    public function setRecordDuration($recordDuration)
    {
        return $this->withRecordDuration($recordDuration);
    }

    /**
     * @param string $recordDuration
     *
     * @return $this
     */
    public function withRecordDuration($recordDuration)
    {
        $this->data['RecordDuration'] = $recordDuration;
        $this->options['query']['RecordDuration'] = $recordDuration;

        return $this;
    }
}
