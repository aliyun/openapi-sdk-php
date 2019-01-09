<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ram based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ram\V20150501
 *
 * @method AddUserToGroup addUserToGroup(array $options = [])
 * @method AttachPolicyToGroup attachPolicyToGroup(array $options = [])
 * @method AttachPolicyToRole attachPolicyToRole(array $options = [])
 * @method AttachPolicyToUser attachPolicyToUser(array $options = [])
 * @method BindMFADevice bindMFADevice(array $options = [])
 * @method ChangePassword changePassword(array $options = [])
 * @method ClearAccountAlias clearAccountAlias(array $options = [])
 * @method CreateAccessKey createAccessKey(array $options = [])
 * @method CreateGroup createGroup(array $options = [])
 * @method CreateLoginProfile createLoginProfile(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method CreatePolicyVersion createPolicyVersion(array $options = [])
 * @method CreateRole createRole(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateVirtualMFADevice createVirtualMFADevice(array $options = [])
 * @method DeleteAccessKey deleteAccessKey(array $options = [])
 * @method DeleteGroup deleteGroup(array $options = [])
 * @method DeleteLoginProfile deleteLoginProfile(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method DeletePolicyVersion deletePolicyVersion(array $options = [])
 * @method DeletePublicKey deletePublicKey(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteVirtualMFADevice deleteVirtualMFADevice(array $options = [])
 * @method DetachPolicyFromGroup detachPolicyFromGroup(array $options = [])
 * @method DetachPolicyFromRole detachPolicyFromRole(array $options = [])
 * @method DetachPolicyFromUser detachPolicyFromUser(array $options = [])
 * @method GetAccessKeyLastUsed getAccessKeyLastUsed(array $options = [])
 * @method GetAccountAlias getAccountAlias(array $options = [])
 * @method GetGroup getGroup(array $options = [])
 * @method GetLoginProfile getLoginProfile(array $options = [])
 * @method GetPasswordPolicy getPasswordPolicy(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method GetPolicyVersion getPolicyVersion(array $options = [])
 * @method GetPublicKey getPublicKey(array $options = [])
 * @method GetRole getRole(array $options = [])
 * @method GetSecurityPreference getSecurityPreference(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method GetUserMFAInfo getUserMFAInfo(array $options = [])
 * @method ListAccessKeys listAccessKeys(array $options = [])
 * @method ListEntitiesForPolicy listEntitiesForPolicy(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListGroupsForUser listGroupsForUser(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method ListPoliciesForGroup listPoliciesForGroup(array $options = [])
 * @method ListPoliciesForRole listPoliciesForRole(array $options = [])
 * @method ListPoliciesForUser listPoliciesForUser(array $options = [])
 * @method ListPolicyVersions listPolicyVersions(array $options = [])
 * @method ListPublicKeys listPublicKeys(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListUsersForGroup listUsersForGroup(array $options = [])
 * @method ListVirtualMFADevices listVirtualMFADevices(array $options = [])
 * @method RemoveUserFromGroup removeUserFromGroup(array $options = [])
 * @method SetAccountAlias setAccountAlias(array $options = [])
 * @method SetDefaultPolicyVersion setDefaultPolicyVersion(array $options = [])
 * @method SetPasswordPolicy setPasswordPolicy(array $options = [])
 * @method SetSecurityPreference setSecurityPreference(array $options = [])
 * @method UnbindMFADevice unbindMFADevice(array $options = [])
 * @method UpdateAccessKey updateAccessKey(array $options = [])
 * @method UpdateGroup updateGroup(array $options = [])
 * @method UpdateLoginProfile updateLoginProfile(array $options = [])
 * @method UpdatePublicKey updatePublicKey(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method UploadPublicKey uploadPublicKey(array $options = [])
 */
class RamApiResolver
{
    use ApiResolverTrait;
}
