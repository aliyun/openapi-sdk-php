<?php

namespace AlibabaCloud\Skyeye\V20171201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetCdnSkyeyeStatusData getCdnSkyeyeStatusData(array $options = [])
 * @method SendAlertContent sendAlertContent(array $options = [])
 */
class SkyeyeApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Skyeye';

    /** @var string */
    public $version = '2017-12-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getNode()
 * @method $this withNode($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getGroupBy()
 * @method $this withGroupBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getFields()
 * @method $this withFields($value)
 */
class GetCdnSkyeyeStatusData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAlertTarget()
 * @method $this withAlertTarget($value)
 * @method string getAlertInfoName()
 * @method $this withAlertInfoName($value)
 * @method string getAlertText()
 * @method $this withAlertText($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class SendAlertContent extends Rpc
{
}
