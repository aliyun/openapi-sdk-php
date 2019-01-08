<?php

namespace AlibabaCloud\Cdn\V20141111;

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
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'ListFCTrigger';

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
