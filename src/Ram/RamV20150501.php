<?php

namespace AlibabaCloud\Ram;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ram based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ram
 *
 * @method static V20150501\AddUserToGroup addUserToGroup(array $options = [])
 * @method static V20150501\AttachPolicyToGroup attachPolicyToGroup(array $options = [])
 * @method static V20150501\AttachPolicyToRole attachPolicyToRole(array $options = [])
 * @method static V20150501\AttachPolicyToUser attachPolicyToUser(array $options = [])
 * @method static V20150501\BindMFADevice bindMFADevice(array $options = [])
 * @method static V20150501\ChangePassword changePassword(array $options = [])
 * @method static V20150501\ClearAccountAlias clearAccountAlias(array $options = [])
 * @method static V20150501\CreateAccessKey createAccessKey(array $options = [])
 * @method static V20150501\CreateGroup createGroup(array $options = [])
 * @method static V20150501\CreateLoginProfile createLoginProfile(array $options = [])
 * @method static V20150501\CreatePolicy createPolicy(array $options = [])
 * @method static V20150501\CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method static V20150501\CreateRole createRole(array $options = [])
 * @method static V20150501\CreateUser createUser(array $options = [])
 * @method static V20150501\CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method static V20150501\DeleteAccessKey deleteAccessKey(array $options = [])
 * @method static V20150501\DeleteGroup deleteGroup(array $options = [])
 * @method static V20150501\DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method static V20150501\DeletePolicy deletePolicy(array $options = [])
 * @method static V20150501\DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method static V20150501\DeletePublicKey deletePublicKey(array $options = [])
 * @method static V20150501\DeleteRole deleteRole(array $options = [])
 * @method static V20150501\DeleteUser deleteUser(array $options = [])
 * @method static V20150501\DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method static V20150501\DetachPolicyFromGroup detachPolicyFromGroup(array $options = [])
 * @method static V20150501\DetachPolicyFromRole detachPolicyFromRole(array $options = [])
 * @method static V20150501\DetachPolicyFromUser detachPolicyFromUser(array $options = [])
 * @method static V20150501\GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method static V20150501\GetAccountAlias getAccountAlias(array $options = [])
 * @method static V20150501\GetGroup getGroup(array $options = [])
 * @method static V20150501\GetLoginProfile getLoginProfile(array $options = [])
 * @method static V20150501\GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method static V20150501\GetPolicy getPolicy(array $options = [])
 * @method static V20150501\GetPolicyVersion getPolicyVersion(array $options = [])
 * @method static V20150501\GetPublicKey getPublicKey(array $options = [])
 * @method static V20150501\GetRole getRole(array $options = [])
 * @method static V20150501\GetSecurityPreference getSecurityPreference(array $options = [])
 * @method static V20150501\GetUser getUser(array $options = [])
 * @method static V20150501\GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method static V20150501\ListAccessKeys listAccessKeys(array $options = [])
 * @method static V20150501\ListEntitiesForPolicy listEntitiesForPolicy(array $options = [])
 * @method static V20150501\ListGroups listGroups(array $options = [])
 * @method static V20150501\ListGroupsForUser listGroupsForUser(array $options = [])
 * @method static V20150501\ListPolicies listPolicies(array $options = [])
 * @method static V20150501\ListPoliciesForGroup listPoliciesForGroup(array $options = [])
 * @method static V20150501\ListPoliciesForRole listPoliciesForRole(array $options = [])
 * @method static V20150501\ListPoliciesForUser listPoliciesForUser(array $options = [])
 * @method static V20150501\ListPolicyVersions listPolicyVersions(array $options = [])
 * @method static V20150501\ListPublicKeys listPublicKeys(array $options = [])
 * @method static V20150501\ListRoles listRoles(array $options = [])
 * @method static V20150501\ListUsers listUsers(array $options = [])
 * @method static V20150501\ListUsersForGroup listUsersForGroup(array $options = [])
 * @method static V20150501\ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method static V20150501\RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method static V20150501\SetAccountAlias setAccountAlias(array $options = [])
 * @method static V20150501\SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method static V20150501\SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method static V20150501\SetSecurityPreference setSecurityPreference(array $options = [])
 * @method static V20150501\UnbindMFADevice unbindMFADevice(array $options = [])
 * @method static V20150501\UpdateAccessKey updateAccessKey(array $options = [])
 * @method static V20150501\UpdateGroup updateGroup(array $options = [])
 * @method static V20150501\UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method static V20150501\UpdatePublicKey updatePublicKey(array $options = [])
 * @method static V20150501\UpdateRole updateRole(array $options = [])
 * @method static V20150501\UpdateUser updateUser(array $options = [])
 * @method static V20150501\UploadPublicKey uploadPublicKey(array $options = [])
 */
class RamV20150501
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Ram\\V20150501';
}
