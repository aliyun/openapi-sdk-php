<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of SearchItem
 *
 * @method string getInstanceName()
 */
class SearchItem extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'ImageSearch';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'SearchItem';

    /**
     * @var string
     */
    public $pathPattern = '/item/search';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['instanceName'] = $instanceName;

        return $this;
    }
}
