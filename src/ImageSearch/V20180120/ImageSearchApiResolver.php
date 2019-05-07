<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method SearchItem searchItem(array $options = [])
 * @method DeleteItem deleteItem(array $options = [])
 * @method AddItem addItem(array $options = [])
 */
class ImageSearchApiResolver
{
    use ApiResolverTrait;
}

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
    use Traits\SearchItemTrait;

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
    use Traits\DeleteItemTrait;

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
    use Traits\AddItemTrait;

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
