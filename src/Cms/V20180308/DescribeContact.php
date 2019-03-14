<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api DescribeContact
 *
 * @method string getContactName()
 */
class DescribeContact extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
