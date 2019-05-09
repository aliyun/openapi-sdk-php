<?php

namespace AlibabaCloud\DataworksPublic\V20180601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateManualDag createManualDag(array $options = [])
 * @method SearchManualDagNodeInstance searchManualDagNodeInstance(array $options = [])
 */
class DataworksPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'dataworks-public';

    /** @var string */
    public $version = '2018-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dataworks-public';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getBizdate()
 * @method $this withBizdate($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getDagPara()
 * @method $this withDagPara($value)
 * @method string getNodePara()
 * @method $this withNodePara($value)
 */
class CreateManualDag extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getDagId()
 * @method $this withDagId($value)
 */
class SearchManualDagNodeInstance extends Rpc
{
}
