<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * Api ListFCTrigger
 *
 * @method string getEventMetaVersion()
 * @method string getOwnerId()
 * @method string getEventMetaName()
 */
class ListFCTrigger extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

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
