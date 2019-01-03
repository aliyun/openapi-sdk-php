<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RollbackQuaraFile
 *
 * @method string getSourceIp()
 * @method string getEventType()
 * @method string getTag()
 * @method string getUuid()
 * @method string getEventName()
 */
class RollbackQuaraFile extends RpcRequest
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
    public $action = 'RollbackQuaraFile';

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
     * @deprecated deprecated since version 2.0, Use withEventType() instead.
     *
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        return $this->withEventType($eventType);
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function withEventType($eventType)
    {
        $this->data['EventType'] = $eventType;
        $this->options['query']['EventType'] = $eventType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        return $this->withTag($tag);
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function withTag($tag)
    {
        $this->data['Tag'] = $tag;
        $this->options['query']['Tag'] = $tag;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUuid() instead.
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        return $this->withUuid($uuid);
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function withUuid($uuid)
    {
        $this->data['Uuid'] = $uuid;
        $this->options['query']['Uuid'] = $uuid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventName() instead.
     *
     * @param string $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        return $this->withEventName($eventName);
    }

    /**
     * @param string $eventName
     *
     * @return $this
     */
    public function withEventName($eventName)
    {
        $this->data['EventName'] = $eventName;
        $this->options['query']['EventName'] = $eventName;

        return $this;
    }
}
