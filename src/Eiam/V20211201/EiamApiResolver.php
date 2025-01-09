<?php

namespace AlibabaCloud\Eiam\V20211201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUsersToGroup addUsersToGroup(array $options = [])
 * @method AddUserToOrganizationalUnits addUserToOrganizationalUnits(array $options = [])
 * @method AuthorizeApplicationToGroups authorizeApplicationToGroups(array $options = [])
 * @method AuthorizeApplicationToOrganizationalUnits authorizeApplicationToOrganizationalUnits(array $options = [])
 * @method AuthorizeApplicationToUsers authorizeApplicationToUsers(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateApplicationClientSecret createApplicationClientSecret(array $options = [])
 * @method CreateDomain createDomain(array $options = [])
 * @method CreateDomainProxyToken createDomainProxyToken(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method CreateIdentityProvider createIdentityProvider(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateNetworkAccessEndpoint createNetworkAccessEndpoint(array $options = [])
 * @method CreateOrganizationalUnit createOrganizationalUnit(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method DeleteApplicationClientSecret deleteApplicationClientSecret(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteDomainProxyToken deleteDomainProxyToken(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method DeleteIdentityProvider deleteIdentityProvider(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteNetworkAccessEndpoint deleteNetworkAccessEndpoint(array $options = [])
 * @method DeleteOrganizationalUnit deleteOrganizationalUnit(array $options = [])
 * @method DeleteOrganizationalUnitChildren deleteOrganizationalUnitChildren(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DisableApplication disableApplication(array $options = [])
 * @method DisableApplicationApiInvoke disableApplicationApiInvoke(array $options = [])
 * @method DisableApplicationClientSecret disableApplicationClientSecret(array $options = [])
 * @method DisableApplicationProvisioning disableApplicationProvisioning(array $options = [])
 * @method DisableApplicationSso disableApplicationSso(array $options = [])
 * @method DisableDomainProxyToken disableDomainProxyToken(array $options = [])
 * @method DisableIdentityProviderUdPull disableIdentityProviderUdPull(array $options = [])
 * @method DisableInitDomainAutoRedirect disableInitDomainAutoRedirect(array $options = [])
 * @method DisableUser disableUser(array $options = [])
 * @method EnableApplication enableApplication(array $options = [])
 * @method EnableApplicationApiInvoke enableApplicationApiInvoke(array $options = [])
 * @method EnableApplicationClientSecret enableApplicationClientSecret(array $options = [])
 * @method EnableApplicationProvisioning enableApplicationProvisioning(array $options = [])
 * @method EnableApplicationSso enableApplicationSso(array $options = [])
 * @method EnableDomainProxyToken enableDomainProxyToken(array $options = [])
 * @method EnableIdentityProviderUdPull enableIdentityProviderUdPull(array $options = [])
 * @method EnableInitDomainAutoRedirect enableInitDomainAutoRedirect(array $options = [])
 * @method EnableUser enableUser(array $options = [])
 * @method GetApplication getApplication(array $options = [])
 * @method GetApplicationGrantScope getApplicationGrantScope(array $options = [])
 * @method GetApplicationProvisioningConfig getApplicationProvisioningConfig(array $options = [])
 * @method GetApplicationProvisioningScope getApplicationProvisioningScope(array $options = [])
 * @method GetApplicationSsoConfig getApplicationSsoConfig(array $options = [])
 * @method GetDomain getDomain(array $options = [])
 * @method GetDomainDnsChallenge getDomainDnsChallenge(array $options = [])
 * @method GetForgetPasswordConfiguration getForgetPasswordConfiguration(array $options = [])
 * @method GetGroup getGroup(array $options = [])
 * @method GetIdentityProvider getIdentityProvider(array $options = [])
 * @method GetIdentityProviderUdPullConfiguration getIdentityProviderUdPullConfiguration(array $options = [])
 * @method GetInstance getInstance(array $options = [])
 * @method GetInstanceLicense getInstanceLicense(array $options = [])
 * @method GetNetworkAccessEndpoint getNetworkAccessEndpoint(array $options = [])
 * @method GetOrganizationalUnit getOrganizationalUnit(array $options = [])
 * @method GetPasswordComplexityConfiguration getPasswordComplexityConfiguration(array $options = [])
 * @method GetPasswordExpirationConfiguration getPasswordExpirationConfiguration(array $options = [])
 * @method GetPasswordHistoryConfiguration getPasswordHistoryConfiguration(array $options = [])
 * @method GetPasswordInitializationConfiguration getPasswordInitializationConfiguration(array $options = [])
 * @method GetRootOrganizationalUnit getRootOrganizationalUnit(array $options = [])
 * @method GetSynchronizationJob getSynchronizationJob(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method ListApplicationClientSecrets listApplicationClientSecrets(array $options = [])
 * @method ListApplications listApplications(array $options = [])
 * @method ListApplicationsForOrganizationalUnit listApplicationsForOrganizationalUnit(array $options = [])
 * @method ListApplicationsForUser listApplicationsForUser(array $options = [])
 * @method ListDomainProxyTokens listDomainProxyTokens(array $options = [])
 * @method ListDomains listDomains(array $options = [])
 * @method ListEiamInstances listEiamInstances(array $options = [])
 * @method ListEiamRegions listEiamRegions(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListGroupsForApplication listGroupsForApplication(array $options = [])
 * @method ListGroupsForUser listGroupsForUser(array $options = [])
 * @method ListIdentityProviders listIdentityProviders(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListNetworkAccessEndpointAvailableRegions listNetworkAccessEndpointAvailableRegions(array $options = [])
 * @method ListNetworkAccessEndpointAvailableZones listNetworkAccessEndpointAvailableZones(array $options = [])
 * @method ListNetworkAccessEndpoints listNetworkAccessEndpoints(array $options = [])
 * @method ListNetworkAccessPaths listNetworkAccessPaths(array $options = [])
 * @method ListOrganizationalUnitParents listOrganizationalUnitParents(array $options = [])
 * @method ListOrganizationalUnits listOrganizationalUnits(array $options = [])
 * @method ListOrganizationalUnitsForApplication listOrganizationalUnitsForApplication(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListSynchronizationJobs listSynchronizationJobs(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListUsersForApplication listUsersForApplication(array $options = [])
 * @method ListUsersForGroup listUsersForGroup(array $options = [])
 * @method ObtainApplicationClientSecret obtainApplicationClientSecret(array $options = [])
 * @method ObtainDomainProxyToken obtainDomainProxyToken(array $options = [])
 * @method RemoveUserFromOrganizationalUnits removeUserFromOrganizationalUnits(array $options = [])
 * @method RemoveUsersFromGroup removeUsersFromGroup(array $options = [])
 * @method RevokeApplicationFromGroups revokeApplicationFromGroups(array $options = [])
 * @method RevokeApplicationFromOrganizationalUnits revokeApplicationFromOrganizationalUnits(array $options = [])
 * @method RevokeApplicationFromUsers revokeApplicationFromUsers(array $options = [])
 * @method RunSynchronizationJob runSynchronizationJob(array $options = [])
 * @method SetApplicationGrantScope setApplicationGrantScope(array $options = [])
 * @method SetApplicationProvisioningConfig setApplicationProvisioningConfig(array $options = [])
 * @method SetApplicationProvisioningScope setApplicationProvisioningScope(array $options = [])
 * @method SetApplicationSsoConfig setApplicationSsoConfig(array $options = [])
 * @method SetDefaultDomain setDefaultDomain(array $options = [])
 * @method SetForgetPasswordConfiguration setForgetPasswordConfiguration(array $options = [])
 * @method SetIdentityProviderUdPullConfiguration setIdentityProviderUdPullConfiguration(array $options = [])
 * @method SetPasswordComplexityConfiguration setPasswordComplexityConfiguration(array $options = [])
 * @method SetPasswordExpirationConfiguration setPasswordExpirationConfiguration(array $options = [])
 * @method SetPasswordHistoryConfiguration setPasswordHistoryConfiguration(array $options = [])
 * @method SetPasswordInitializationConfiguration setPasswordInitializationConfiguration(array $options = [])
 * @method SetUserPrimaryOrganizationalUnit setUserPrimaryOrganizationalUnit(array $options = [])
 * @method UnlockUser unlockUser(array $options = [])
 * @method UpdateApplicationAuthorizationType updateApplicationAuthorizationType(array $options = [])
 * @method UpdateApplicationDescription updateApplicationDescription(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method UpdateGroupDescription updateGroupDescription(array $options = [])
 * @method UpdateIdentityProvider updateIdentityProvider(array $options = [])
 * @method UpdateInstanceDescription updateInstanceDescription(array $options = [])
 * @method UpdateNetworkAccessEndpointName updateNetworkAccessEndpointName(array $options = [])
 * @method UpdateOrganizationalUnit updateOrganizationalUnit(array $options = [])
 * @method UpdateOrganizationalUnitDescription updateOrganizationalUnitDescription(array $options = [])
 * @method UpdateOrganizationalUnitParentId updateOrganizationalUnitParentId(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UpdateUserDescription updateUserDescription(array $options = [])
 * @method UpdateUserPassword updateUserPassword(array $options = [])
 */
class EiamApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Eiam';

    /** @var string */
    public $version = '2021-12-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'eiam';
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class AddUsersToGroup extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AddUserToOrganizationalUnits extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupIds()
 * @method $this withGroupIds($value)
 */
class AuthorizeApplicationToGroups extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class AuthorizeApplicationToOrganizationalUnits extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class AuthorizeApplicationToUsers extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApplicationSourceType()
 * @method $this withApplicationSourceType($value)
 * @method string getLogoUrl()
 * @method $this withLogoUrl($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSsoType()
 * @method $this withSsoType($value)
 * @method string getApplicationTemplateId()
 * @method $this withApplicationTemplateId($value)
 */
class CreateApplication extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class CreateApplicationClientSecret extends Rpc
{
}

/**
 * @method string getFiling()
 * @method $this withFiling($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateDomain extends Rpc
{
}

/**
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateDomainProxyToken extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGroupExternalId()
 * @method $this withGroupExternalId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateGroup extends Rpc
{
}

/**
 * @method string getDingtalkAppConfig()
 * @method $this withDingtalkAppConfig($value)
 * @method string getNetworkAccessEndpointId()
 * @method $this withNetworkAccessEndpointId($value)
 * @method string getAutoUpdateUserConfig()
 * @method $this withAutoUpdateUserConfig($value)
 * @method string getLogoUrl()
 * @method $this withLogoUrl($value)
 * @method string getUdPullConfig()
 * @method $this withUdPullConfig($value)
 * @method string getLarkConfig()
 * @method $this withLarkConfig($value)
 * @method string getWeComConfig()
 * @method $this withWeComConfig($value)
 * @method string getAutoCreateUserConfig()
 * @method $this withAutoCreateUserConfig($value)
 * @method string getAuthnConfig()
 * @method $this withAuthnConfig($value)
 * @method string getBindingConfig()
 * @method $this withBindingConfig($value)
 * @method string getIdentityProviderName()
 * @method $this withIdentityProviderName($value)
 * @method string getLdapConfig()
 * @method $this withLdapConfig($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUdPushConfig()
 * @method $this withUdPushConfig($value)
 * @method string getIdentityProviderType()
 * @method $this withIdentityProviderType($value)
 * @method string getOidcConfig()
 * @method $this withOidcConfig($value)
 */
class CreateIdentityProvider extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateInstance extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getVSwitchIds()
 * @method $this withVSwitchIds($value)
 * @method string getNetworkAccessEndpointName()
 * @method $this withNetworkAccessEndpointName($value)
 * @method string getVpcRegionId()
 * @method $this withVpcRegionId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class CreateNetworkAccessEndpoint extends Rpc
{
}

/**
 * @method string getOrganizationalUnitExternalId()
 * @method $this withOrganizationalUnitExternalId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getOrganizationalUnitName()
 * @method $this withOrganizationalUnitName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CreateOrganizationalUnit extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPhoneRegion()
 * @method $this withPhoneRegion($value)
 * @method string getCustomFields()
 * @method $this withCustomFields($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPasswordInitializationConfig()
 * @method $this withPasswordInitializationConfig($value)
 * @method string getPhoneNumberVerified()
 * @method $this withPhoneNumberVerified($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getPrimaryOrganizationalUnitId()
 * @method $this withPrimaryOrganizationalUnitId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getUserExternalId()
 * @method $this withUserExternalId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getEmailVerified()
 * @method $this withEmailVerified($value)
 */
class CreateUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DeleteApplication extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSecretId()
 * @method $this withSecretId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteApplicationClientSecret extends Rpc
{
}

/**
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getDomainProxyTokenId()
 * @method $this withDomainProxyTokenId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteDomainProxyToken extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 */
class DeleteIdentityProvider extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getNetworkAccessEndpointId()
 * @method $this withNetworkAccessEndpointId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteNetworkAccessEndpoint extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class DeleteOrganizationalUnit extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class DeleteOrganizationalUnitChildren extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DisableApplication extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DisableApplicationApiInvoke extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSecretId()
 * @method $this withSecretId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DisableApplicationClientSecret extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DisableApplicationProvisioning extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DisableApplicationSso extends Rpc
{
}

/**
 * @method string getDomainProxyTokenId()
 * @method $this withDomainProxyTokenId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DisableDomainProxyToken extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 */
class DisableIdentityProviderUdPull extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DisableInitDomainAutoRedirect extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DisableUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class EnableApplication extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class EnableApplicationApiInvoke extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSecretId()
 * @method $this withSecretId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class EnableApplicationClientSecret extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class EnableApplicationProvisioning extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class EnableApplicationSso extends Rpc
{
}

/**
 * @method string getDomainProxyTokenId()
 * @method $this withDomainProxyTokenId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class EnableDomainProxyToken extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 */
class EnableIdentityProviderUdPull extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class EnableInitDomainAutoRedirect extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class EnableUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetApplication extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetApplicationGrantScope extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetApplicationProvisioningConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetApplicationProvisioningScope extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class GetApplicationSsoConfig extends Rpc
{
}

/**
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetDomain extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class GetDomainDnsChallenge extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetForgetPasswordConfiguration extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetGroup extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 */
class GetIdentityProvider extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 */
class GetIdentityProviderUdPullConfiguration extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceLicense extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getNetworkAccessEndpointId()
 * @method $this withNetworkAccessEndpointId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNetworkAccessEndpoint extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class GetOrganizationalUnit extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetPasswordComplexityConfiguration extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetPasswordExpirationConfiguration extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetPasswordHistoryConfiguration extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetPasswordInitializationConfiguration extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetRootOrganizationalUnit extends Rpc
{
}

/**
 * @method string getSynchronizationJobId()
 * @method $this withSynchronizationJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetSynchronizationJob extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class ListApplicationClientSecrets extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAuthorizationType()
 * @method $this withAuthorizationType($value)
 * @method string getApplicationName()
 * @method $this withApplicationName($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListApplications extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class ListApplicationsForOrganizationalUnit extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationIds()
 * @method $this withApplicationIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getQueryMode()
 * @method $this withQueryMode($value)
 */
class ListApplicationsForUser extends Rpc
{
}

/**
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDomainProxyTokens extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListDomains extends Rpc
{
}

/**
 * @method string getInstanceRegionId()
 * @method $this withInstanceRegionId($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 */
class ListEiamInstances extends Rpc
{
}

class ListEiamRegions extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupNameStartsWith()
 * @method $this withGroupNameStartsWith($value)
 * @method string getGroupExternalId()
 * @method $this withGroupExternalId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupIds()
 * @method $this withGroupIds($value)
 */
class ListGroups extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupIds()
 * @method $this withGroupIds($value)
 */
class ListGroupsForApplication extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListGroupsForUser extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListIdentityProviders extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListInstances extends Rpc
{
}

class ListNetworkAccessEndpointAvailableRegions extends Rpc
{
}

/**
 * @method string getNaeRegionId()
 * @method $this withNaeRegionId($value)
 */
class ListNetworkAccessEndpointAvailableZones extends Rpc
{
}

/**
 * @method string getNetworkAccessEndpointType()
 * @method $this withNetworkAccessEndpointType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getVpcRegionId()
 * @method $this withVpcRegionId($value)
 * @method string getNetworkAccessEndpointStatus()
 * @method $this withNetworkAccessEndpointStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListNetworkAccessEndpoints extends Rpc
{
}

/**
 * @method string getNetworkAccessEndpointId()
 * @method $this withNetworkAccessEndpointId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListNetworkAccessPaths extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class ListOrganizationalUnitParents extends Rpc
{
}

/**
 * @method string getOrganizationalUnitNameStartsWith()
 * @method $this withOrganizationalUnitNameStartsWith($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getOrganizationalUnitName()
 * @method $this withOrganizationalUnitName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListOrganizationalUnits extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListOrganizationalUnitsForApplication extends Rpc
{
}

class ListRegions extends Rpc
{
}

/**
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getTargetIds()
 * @method $this withTargetIds($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getFilters()
 * @method $this withFilters($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListSynchronizationJobs extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPhoneRegion()
 * @method $this withPhoneRegion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getUsernameStartsWith()
 * @method $this withUsernameStartsWith($value)
 * @method string getUserSourceType()
 * @method $this withUserSourceType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLocked()
 * @method $this withLocked($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getUserExternalId()
 * @method $this withUserExternalId($value)
 * @method string getDisplayNameStartsWith()
 * @method $this withDisplayNameStartsWith($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getUserSourceId()
 * @method $this withUserSourceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class ListUsersForApplication extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class ListUsersForGroup extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getSecretId()
 * @method $this withSecretId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ObtainApplicationClientSecret extends Rpc
{
}

/**
 * @method string getDomainProxyTokenId()
 * @method $this withDomainProxyTokenId($value)
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ObtainDomainProxyToken extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RemoveUserFromOrganizationalUnits extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class RemoveUsersFromGroup extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupIds()
 * @method $this withGroupIds($value)
 */
class RevokeApplicationFromGroups extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RevokeApplicationFromOrganizationalUnits extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserIds()
 * @method $this withUserIds($value)
 */
class RevokeApplicationFromUsers extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSynchronizationScopeConfig()
 * @method $this withSynchronizationScopeConfig($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPasswordInitialization()
 * @method $this withPasswordInitialization($value)
 * @method string getUserIdentityTypes()
 * @method $this withUserIdentityTypes($value)
 */
class RunSynchronizationJob extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getGrantScopes()
 * @method $this withGrantScopes($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetApplicationGrantScope extends Rpc
{
}

/**
 * @method string getProvisionProtocolType()
 * @method $this withProvisionProtocolType($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getCallbackProvisioningConfig()
 * @method $this withCallbackProvisioningConfig($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getProvisionPassword()
 * @method $this withProvisionPassword($value)
 * @method string getScimProvisioningConfig()
 * @method $this withScimProvisioningConfig($value)
 */
class SetApplicationProvisioningConfig extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getOrganizationalUnitIds()
 * @method $this withOrganizationalUnitIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupIds()
 * @method $this withGroupIds($value)
 */
class SetApplicationProvisioningScope extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInitLoginUrl()
 * @method $this withInitLoginUrl($value)
 * @method string getInitLoginType()
 * @method $this withInitLoginType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOidcSsoConfig()
 * @method $this withOidcSsoConfig($value)
 * @method string getSamlSsoConfig()
 * @method $this withSamlSsoConfig($value)
 */
class SetApplicationSsoConfig extends Rpc
{
}

/**
 * @method string getDomainId()
 * @method $this withDomainId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetDefaultDomain extends Rpc
{
}

/**
 * @method string getAuthenticationChannels()
 * @method $this withAuthenticationChannels($value)
 * @method string getForgetPasswordStatus()
 * @method $this withForgetPasswordStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetForgetPasswordConfiguration extends Rpc
{
}

/**
 * @method string getGroupSyncStatus()
 * @method $this withGroupSyncStatus($value)
 * @method string getUdSyncScopeConfig()
 * @method $this withUdSyncScopeConfig($value)
 * @method string getPeriodicSyncStatus()
 * @method $this withPeriodicSyncStatus($value)
 * @method string getLdapUdPullConfig()
 * @method $this withLdapUdPullConfig($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPullProtectedRule()
 * @method $this withPullProtectedRule($value)
 * @method string getIncrementalCallbackStatus()
 * @method $this withIncrementalCallbackStatus($value)
 */
class SetIdentityProviderUdPullConfiguration extends Rpc
{
}

/**
 * @method string getPasswordMinLength()
 * @method $this withPasswordMinLength($value)
 * @method string getPasswordComplexityRules()
 * @method $this withPasswordComplexityRules($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetPasswordComplexityConfiguration extends Rpc
{
}

/**
 * @method string getPasswordForcedUpdateDuration()
 * @method $this withPasswordForcedUpdateDuration($value)
 * @method string getEffectiveAuthenticationSourceIds()
 * @method $this withEffectiveAuthenticationSourceIds($value)
 * @method string getPasswordExpirationNotificationDuration()
 * @method $this withPasswordExpirationNotificationDuration($value)
 * @method string getPasswordExpirationStatus()
 * @method $this withPasswordExpirationStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPasswordExpirationAction()
 * @method $this withPasswordExpirationAction($value)
 * @method string getPasswordValidMaxDay()
 * @method $this withPasswordValidMaxDay($value)
 * @method string getPasswordExpirationNotificationChannels()
 * @method $this withPasswordExpirationNotificationChannels($value)
 * @method string getPasswordExpirationNotificationStatus()
 * @method $this withPasswordExpirationNotificationStatus($value)
 */
class SetPasswordExpirationConfiguration extends Rpc
{
}

/**
 * @method string getPasswordHistoryStatus()
 * @method $this withPasswordHistoryStatus($value)
 * @method string getPasswordHistoryMaxRetention()
 * @method $this withPasswordHistoryMaxRetention($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetPasswordHistoryConfiguration extends Rpc
{
}

/**
 * @method string getPasswordInitializationType()
 * @method $this withPasswordInitializationType($value)
 * @method string getPasswordInitializationNotificationChannels()
 * @method $this withPasswordInitializationNotificationChannels($value)
 * @method string getPasswordInitializationStatus()
 * @method $this withPasswordInitializationStatus($value)
 * @method string getPasswordForcedUpdateStatus()
 * @method $this withPasswordForcedUpdateStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class SetPasswordInitializationConfiguration extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class SetUserPrimaryOrganizationalUnit extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UnlockUser extends Rpc
{
}

/**
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getAuthorizationType()
 * @method $this withAuthorizationType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateApplicationAuthorizationType extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateApplicationDescription extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getGroupExternalId()
 * @method $this withGroupExternalId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateGroup extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateGroupDescription extends Rpc
{
}

/**
 * @method string getDingtalkAppConfig()
 * @method $this withDingtalkAppConfig($value)
 * @method string getNetworkAccessEndpointId()
 * @method $this withNetworkAccessEndpointId($value)
 * @method string getLogoUrl()
 * @method $this withLogoUrl($value)
 * @method string getIdentityProviderId()
 * @method $this withIdentityProviderId($value)
 * @method string getLarkConfig()
 * @method $this withLarkConfig($value)
 * @method string getWeComConfig()
 * @method $this withWeComConfig($value)
 * @method string getIdentityProviderName()
 * @method $this withIdentityProviderName($value)
 * @method string getLdapConfig()
 * @method $this withLdapConfig($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOidcConfig()
 * @method $this withOidcConfig($value)
 */
class UpdateIdentityProvider extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateInstanceDescription extends Rpc
{
}

/**
 * @method string getNetworkAccessEndpointId()
 * @method $this withNetworkAccessEndpointId($value)
 * @method string getNetworkAccessEndpointName()
 * @method $this withNetworkAccessEndpointName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateNetworkAccessEndpointName extends Rpc
{
}

/**
 * @method string getOrganizationalUnitName()
 * @method $this withOrganizationalUnitName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class UpdateOrganizationalUnit extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class UpdateOrganizationalUnitDescription extends Rpc
{
}

/**
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrganizationalUnitId()
 * @method $this withOrganizationalUnitId($value)
 */
class UpdateOrganizationalUnitParentId extends Rpc
{
}

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPhoneRegion()
 * @method $this withPhoneRegion($value)
 * @method string getCustomFields()
 * @method $this withCustomFields($value)
 * @method string getPhoneNumberVerified()
 * @method $this withPhoneNumberVerified($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 * @method string getEmailVerified()
 * @method $this withEmailVerified($value)
 */
class UpdateUser extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateUserDescription extends Rpc
{
}

/**
 * @method string getUserNotificationChannels()
 * @method $this withUserNotificationChannels($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPasswordForcedUpdateStatus()
 * @method $this withPasswordForcedUpdateStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class UpdateUserPassword extends Rpc
{
}
