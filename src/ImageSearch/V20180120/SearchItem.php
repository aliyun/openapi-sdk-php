<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\ImageSearch\V20180120\Traits\SearchItemTrait;
use AlibabaCloud\Roa;

/**
 * Api SearchItem
 *
 * @method string getInstanceName()
 */
class SearchItem extends Roa
{
    use SearchItemTrait;
    public $product = 'ImageSearch';

    public $version = '2018-01-20';

    public $pathPattern = '/item/search';

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
