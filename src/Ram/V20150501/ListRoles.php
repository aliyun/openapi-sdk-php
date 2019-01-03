<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListRoles
 *
 * @method string getMarker()
 * @method string getMaxItems()
 */
class ListRoles extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ram';

    /**
     * @var string
     */
    public $version = '2015-05-01';

    /**
     * @var string
     */
    public $action = 'ListRoles';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withMarker() instead.
     *
     * @param string $marker
     *
     * @return $this
     */
    public function setMarker($marker)
    {
        return $this->withMarker($marker);
    }

    /**
     * @param string $marker
     *
     * @return $this
     */
    public function withMarker($marker)
    {
        $this->data['Marker'] = $marker;
        $this->options['query']['Marker'] = $marker;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxItems() instead.
     *
     * @param string $maxItems
     *
     * @return $this
     */
    public function setMaxItems($maxItems)
    {
        return $this->withMaxItems($maxItems);
    }

    /**
     * @param string $maxItems
     *
     * @return $this
     */
    public function withMaxItems($maxItems)
    {
        $this->data['MaxItems'] = $maxItems;
        $this->options['query']['MaxItems'] = $maxItems;

        return $this;
    }
}
