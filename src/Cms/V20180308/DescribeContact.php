<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeContact
 *
 * @method string getContactName()
 */
class DescribeContact extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'DescribeContact';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withContactName() instead.
     *
     * @param string $contactName
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        return $this->withContactName($contactName);
    }

    /**
     * @param string $contactName
     *
     * @return $this
     */
    public function withContactName($contactName)
    {
        $this->data['ContactName'] = $contactName;
        $this->options['query']['ContactName'] = $contactName;

        return $this;
    }
}
