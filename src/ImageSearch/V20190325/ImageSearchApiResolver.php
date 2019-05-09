<?php

namespace AlibabaCloud\ImageSearch\V20190325;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ListTagResources listTagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method SearchImage searchImage(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method AddImage addImage(array $options = [])
 */
class ImageSearchApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'ImageSearch';

    /** @var string */
    public $version = '2019-03-25';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method array getResourceId()
 * @method string getNextToken()
 * @method array getTag()
 * @method string getResourceType()
 */
class ListTagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/imagesearch/listTag';

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getAll()
 * @method array getResourceId()
 * @method array getTagKey()
 * @method string getResourceType()
 */
class UntagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/imagesearch/untag';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['query']['All'] = $value;

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
    public function withTagKey(array $tagKey)
    {
        $this->data['TagKey'] = $tagKey;
        foreach ($tagKey as $i => $iValue) {
            $this->options['query']['TagKey.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }
}

/**
 * @method array getResourceId()
 * @method array getTag()
 * @method string getResourceType()
 */
class TagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/imagesearch/tag';

    /**
     * @param array $resourceId
     *
     * @return $this
     */
    public function withResourceId(array $resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        foreach ($resourceId as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $depth1 => $depth1Value) {
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }
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
class SearchImage extends Roa
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
        $this->options['form_params']['Filter'] = $value;

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
        $this->options['form_params']['PicContent'] = $value;

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
        $this->options['form_params']['InstanceName'] = $value;

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
        $this->options['form_params']['ProductId'] = $value;

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
        $this->options['form_params']['Num'] = $value;

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
        $this->options['form_params']['PicName'] = $value;

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
        $this->options['form_params']['Start'] = $value;

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
        $this->options['form_params']['Region'] = $value;

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
        $this->options['form_params']['Type'] = $value;

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
        $this->options['form_params']['CategoryId'] = $value;

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
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceName()
 * @method string getProductId()
 * @method string getPicName()
 */
class DeleteImage extends Roa
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
        $this->options['form_params']['InstanceName'] = $value;

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
        $this->options['form_params']['ProductId'] = $value;

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
        $this->options['form_params']['PicName'] = $value;

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
class AddImage extends Roa
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
        $this->options['form_params']['PicContent'] = $value;

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
        $this->options['form_params']['StrAttr'] = $value;

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
        $this->options['form_params']['InstanceName'] = $value;

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
        $this->options['form_params']['IntAttr'] = $value;

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
        $this->options['form_params']['ProductId'] = $value;

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
        $this->options['form_params']['PicName'] = $value;

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
        $this->options['form_params']['CustomContent'] = $value;

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
        $this->options['form_params']['Region'] = $value;

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
        $this->options['form_params']['CategoryId'] = $value;

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
        $this->options['form_params']['Crop'] = $value;

        return $this;
    }
}
