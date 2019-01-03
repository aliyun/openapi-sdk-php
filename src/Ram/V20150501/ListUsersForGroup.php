<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListUsersForGroup
 *
 * @method string getMarker()
 * @method string getMaxItems()
 * @method string getGroupName()
 */
class ListUsersForGroup extends RpcRequest
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
    public $action = 'ListUsersForGroup';

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

    /**
     * @deprecated deprecated since version 2.0, Use withGroupName() instead.
     *
     * @param string $groupName
     *
     * @return $this
     */
    public function setGroupName($groupName)
    {
        return $this->withGroupName($groupName);
    }

    /**
     * @param string $groupName
     *
     * @return $this
     */
    public function withGroupName($groupName)
    {
        $this->data['GroupName'] = $groupName;
        $this->options['query']['GroupName'] = $groupName;

        return $this;
    }
}
