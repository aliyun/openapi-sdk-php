<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\ImageSearch\V20180120\Traits\AddItemTrait;
use AlibabaCloud\ImageSearch\V20180120\Traits\DeleteItemTrait;
use AlibabaCloud\ImageSearch\V20180120\Traits\SearchItemTrait;
use AlibabaCloud\Roa;

class V20180120Roa extends Roa
{
    /** @var string */
    public $product = 'ImageSearch';

    /** @var string */
    public $version = '2018-01-20';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceName()
 */
class SearchItem extends V20180120Roa
{
    use SearchItemTrait;

    /** @var string */
    public $pathPattern = '/item/search';


    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['instanceName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceName()
 */
class DeleteItem extends V20180120Roa
{
    use DeleteItemTrait;

    /** @var string */
    public $pathPattern = '/item/delete';


    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['instanceName'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceName()
 */
class AddItem extends V20180120Roa
{
    use AddItemTrait;

    /** @var string */
    public $pathPattern = '/item/add';


    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['instanceName'] = $value;

        return $this;
    }
}
