<?php

namespace AlibabaCloud\Csas\V20230120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachApplication2Connector attachApplication2Connector(array $options = [])
 * @method CreateDynamicRoute createDynamicRoute(array $options = [])
 * @method CreatePrivateAccessApplication createPrivateAccessApplication(array $options = [])
 * @method CreatePrivateAccessPolicy createPrivateAccessPolicy(array $options = [])
 * @method CreatePrivateAccessTag createPrivateAccessTag(array $options = [])
 * @method CreateRegistrationPolicy createRegistrationPolicy(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method DeleteDynamicRoute deleteDynamicRoute(array $options = [])
 * @method DeletePrivateAccessApplication deletePrivateAccessApplication(array $options = [])
 * @method DeletePrivateAccessPolicy deletePrivateAccessPolicy(array $options = [])
 * @method DeletePrivateAccessTag deletePrivateAccessTag(array $options = [])
 * @method DeleteRegistrationPolicies deleteRegistrationPolicies(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method DetachApplication2Connector detachApplication2Connector(array $options = [])
 * @method GetDynamicRoute getDynamicRoute(array $options = [])
 * @method GetPrivateAccessApplication getPrivateAccessApplication(array $options = [])
 * @method GetPrivateAccessPolicy getPrivateAccessPolicy(array $options = [])
 * @method GetRegistrationPolicy getRegistrationPolicy(array $options = [])
 * @method GetUserDevice getUserDevice(array $options = [])
 * @method GetUserGroup getUserGroup(array $options = [])
 * @method ListApplicationsForPrivateAccessPolicy listApplicationsForPrivateAccessPolicy(array $options = [])
 * @method ListApplicationsForPrivateAccessTag listApplicationsForPrivateAccessTag(array $options = [])
 * @method ListConnectors listConnectors(array $options = [])
 * @method ListDynamicRouteRegions listDynamicRouteRegions(array $options = [])
 * @method ListDynamicRoutes listDynamicRoutes(array $options = [])
 * @method ListExcessiveDeviceRegistrationApplications listExcessiveDeviceRegistrationApplications(array $options = [])
 * @method ListPolicesForPrivateAccessApplication listPolicesForPrivateAccessApplication(array $options = [])
 * @method ListPolicesForPrivateAccessTag listPolicesForPrivateAccessTag(array $options = [])
 * @method ListPolicesForUserGroup listPolicesForUserGroup(array $options = [])
 * @method ListPrivateAccessApplications listPrivateAccessApplications(array $options = [])
 * @method ListPrivateAccessApplicationsForDynamicRoute listPrivateAccessApplicationsForDynamicRoute(array $options = [])
 * @method ListPrivateAccessPolices listPrivateAccessPolices(array $options = [])
 * @method ListPrivateAccessTags listPrivateAccessTags(array $options = [])
 * @method ListPrivateAccessTagsForDynamicRoute listPrivateAccessTagsForDynamicRoute(array $options = [])
 * @method ListRegistrationPolicies listRegistrationPolicies(array $options = [])
 * @method ListRegistrationPoliciesForUserGroup listRegistrationPoliciesForUserGroup(array $options = [])
 * @method ListSoftwareForUserDevice listSoftwareForUserDevice(array $options = [])
 * @method ListTagsForPrivateAccessApplication listTagsForPrivateAccessApplication(array $options = [])
 * @method ListTagsForPrivateAccessPolicy listTagsForPrivateAccessPolicy(array $options = [])
 * @method ListUserDevices listUserDevices(array $options = [])
 * @method ListUserGroups listUserGroups(array $options = [])
 * @method ListUserGroupsForPrivateAccessPolicy listUserGroupsForPrivateAccessPolicy(array $options = [])
 * @method ListUserGroupsForRegistrationPolicy listUserGroupsForRegistrationPolicy(array $options = [])
 * @method UpdateDynamicRoute updateDynamicRoute(array $options = [])
 * @method UpdateExcessiveDeviceRegistrationApplicationsStatus updateExcessiveDeviceRegistrationApplicationsStatus(array $options = [])
 * @method UpdatePrivateAccessApplication updatePrivateAccessApplication(array $options = [])
 * @method UpdatePrivateAccessPolicy updatePrivateAccessPolicy(array $options = [])
 * @method UpdateRegistrationPolicy updateRegistrationPolicy(array $options = [])
 * @method UpdateUserDevicesSharingStatus updateUserDevicesSharingStatus(array $options = [])
 * @method UpdateUserDevicesStatus updateUserDevicesStatus(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 */
class CsasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'csas';

    /** @var string */
    public $version = '2023-01-20';
}

/**
 * @method string getConnectorId()
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class AttachApplication2Connector extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectorId($value)
    {
        $this->data['ConnectorId'] = $value;
        $this->options['form_params']['ConnectorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDynamicRouteType()
 * @method string getTagIds()
 * @method string getRegionIds()
 * @method string getPriority()
 * @method string getNextHop()
 * @method string getApplicationIds()
 * @method string getName()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class CreateDynamicRoute extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicRouteType($value)
    {
        $this->data['DynamicRouteType'] = $value;
        $this->options['form_params']['DynamicRouteType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIds($value)
    {
        $this->data['RegionIds'] = $value;
        $this->options['form_params']['RegionIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHop($value)
    {
        $this->data['NextHop'] = $value;
        $this->options['form_params']['NextHop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getAddresses()
 * @method string getDescription()
 * @method string getProtocol()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTagIds()
 * @method string getPortRanges()
 * @method string getName()
 * @method string getStatus()
 */
class CreatePrivateAccessApplication extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddresses($value)
    {
        $this->data['Addresses'] = $value;
        $this->options['form_params']['Addresses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocol($value)
    {
        $this->data['Protocol'] = $value;
        $this->options['form_params']['Protocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortRanges($value)
    {
        $this->data['PortRanges'] = $value;
        $this->options['form_params']['PortRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCustomUserAttributes()
 * @method string getTagIds()
 * @method string getUserGroupIds()
 * @method string getPolicyAction()
 * @method string getPriority()
 * @method string getApplicationIds()
 * @method string getUserGroupMode()
 * @method string getName()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class CreatePrivateAccessPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomUserAttributes($value)
    {
        $this->data['CustomUserAttributes'] = $value;
        $this->options['form_params']['CustomUserAttributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyAction($value)
    {
        $this->data['PolicyAction'] = $value;
        $this->options['form_params']['PolicyAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupMode($value)
    {
        $this->data['UserGroupMode'] = $value;
        $this->options['form_params']['UserGroupMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 */
class CreatePrivateAccessTag extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getMatchMode()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCompanyLimitCount()
 * @method string getPersonalLimitCount()
 * @method string getUserGroupIds()
 * @method string getWhitelist()
 * @method string getPriority()
 * @method string getPersonalLimitType()
 * @method string getName()
 * @method string getCompanyLimitType()
 * @method string getStatus()
 */
class CreateRegistrationPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchMode($value)
    {
        $this->data['MatchMode'] = $value;
        $this->options['form_params']['MatchMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitCount($value)
    {
        $this->data['CompanyLimitCount'] = $value;
        $this->options['form_params']['CompanyLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitCount($value)
    {
        $this->data['PersonalLimitCount'] = $value;
        $this->options['form_params']['PersonalLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelist($value)
    {
        $this->data['Whitelist'] = $value;
        $this->options['form_params']['Whitelist'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitType($value)
    {
        $this->data['PersonalLimitType'] = $value;
        $this->options['form_params']['PersonalLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitType($value)
    {
        $this->data['CompanyLimitType'] = $value;
        $this->options['form_params']['CompanyLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getName()
 * @method string getAttributes()
 */
class CreateUserGroup extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }
}

/**
 * @method string getDynamicRouteId()
 * @method $this withDynamicRouteId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteDynamicRoute extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApplicationId()
 */
class DeletePrivateAccessApplication extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 */
class DeletePrivateAccessPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }
}

/**
 * @method string getTagId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeletePrivateAccessTag extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagId($value)
    {
        $this->data['TagId'] = $value;
        $this->options['form_params']['TagId'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteRegistrationPolicies extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyIds($value)
    {
        $this->data['PolicyIds'] = $value;
        $this->options['form_params']['PolicyIds'] = $value;

        return $this;
    }
}

/**
 * @method string getUserGroupId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DeleteUserGroup extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getConnectorId()
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class DetachApplication2Connector extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectorId($value)
    {
        $this->data['ConnectorId'] = $value;
        $this->options['form_params']['ConnectorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }
}

/**
 * @method string getDynamicRouteId()
 * @method $this withDynamicRouteId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetDynamicRoute extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetPrivateAccessApplication extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class GetPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class GetRegistrationPolicy extends Rpc
{
}

/**
 * @method string getDeviceTag()
 * @method $this withDeviceTag($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetUserDevice extends Rpc
{
}

/**
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class GetUserGroup extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListApplicationsForPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListApplicationsForPrivateAccessTag extends Rpc
{
}

/**
 * @method string getSwitchStatus()
 * @method $this withSwitchStatus($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getConnectorIds()
 * @method $this withConnectorIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListConnectors extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListDynamicRouteRegions extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getDynamicRouteIds()
 * @method $this withDynamicRouteIds($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getRegionIds()
 * @method $this withRegionIds($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDynamicRoutes extends Rpc
{
}

/**
 * @method string getDeviceTag()
 * @method $this withDeviceTag($value)
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getStatuses()
 * @method $this withStatuses($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListExcessiveDeviceRegistrationApplications extends Rpc
{
}

/**
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPolicesForPrivateAccessApplication extends Rpc
{
}

/**
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPolicesForPrivateAccessTag extends Rpc
{
}

/**
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPolicesForUserGroup extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getConnectorId()
 * @method $this withConnectorId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPrivateAccessApplications extends Rpc
{
}

/**
 * @method string getDynamicRouteIds()
 * @method $this withDynamicRouteIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPrivateAccessApplicationsForDynamicRoute extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPolicyAction()
 * @method $this withPolicyAction($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListPrivateAccessPolices extends Rpc
{
}

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSimpleMode()
 * @method $this withSimpleMode($value)
 * @method string getTagIds()
 * @method $this withTagIds($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListPrivateAccessTags extends Rpc
{
}

/**
 * @method string getDynamicRouteIds()
 * @method $this withDynamicRouteIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListPrivateAccessTagsForDynamicRoute extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getMatchMode()
 * @method $this withMatchMode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserGroupId()
 * @method $this withUserGroupId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPersonalLimitType()
 * @method $this withPersonalLimitType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCompanyLimitType()
 * @method $this withCompanyLimitType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListRegistrationPolicies extends Rpc
{
}

/**
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListRegistrationPoliciesForUserGroup extends Rpc
{
}

/**
 * @method string getDeviceTag()
 * @method $this withDeviceTag($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSoftwareForUserDevice extends Rpc
{
}

/**
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListTagsForPrivateAccessApplication extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListTagsForPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getMac()
 * @method $this withMac($value)
 * @method string getDeviceTypes()
 * @method $this withDeviceTypes($value)
 * @method string getHostname()
 * @method $this withHostname($value)
 * @method string getAppStatuses()
 * @method $this withAppStatuses($value)
 * @method string getDlpStatuses()
 * @method $this withDlpStatuses($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSaseUserId()
 * @method $this withSaseUserId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNacStatuses()
 * @method $this withNacStatuses($value)
 * @method string getDepartment()
 * @method $this withDepartment($value)
 * @method string getIaStatuses()
 * @method $this withIaStatuses($value)
 * @method string getDeviceBelong()
 * @method $this withDeviceBelong($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getSharingStatus()
 * @method $this withSharingStatus($value)
 * @method string getDeviceTags()
 * @method $this withDeviceTags($value)
 * @method string getDeviceStatuses()
 * @method $this withDeviceStatuses($value)
 * @method string getPaStatuses()
 * @method $this withPaStatuses($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListUserDevices extends Rpc
{
}

/**
 * @method string getAttributeValue()
 * @method $this withAttributeValue($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPAPolicyId()
 * @method $this withPAPolicyId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getUserGroupIds()
 * @method $this withUserGroupIds($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ListUserGroups extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListUserGroupsForPrivateAccessPolicy extends Rpc
{
}

/**
 * @method string getPolicyIds()
 * @method $this withPolicyIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class ListUserGroupsForRegistrationPolicy extends Rpc
{
}

/**
 * @method string getDescription()
 * @method string getDynamicRouteId()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDynamicRouteType()
 * @method string getTagIds()
 * @method string getRegionIds()
 * @method string getPriority()
 * @method string getNextHop()
 * @method string getApplicationIds()
 * @method string getModifyType()
 * @method string getName()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class UpdateDynamicRoute extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicRouteId($value)
    {
        $this->data['DynamicRouteId'] = $value;
        $this->options['form_params']['DynamicRouteId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDynamicRouteType($value)
    {
        $this->data['DynamicRouteType'] = $value;
        $this->options['form_params']['DynamicRouteType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIds($value)
    {
        $this->data['RegionIds'] = $value;
        $this->options['form_params']['RegionIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextHop($value)
    {
        $this->data['NextHop'] = $value;
        $this->options['form_params']['NextHop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getApplicationIds()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getStatus()
 */
class UpdateExcessiveDeviceRegistrationApplicationsStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getAddresses()
 * @method string getDescription()
 * @method string getProtocol()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getApplicationId()
 * @method string getTagIds()
 * @method string getPortRanges()
 * @method string getModifyType()
 * @method string getStatus()
 */
class UpdatePrivateAccessApplication extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddresses($value)
    {
        $this->data['Addresses'] = $value;
        $this->options['form_params']['Addresses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocol($value)
    {
        $this->data['Protocol'] = $value;
        $this->options['form_params']['Protocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationId($value)
    {
        $this->data['ApplicationId'] = $value;
        $this->options['form_params']['ApplicationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPortRanges($value)
    {
        $this->data['PortRanges'] = $value;
        $this->options['form_params']['PortRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method string getCustomUserAttributes()
 * @method string getTagIds()
 * @method string getUserGroupIds()
 * @method string getPolicyAction()
 * @method string getPriority()
 * @method string getApplicationIds()
 * @method string getUserGroupMode()
 * @method string getModifyType()
 * @method string getApplicationType()
 * @method string getStatus()
 */
class UpdatePrivateAccessPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomUserAttributes($value)
    {
        $this->data['CustomUserAttributes'] = $value;
        $this->options['form_params']['CustomUserAttributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagIds($value)
    {
        $this->data['TagIds'] = $value;
        $this->options['form_params']['TagIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyAction($value)
    {
        $this->data['PolicyAction'] = $value;
        $this->options['form_params']['PolicyAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationIds($value)
    {
        $this->data['ApplicationIds'] = $value;
        $this->options['form_params']['ApplicationIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupMode($value)
    {
        $this->data['UserGroupMode'] = $value;
        $this->options['form_params']['UserGroupMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationType($value)
    {
        $this->data['ApplicationType'] = $value;
        $this->options['form_params']['ApplicationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getMatchMode()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPolicyId()
 * @method string getCompanyLimitCount()
 * @method string getPersonalLimitCount()
 * @method string getUserGroupIds()
 * @method string getWhitelist()
 * @method string getPriority()
 * @method string getPersonalLimitType()
 * @method string getName()
 * @method string getCompanyLimitType()
 * @method string getStatus()
 */
class UpdateRegistrationPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMatchMode($value)
    {
        $this->data['MatchMode'] = $value;
        $this->options['form_params']['MatchMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPolicyId($value)
    {
        $this->data['PolicyId'] = $value;
        $this->options['form_params']['PolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitCount($value)
    {
        $this->data['CompanyLimitCount'] = $value;
        $this->options['form_params']['CompanyLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitCount($value)
    {
        $this->data['PersonalLimitCount'] = $value;
        $this->options['form_params']['PersonalLimitCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupIds($value)
    {
        $this->data['UserGroupIds'] = $value;
        $this->options['form_params']['UserGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWhitelist($value)
    {
        $this->data['Whitelist'] = $value;
        $this->options['form_params']['Whitelist'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriority($value)
    {
        $this->data['Priority'] = $value;
        $this->options['form_params']['Priority'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonalLimitType($value)
    {
        $this->data['PersonalLimitType'] = $value;
        $this->options['form_params']['PersonalLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompanyLimitType($value)
    {
        $this->data['CompanyLimitType'] = $value;
        $this->options['form_params']['CompanyLimitType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getSharingStatus()
 * @method string getDeviceTags()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class UpdateUserDevicesSharingStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSharingStatus($value)
    {
        $this->data['SharingStatus'] = $value;
        $this->options['form_params']['SharingStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTags($value)
    {
        $this->data['DeviceTags'] = $value;
        $this->options['form_params']['DeviceTags'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceAction()
 * @method string getDeviceTags()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class UpdateUserDevicesStatus extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAction($value)
    {
        $this->data['DeviceAction'] = $value;
        $this->options['form_params']['DeviceAction'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceTags($value)
    {
        $this->data['DeviceTags'] = $value;
        $this->options['form_params']['DeviceTags'] = $value;

        return $this;
    }
}

/**
 * @method string getUserGroupId()
 * @method string getDescription()
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getModifyType()
 * @method string getAttributes()
 */
class UpdateUserGroup extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupId($value)
    {
        $this->data['UserGroupId'] = $value;
        $this->options['form_params']['UserGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModifyType($value)
    {
        $this->data['ModifyType'] = $value;
        $this->options['form_params']['ModifyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }
}
