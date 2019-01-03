<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListFCTrigger
 *
 * @method string getEventMetaVersion()
 * @method string getOwnerId()
 * @method string getEventMetaName()
 */
class ListFCTrigger extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'ListFCTrigger';

    /**
     * @deprecated deprecated since version 2.0, Use withEventMetaVersion() instead.
     *
     * @param string $eventMetaVersion
     *
     * @return $this
     */
    public function setEventMetaVersion($eventMetaVersion)
    {
        return $this->withEventMetaVersion($eventMetaVersion);
    }

    /**
     * @param string $eventMetaVersion
     *
     * @return $this
     */
    public function withEventMetaVersion($eventMetaVersion)
    {
        $this->data['EventMetaVersion'] = $eventMetaVersion;
        $this->options['query']['EventMetaVersion'] = $eventMetaVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventMetaName() instead.
     *
     * @param string $eventMetaName
     *
     * @return $this
     */
    public function setEventMetaName($eventMetaName)
    {
        return $this->withEventMetaName($eventMetaName);
    }

    /**
     * @param string $eventMetaName
     *
     * @return $this
     */
    public function withEventMetaName($eventMetaName)
    {
        $this->data['EventMetaName'] = $eventMetaName;
        $this->options['query']['EventMetaName'] = $eventMetaName;

        return $this;
    }
}
