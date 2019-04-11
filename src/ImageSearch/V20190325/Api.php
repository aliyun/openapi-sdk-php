<?php

namespace AlibabaCloud\ImageSearch\V20190325;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method SearchImage searchImage(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method AddImage addImage(array $options = [])
 */
class ImageSearchApiResolver
{
    use ApiResolverTrait;
}

class V20190325Roa extends Roa
{
    /** @var string */
    public $product = 'ImageSearch';

    /** @var string */
    public $version = '2019-03-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFilter()
 * @method string getPicContent()
 * @method string getInstanceName()
 * @method string getProductId()
 * @method string getNum()
 * @method string getPicName()
 * @method string getStart()
 * @method string getRegion()
 * @method string getType()
 * @method string getCategoryId()
 * @method string getCrop()
 */
class SearchImage extends V20190325Roa
{
    /** @var string */
    public $pathPattern = '/v2/image/search';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilter($value)
    {
        $this->data['Filter'] = $value;
        $this->options['query']['Filter'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicContent($value)
    {
        $this->data['PicContent'] = $value;
        $this->options['query']['PicContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductId($value)
    {
        $this->data['ProductId'] = $value;
        $this->options['query']['ProductId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNum($value)
    {
        $this->data['Num'] = $value;
        $this->options['query']['Num'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicName($value)
    {
        $this->data['PicName'] = $value;
        $this->options['query']['PicName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStart($value)
    {
        $this->data['Start'] = $value;
        $this->options['query']['Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['query']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['query']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceName()
 * @method string getProductId()
 * @method string getPicName()
 */
class DeleteImage extends V20190325Roa
{
    /** @var string */
    public $pathPattern = '/v2/image/delete';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductId($value)
    {
        $this->data['ProductId'] = $value;
        $this->options['query']['ProductId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicName($value)
    {
        $this->data['PicName'] = $value;
        $this->options['query']['PicName'] = $value;

        return $this;
    }
}

/**
 * @method string getPicContent()
 * @method string getStrAttr()
 * @method string getInstanceName()
 * @method string getIntAttr()
 * @method string getProductId()
 * @method string getPicName()
 * @method string getCustomContent()
 * @method string getRegion()
 * @method string getCategoryId()
 * @method string getCrop()
 */
class AddImage extends V20190325Roa
{
    /** @var string */
    public $pathPattern = '/v2/image/add';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicContent($value)
    {
        $this->data['PicContent'] = $value;
        $this->options['query']['PicContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrAttr($value)
    {
        $this->data['StrAttr'] = $value;
        $this->options['query']['StrAttr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceName($value)
    {
        $this->data['InstanceName'] = $value;
        $this->options['query']['InstanceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntAttr($value)
    {
        $this->data['IntAttr'] = $value;
        $this->options['query']['IntAttr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductId($value)
    {
        $this->data['ProductId'] = $value;
        $this->options['query']['ProductId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicName($value)
    {
        $this->data['PicName'] = $value;
        $this->options['query']['PicName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomContent($value)
    {
        $this->data['CustomContent'] = $value;
        $this->options['query']['CustomContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCategoryId($value)
    {
        $this->data['CategoryId'] = $value;
        $this->options['query']['CategoryId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrop($value)
    {
        $this->data['Crop'] = $value;
        $this->options['query']['Crop'] = $value;

        return $this;
    }
}
