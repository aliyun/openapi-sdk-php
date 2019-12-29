<?php

namespace AlibabaCloud\Imageseg\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SegmentBody segmentBody(array $options = [])
 * @method SegmentCommodity segmentCommodity(array $options = [])
 * @method SegmentCommonImage segmentCommonImage(array $options = [])
 */
class ImagesegApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imageseg';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'imageseg';
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentBody extends Rpc
{
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentCommodity extends Rpc
{
}

/**
 * @method string getImageURL()
 * @method $this withImageURL($value)
 */
class SegmentCommonImage extends Rpc
{
}
