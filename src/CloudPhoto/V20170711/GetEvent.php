<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetEvent
 *
 * @method string getEventId()
 * @method string getLibraryId()
 * @method string getStoreName()
 */
class GetEvent extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudPhoto';

    /**
     * @var string
     */
    public $version = '2017-07-11';

    /**
     * @var string
     */
    public $action = 'GetEvent';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudphoto';

    /**
     * @param string $eventId
     *
     * @return $this
     */
    public function withEventId($eventId)
    {
        $this->data['EventId'] = $eventId;
        $this->options['query']['EventId'] = $eventId;

        return $this;
    }

    /**
     * @param string $libraryId
     *
     * @return $this
     */
    public function withLibraryId($libraryId)
    {
        $this->data['LibraryId'] = $libraryId;
        $this->options['query']['LibraryId'] = $libraryId;

        return $this;
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function withStoreName($storeName)
    {
        $this->data['StoreName'] = $storeName;
        $this->options['query']['StoreName'] = $storeName;

        return $this;
    }
}
