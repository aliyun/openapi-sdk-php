<?php

namespace AlibabaCloud\Drcloud\V20190213;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetAnswer getAnswer(array $options = [])
 */
class DrcloudApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'drcloud';

    /** @var string */
    public $version = '2019-02-13';
}

/**
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getDocContentStructureId()
 * @method $this withDocContentStructureId($value)
 * @method string getQueryChannel()
 * @method $this withQueryChannel($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getNeedAnswerNum()
 * @method $this withNeedAnswerNum($value)
 * @method string getUserQuestion()
 * @method $this withUserQuestion($value)
 * @method string getSourceEnum()
 * @method $this withSourceEnum($value)
 * @method string getSopInstanceKey()
 * @method $this withSopInstanceKey($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getCustomerId()
 * @method $this withCustomerId($value)
 * @method string getTenantId()
 * @method $this withTenantId($value)
 * @method string getCategories()
 * @method $this withCategories($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class GetAnswer extends Rpc
{
}
