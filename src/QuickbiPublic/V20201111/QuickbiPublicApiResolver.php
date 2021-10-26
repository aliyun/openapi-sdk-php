<?php

namespace AlibabaCloud\QuickbiPublic\V20201111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDataLevelPermissionRuleUsers addDataLevelPermissionRuleUsers(array $options = [])
 * @method AddDataLevelPermissionWhiteList addDataLevelPermissionWhiteList(array $options = [])
 * @method DeleteDataLevelPermissionRuleUsers deleteDataLevelPermissionRuleUsers(array $options = [])
 * @method DeleteDataLevelRuleConfig deleteDataLevelRuleConfig(array $options = [])
 * @method ListCubeDataLevelPermissionConfig listCubeDataLevelPermissionConfig(array $options = [])
 * @method ListDataLevelPermissionWhiteList listDataLevelPermissionWhiteList(array $options = [])
 * @method QueryDatasetSwitchInfo queryDatasetSwitchInfo(array $options = [])
 * @method SetDataLevelPermissionExtraConfig setDataLevelPermissionExtraConfig(array $options = [])
 * @method SetDataLevelPermissionRuleConfig setDataLevelPermissionRuleConfig(array $options = [])
 * @method SetDataLevelPermissionWhiteList setDataLevelPermissionWhiteList(array $options = [])
 * @method UpdateDataLevelPermissionStatus updateDataLevelPermissionStatus(array $options = [])
 */
class QuickbiPublicApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'quickbi-public';

    /** @var string */
    public $version = '2020-11-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'quickbi';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getAddUserModel()
 * @method $this withAddUserModel($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class AddDataLevelPermissionRuleUsers extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getTargetIds()
 * @method $this withTargetIds($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class AddDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getDeleteUserModel()
 * @method $this withDeleteUserModel($value)
 */
class DeleteDataLevelPermissionRuleUsers extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class DeleteDataLevelRuleConfig extends Rpc
{
}

/**
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class ListCubeDataLevelPermissionConfig extends Rpc
{
}

/**
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class ListDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class QueryDatasetSwitchInfo extends Rpc
{
}

/**
 * @method string getMissHitPolicy()
 * @method $this withMissHitPolicy($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class SetDataLevelPermissionExtraConfig extends Rpc
{
}

/**
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getRuleModel()
 * @method $this withRuleModel($value)
 */
class SetDataLevelPermissionRuleConfig extends Rpc
{
}

/**
 * @method string getWhiteListModel()
 * @method $this withWhiteListModel($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 */
class SetDataLevelPermissionWhiteList extends Rpc
{
}

/**
 * @method string getIsOpen()
 * @method $this withIsOpen($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getSignType()
 * @method $this withSignType($value)
 * @method string getCubeId()
 * @method $this withCubeId($value)
 */
class UpdateDataLevelPermissionStatus extends Rpc
{
}
