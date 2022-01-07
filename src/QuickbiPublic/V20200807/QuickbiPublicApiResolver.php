<?php

namespace AlibabaCloud\QuickbiPublic\V20200807;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckReadable checkReadable(array $options = [])
 * @method QueryEmbeddedInfo queryEmbeddedInfo(array $options = [])
 * @method QueryEmbeddedStaus queryEmbeddedStaus(array $options = [])
 * @method QueryReadableResourcesListByUserId queryReadableResourcesListByUserId(array $options = [])
 * @method QueryWorks queryWorks(array $options = [])
 * @method QueryWorksByOrganization queryWorksByOrganization(array $options = [])
 * @method QueryWorksByWorkspace queryWorksByWorkspace(array $options = [])
 * @method UpdateEmbeddedStatus updateEmbeddedStatus(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-08-07';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class CheckReadable extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryEmbeddedInfo extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryEmbeddedStaus extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class QueryReadableResourcesListByUserId extends Rpc
{
}

/**
 * @method string getApiLevel()
 * @method $this withApiLevel($value)
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class QueryWorks extends Rpc
{
}

/**
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryWorksByOrganization extends Rpc
{
}

/**
 * @method string getWorksType()
 * @method $this withWorksType($value)
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getWorkspaceId()
 * @method $this withWorkspaceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryWorksByWorkspace extends Rpc
{
}

/**
 * @method string getWorksId()
 * @method $this withWorksId($value)
 * @method string getThirdPartAuthFlag()
 * @method $this withThirdPartAuthFlag($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class UpdateEmbeddedStatus extends Rpc
{
}
