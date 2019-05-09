<?php

namespace AlibabaCloud\ImageSearch\V20180120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SearchItem searchItem(array $options = [])
 * @method DeleteItem deleteItem(array $options = [])
 * @method AddItem addItem(array $options = [])
 */
class ImageSearchApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
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
class SearchItem extends Roa
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
class DeleteItem extends Roa
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
class AddItem extends Roa
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
