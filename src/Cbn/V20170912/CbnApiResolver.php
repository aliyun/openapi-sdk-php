<?php

namespace AlibabaCloud\Cbn\V20170912;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveFlowLog activeFlowLog(array $options = [])
 * @method AddTrafficMatchRuleToTrafficMarkingPolicy addTrafficMatchRuleToTrafficMarkingPolicy(array $options = [])
 * @method AddTraficMatchRuleToTrafficMarkingPolicy addTraficMatchRuleToTrafficMarkingPolicy(array $options = [])
 * @method AssociateCenBandwidthPackage associateCenBandwidthPackage(array $options = [])
 * @method AssociateTransitRouterAttachmentWithRouteTable associateTransitRouterAttachmentWithRouteTable(array $options = [])
 * @method AssociateTransitRouterMulticastDomain associateTransitRouterMulticastDomain(array $options = [])
 * @method AttachCenChildInstance attachCenChildInstance(array $options = [])
 * @method CheckTransitRouterService checkTransitRouterService(array $options = [])
 * @method CreateCen createCen(array $options = [])
 * @method CreateCenBandwidthPackage createCenBandwidthPackage(array $options = [])
 * @method CreateCenChildInstanceRouteEntryToAttachment createCenChildInstanceRouteEntryToAttachment(array $options = [])
 * @method CreateCenChildInstanceRouteEntryToCen createCenChildInstanceRouteEntryToCen(array $options = [])
 * @method CreateCenInterRegionTrafficQosPolicy createCenInterRegionTrafficQosPolicy(array $options = [])
 * @method CreateCenInterRegionTrafficQosQueue createCenInterRegionTrafficQosQueue(array $options = [])
 * @method CreateCenRouteMap createCenRouteMap(array $options = [])
 * @method CreateFlowlog createFlowlog(array $options = [])
 * @method CreateTrafficMarkingPolicy createTrafficMarkingPolicy(array $options = [])
 * @method CreateTransitRouter createTransitRouter(array $options = [])
 * @method CreateTransitRouterCidr createTransitRouterCidr(array $options = [])
 * @method CreateTransitRouterEcrAttachment createTransitRouterEcrAttachment(array $options = [])
 * @method CreateTransitRouterMulticastDomain createTransitRouterMulticastDomain(array $options = [])
 * @method CreateTransitRouterPeerAttachment createTransitRouterPeerAttachment(array $options = [])
 * @method CreateTransitRouterPrefixListAssociation createTransitRouterPrefixListAssociation(array $options = [])
 * @method CreateTransitRouterRouteEntry createTransitRouterRouteEntry(array $options = [])
 * @method CreateTransitRouterRouteTable createTransitRouterRouteTable(array $options = [])
 * @method CreateTransitRouterVbrAttachment createTransitRouterVbrAttachment(array $options = [])
 * @method CreateTransitRouterVpcAttachment createTransitRouterVpcAttachment(array $options = [])
 * @method CreateTransitRouterVpnAttachment createTransitRouterVpnAttachment(array $options = [])
 * @method CreateTransitRouteTableAggregation createTransitRouteTableAggregation(array $options = [])
 * @method DeactiveFlowLog deactiveFlowLog(array $options = [])
 * @method DeleteCen deleteCen(array $options = [])
 * @method DeleteCenBandwidthPackage deleteCenBandwidthPackage(array $options = [])
 * @method DeleteCenChildInstanceRouteEntryToAttachment deleteCenChildInstanceRouteEntryToAttachment(array $options = [])
 * @method DeleteCenChildInstanceRouteEntryToCen deleteCenChildInstanceRouteEntryToCen(array $options = [])
 * @method DeleteCenInterRegionTrafficQosPolicy deleteCenInterRegionTrafficQosPolicy(array $options = [])
 * @method DeleteCenInterRegionTrafficQosQueue deleteCenInterRegionTrafficQosQueue(array $options = [])
 * @method DeleteCenRouteMap deleteCenRouteMap(array $options = [])
 * @method DeleteFlowlog deleteFlowlog(array $options = [])
 * @method DeleteRouteServiceInCen deleteRouteServiceInCen(array $options = [])
 * @method DeleteTrafficMarkingPolicy deleteTrafficMarkingPolicy(array $options = [])
 * @method DeleteTransitRouter deleteTransitRouter(array $options = [])
 * @method DeleteTransitRouterCidr deleteTransitRouterCidr(array $options = [])
 * @method DeleteTransitRouterEcrAttachment deleteTransitRouterEcrAttachment(array $options = [])
 * @method DeleteTransitRouterMulticastDomain deleteTransitRouterMulticastDomain(array $options = [])
 * @method DeleteTransitRouterPeerAttachment deleteTransitRouterPeerAttachment(array $options = [])
 * @method DeleteTransitRouterPrefixListAssociation deleteTransitRouterPrefixListAssociation(array $options = [])
 * @method DeleteTransitRouterRouteEntry deleteTransitRouterRouteEntry(array $options = [])
 * @method DeleteTransitRouterRouteTable deleteTransitRouterRouteTable(array $options = [])
 * @method DeleteTransitRouterVbrAttachment deleteTransitRouterVbrAttachment(array $options = [])
 * @method DeleteTransitRouterVpcAttachment deleteTransitRouterVpcAttachment(array $options = [])
 * @method DeleteTransitRouterVpnAttachment deleteTransitRouterVpnAttachment(array $options = [])
 * @method DeleteTransitRouteTableAggregation deleteTransitRouteTableAggregation(array $options = [])
 * @method DeregisterTransitRouterMulticastGroupMembers deregisterTransitRouterMulticastGroupMembers(array $options = [])
 * @method DeregisterTransitRouterMulticastGroupSources deregisterTransitRouterMulticastGroupSources(array $options = [])
 * @method DescribeCenAttachedChildInstanceAttribute describeCenAttachedChildInstanceAttribute(array $options = [])
 * @method DescribeCenAttachedChildInstances describeCenAttachedChildInstances(array $options = [])
 * @method DescribeCenBandwidthPackages describeCenBandwidthPackages(array $options = [])
 * @method DescribeCenChildInstanceRouteEntries describeCenChildInstanceRouteEntries(array $options = [])
 * @method DescribeCenGeographicSpanRemainingBandwidth describeCenGeographicSpanRemainingBandwidth(array $options = [])
 * @method DescribeCenGeographicSpans describeCenGeographicSpans(array $options = [])
 * @method DescribeCenInterRegionBandwidthLimits describeCenInterRegionBandwidthLimits(array $options = [])
 * @method DescribeCenPrivateZoneRoutes describeCenPrivateZoneRoutes(array $options = [])
 * @method DescribeCenRegionDomainRouteEntries describeCenRegionDomainRouteEntries(array $options = [])
 * @method DescribeCenRouteMaps describeCenRouteMaps(array $options = [])
 * @method DescribeCens describeCens(array $options = [])
 * @method DescribeCenVbrHealthCheck describeCenVbrHealthCheck(array $options = [])
 * @method DescribeChildInstanceRegions describeChildInstanceRegions(array $options = [])
 * @method DescribeFlowlogs describeFlowlogs(array $options = [])
 * @method DescribeGeographicRegionMembership describeGeographicRegionMembership(array $options = [])
 * @method DescribeGrantRulesToCen describeGrantRulesToCen(array $options = [])
 * @method DescribeGrantRulesToResource describeGrantRulesToResource(array $options = [])
 * @method DescribePublishedRouteEntries describePublishedRouteEntries(array $options = [])
 * @method DescribeRouteConflict describeRouteConflict(array $options = [])
 * @method DescribeRouteServicesInCen describeRouteServicesInCen(array $options = [])
 * @method DescribeTransitRouteTableAggregation describeTransitRouteTableAggregation(array $options = [])
 * @method DescribeTransitRouteTableAggregationDetail describeTransitRouteTableAggregationDetail(array $options = [])
 * @method DetachCenChildInstance detachCenChildInstance(array $options = [])
 * @method DisableCenVbrHealthCheck disableCenVbrHealthCheck(array $options = [])
 * @method DisableTransitRouterRouteTablePropagation disableTransitRouterRouteTablePropagation(array $options = [])
 * @method DisassociateTransitRouterMulticastDomain disassociateTransitRouterMulticastDomain(array $options = [])
 * @method DissociateTransitRouterAttachmentFromRouteTable dissociateTransitRouterAttachmentFromRouteTable(array $options = [])
 * @method EnableCenVbrHealthCheck enableCenVbrHealthCheck(array $options = [])
 * @method EnableTransitRouterRouteTablePropagation enableTransitRouterRouteTablePropagation(array $options = [])
 * @method GrantInstanceToTransitRouter grantInstanceToTransitRouter(array $options = [])
 * @method ListCenChildInstanceRouteEntriesToAttachment listCenChildInstanceRouteEntriesToAttachment(array $options = [])
 * @method ListCenInterRegionTrafficQosPolicies listCenInterRegionTrafficQosPolicies(array $options = [])
 * @method ListCenInterRegionTrafficQosQueues listCenInterRegionTrafficQosQueues(array $options = [])
 * @method ListGrantVSwitchEnis listGrantVSwitchEnis(array $options = [])
 * @method ListGrantVSwitchesToCen listGrantVSwitchesToCen(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTrafficMarkingPolicies listTrafficMarkingPolicies(array $options = [])
 * @method ListTransitRouterAvailableResource listTransitRouterAvailableResource(array $options = [])
 * @method ListTransitRouterCidr listTransitRouterCidr(array $options = [])
 * @method ListTransitRouterCidrAllocation listTransitRouterCidrAllocation(array $options = [])
 * @method ListTransitRouterEcrAttachments listTransitRouterEcrAttachments(array $options = [])
 * @method ListTransitRouterMulticastDomainAssociations listTransitRouterMulticastDomainAssociations(array $options = [])
 * @method ListTransitRouterMulticastDomains listTransitRouterMulticastDomains(array $options = [])
 * @method ListTransitRouterMulticastDomainVSwitches listTransitRouterMulticastDomainVSwitches(array $options = [])
 * @method ListTransitRouterMulticastGroups listTransitRouterMulticastGroups(array $options = [])
 * @method ListTransitRouterPeerAttachments listTransitRouterPeerAttachments(array $options = [])
 * @method ListTransitRouterPrefixListAssociation listTransitRouterPrefixListAssociation(array $options = [])
 * @method ListTransitRouterRouteEntries listTransitRouterRouteEntries(array $options = [])
 * @method ListTransitRouterRouteTableAssociations listTransitRouterRouteTableAssociations(array $options = [])
 * @method ListTransitRouterRouteTablePropagations listTransitRouterRouteTablePropagations(array $options = [])
 * @method ListTransitRouterRouteTables listTransitRouterRouteTables(array $options = [])
 * @method ListTransitRouters listTransitRouters(array $options = [])
 * @method ListTransitRouterVbrAttachments listTransitRouterVbrAttachments(array $options = [])
 * @method ListTransitRouterVpcAttachments listTransitRouterVpcAttachments(array $options = [])
 * @method ListTransitRouterVpnAttachments listTransitRouterVpnAttachments(array $options = [])
 * @method ModifyCenAttribute modifyCenAttribute(array $options = [])
 * @method ModifyCenBandwidthPackageAttribute modifyCenBandwidthPackageAttribute(array $options = [])
 * @method ModifyCenBandwidthPackageSpec modifyCenBandwidthPackageSpec(array $options = [])
 * @method ModifyCenRouteMap modifyCenRouteMap(array $options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute(array $options = [])
 * @method ModifyTransitRouterCidr modifyTransitRouterCidr(array $options = [])
 * @method ModifyTransitRouterMulticastDomain modifyTransitRouterMulticastDomain(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method OpenTransitRouterService openTransitRouterService(array $options = [])
 * @method PublishRouteEntries publishRouteEntries(array $options = [])
 * @method RefreshTransitRouteTableAggregation refreshTransitRouteTableAggregation(array $options = [])
 * @method RegisterTransitRouterMulticastGroupMembers registerTransitRouterMulticastGroupMembers(array $options = [])
 * @method RegisterTransitRouterMulticastGroupSources registerTransitRouterMulticastGroupSources(array $options = [])
 * @method RemoveTrafficMatchRuleFromTrafficMarkingPolicy removeTrafficMatchRuleFromTrafficMarkingPolicy(array $options = [])
 * @method RemoveTraficMatchRuleFromTrafficMarkingPolicy removeTraficMatchRuleFromTrafficMarkingPolicy(array $options = [])
 * @method ReplaceTransitRouterRouteTableAssociation replaceTransitRouterRouteTableAssociation(array $options = [])
 * @method ResolveAndRouteServiceInCen resolveAndRouteServiceInCen(array $options = [])
 * @method RevokeInstanceFromTransitRouter revokeInstanceFromTransitRouter(array $options = [])
 * @method RoutePrivateZoneInCenToVpc routePrivateZoneInCenToVpc(array $options = [])
 * @method SetCenInterRegionBandwidthLimit setCenInterRegionBandwidthLimit(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TempUpgradeCenBandwidthPackageSpec tempUpgradeCenBandwidthPackageSpec(array $options = [])
 * @method UnassociateCenBandwidthPackage unassociateCenBandwidthPackage(array $options = [])
 * @method UnroutePrivateZoneInCenToVpc unroutePrivateZoneInCenToVpc(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateCenInterRegionTrafficQosPolicyAttribute updateCenInterRegionTrafficQosPolicyAttribute(array $options = [])
 * @method UpdateCenInterRegionTrafficQosQueueAttribute updateCenInterRegionTrafficQosQueueAttribute(array $options = [])
 * @method UpdateTrafficMarkingPolicyAttribute updateTrafficMarkingPolicyAttribute(array $options = [])
 * @method UpdateTransitRouter updateTransitRouter(array $options = [])
 * @method UpdateTransitRouterEcrAttachmentAttribute updateTransitRouterEcrAttachmentAttribute(array $options = [])
 * @method UpdateTransitRouterPeerAttachmentAttribute updateTransitRouterPeerAttachmentAttribute(array $options = [])
 * @method UpdateTransitRouterRouteEntry updateTransitRouterRouteEntry(array $options = [])
 * @method UpdateTransitRouterRouteTable updateTransitRouterRouteTable(array $options = [])
 * @method UpdateTransitRouterVbrAttachmentAttribute updateTransitRouterVbrAttachmentAttribute(array $options = [])
 * @method UpdateTransitRouterVpcAttachmentAttribute updateTransitRouterVpcAttachmentAttribute(array $options = [])
 * @method UpdateTransitRouterVpcAttachmentZones updateTransitRouterVpcAttachmentZones(array $options = [])
 * @method UpdateTransitRouterVpnAttachmentAttribute updateTransitRouterVpnAttachmentAttribute(array $options = [])
 * @method WithdrawPublishedRouteEntries withdrawPublishedRouteEntries(array $options = [])
 */
class CbnApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cbn';

    /** @var string */
    public $version = '2017-09-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cbn';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class ActiveFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getTrafficMatchRules()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class AddTrafficMatchRuleToTrafficMarkingPolicy extends Rpc
{

    /**
     * @param array $trafficMatchRules
     *
     * @return $this
     */
	public function withTrafficMatchRules(array $trafficMatchRules)
	{
	    $this->data['TrafficMatchRules'] = $trafficMatchRules;
		foreach ($trafficMatchRules as $depth1 => $depth1Value) {
			foreach ($depth1Value['DstPortRange'] as $i => $iValue) {
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.DstPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MatchDscp'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.MatchDscp'] = $depth1Value['MatchDscp'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['TrafficMatchRuleDescription'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleDescription'] = $depth1Value['TrafficMatchRuleDescription'];
			}
			foreach ($depth1Value['SrcPortRange'] as $i => $iValue) {
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.SrcPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['DstCidr'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.DstCidr'] = $depth1Value['DstCidr'];
			}
			if(isset($depth1Value['TrafficMatchRuleName'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleName'] = $depth1Value['TrafficMatchRuleName'];
			}
			if(isset($depth1Value['SrcCidr'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.SrcCidr'] = $depth1Value['SrcCidr'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getTrafficMatchRules()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class AddTraficMatchRuleToTrafficMarkingPolicy extends Rpc
{

    /**
     * @param array $trafficMatchRules
     *
     * @return $this
     */
	public function withTrafficMatchRules(array $trafficMatchRules)
	{
	    $this->data['TrafficMatchRules'] = $trafficMatchRules;
		foreach ($trafficMatchRules as $depth1 => $depth1Value) {
			foreach ($depth1Value['DstPortRange'] as $i => $iValue) {
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.DstPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MatchDscp'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.MatchDscp'] = $depth1Value['MatchDscp'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['TrafficMatchRuleDescription'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleDescription'] = $depth1Value['TrafficMatchRuleDescription'];
			}
			foreach ($depth1Value['SrcPortRange'] as $i => $iValue) {
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.SrcPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['DstCidr'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.DstCidr'] = $depth1Value['DstCidr'];
			}
			if(isset($depth1Value['TrafficMatchRuleName'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleName'] = $depth1Value['TrafficMatchRuleName'];
			}
			if(isset($depth1Value['SrcCidr'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.SrcCidr'] = $depth1Value['SrcCidr'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class AssociateCenBandwidthPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class AssociateTransitRouterAttachmentWithRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getVSwitchIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class AssociateTransitRouterMulticastDomain extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 */
class AttachCenChildInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class CheckTransitRouterService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpv6Level()
 * @method $this withIpv6Level($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCen extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 * @method string getBandwidthPackageChargeType()
 * @method $this withBandwidthPackageChargeType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getGeographicRegionBId()
 * @method $this withGeographicRegionBId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getGeographicRegionAId()
 * @method $this withGeographicRegionAId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateCenBandwidthPackage extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class CreateCenChildInstanceRouteEntryToAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextHopGatewayZoneId()
 * @method $this withNextHopGatewayZoneId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceAliUid()
 * @method $this withChildInstanceAliUid($value)
 */
class CreateCenChildInstanceRouteEntryToCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getTrafficQosQueues()
 * @method string getTrafficQosPolicyName()
 * @method $this withTrafficQosPolicyName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTrafficQosPolicyDescription()
 * @method $this withTrafficQosPolicyDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class CreateCenInterRegionTrafficQosPolicy extends Rpc
{

    /**
     * @param array $trafficQosQueues
     *
     * @return $this
     */
	public function withTrafficQosQueues(array $trafficQosQueues)
	{
	    $this->data['TrafficQosQueues'] = $trafficQosQueues;
		foreach ($trafficQosQueues as $depth1 => $depth1Value) {
			foreach ($depth1Value['Dscps'] as $i => $iValue) {
				$this->options['query']['TrafficQosQueues.' . ($depth1 + 1) . '.Dscps.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['QosQueueName'])){
				$this->options['query']['TrafficQosQueues.' . ($depth1 + 1) . '.QosQueueName'] = $depth1Value['QosQueueName'];
			}
			if(isset($depth1Value['RemainBandwidthPercent'])){
				$this->options['query']['TrafficQosQueues.' . ($depth1 + 1) . '.RemainBandwidthPercent'] = $depth1Value['RemainBandwidthPercent'];
			}
			if(isset($depth1Value['QosQueueDescription'])){
				$this->options['query']['TrafficQosQueues.' . ($depth1 + 1) . '.QosQueueDescription'] = $depth1Value['QosQueueDescription'];
			}
		}

		return $this;
    }
}

/**
 * @method array getDscps()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getQosQueueName()
 * @method $this withQosQueueName($value)
 * @method string getRemainBandwidthPercent()
 * @method $this withRemainBandwidthPercent($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficQosPolicyId()
 * @method $this withTrafficQosPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getQosQueueDescription()
 * @method $this withQosQueueDescription($value)
 */
class CreateCenInterRegionTrafficQosQueue extends Rpc
{

    /**
     * @param array $dscps
     *
     * @return $this
     */
	public function withDscps(array $dscps)
	{
	    $this->data['Dscps'] = $dscps;
		foreach ($dscps as $i => $iValue) {
			$this->options['query']['Dscps.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommunityMatchMode()
 * @method $this withCommunityMatchMode($value)
 * @method string getMapResult()
 * @method $this withMapResult($value)
 * @method array getDestinationRegionIds()
 * @method string getNextPriority()
 * @method $this withNextPriority($value)
 * @method string getSystemPolicy()
 * @method $this withSystemPolicy($value)
 * @method array getDestinationCidrBlocks()
 * @method array getOriginalRouteTableIds()
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method array getSourceInstanceIds()
 * @method array getSourceRegionIds()
 * @method string getGatewayZoneId()
 * @method $this withGatewayZoneId($value)
 * @method array getMatchAsns()
 * @method string getPreference()
 * @method $this withPreference($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getDestinationChildInstanceTypes()
 * @method array getSourceRouteTableIds()
 * @method array getSourceChildInstanceTypes()
 * @method string getCommunityOperateMode()
 * @method $this withCommunityOperateMode($value)
 * @method array getOperateCommunitySet()
 * @method array getRouteTypes()
 * @method string getMatchAddressType()
 * @method $this withMatchAddressType($value)
 * @method string getCidrMatchMode()
 * @method $this withCidrMatchMode($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceInstanceIdsReverseMatch()
 * @method $this withSourceInstanceIdsReverseMatch($value)
 * @method string getGatewayRegionId()
 * @method $this withGatewayRegionId($value)
 * @method array getDestinationRouteTableIds()
 * @method array getSourceZoneIds()
 * @method string getTransmitDirection()
 * @method $this withTransmitDirection($value)
 * @method array getDestinationInstanceIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationInstanceIdsReverseMatch()
 * @method $this withDestinationInstanceIdsReverseMatch($value)
 * @method array getPrependAsPath()
 * @method string getAsPathMatchMode()
 * @method $this withAsPathMatchMode($value)
 * @method array getMatchCommunitySet()
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 */
class CreateCenRouteMap extends Rpc
{

    /**
     * @param array $destinationRegionIds
     *
     * @return $this
     */
	public function withDestinationRegionIds(array $destinationRegionIds)
	{
	    $this->data['DestinationRegionIds'] = $destinationRegionIds;
		foreach ($destinationRegionIds as $i => $iValue) {
			$this->options['query']['DestinationRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationCidrBlocks
     *
     * @return $this
     */
	public function withDestinationCidrBlocks(array $destinationCidrBlocks)
	{
	    $this->data['DestinationCidrBlocks'] = $destinationCidrBlocks;
		foreach ($destinationCidrBlocks as $i => $iValue) {
			$this->options['query']['DestinationCidrBlocks.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $originalRouteTableIds
     *
     * @return $this
     */
	public function withOriginalRouteTableIds(array $originalRouteTableIds)
	{
	    $this->data['OriginalRouteTableIds'] = $originalRouteTableIds;
		foreach ($originalRouteTableIds as $i => $iValue) {
			$this->options['query']['OriginalRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceInstanceIds
     *
     * @return $this
     */
	public function withSourceInstanceIds(array $sourceInstanceIds)
	{
	    $this->data['SourceInstanceIds'] = $sourceInstanceIds;
		foreach ($sourceInstanceIds as $i => $iValue) {
			$this->options['query']['SourceInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceRegionIds
     *
     * @return $this
     */
	public function withSourceRegionIds(array $sourceRegionIds)
	{
	    $this->data['SourceRegionIds'] = $sourceRegionIds;
		foreach ($sourceRegionIds as $i => $iValue) {
			$this->options['query']['SourceRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $matchAsns
     *
     * @return $this
     */
	public function withMatchAsns(array $matchAsns)
	{
	    $this->data['MatchAsns'] = $matchAsns;
		foreach ($matchAsns as $i => $iValue) {
			$this->options['query']['MatchAsns.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationChildInstanceTypes
     *
     * @return $this
     */
	public function withDestinationChildInstanceTypes(array $destinationChildInstanceTypes)
	{
	    $this->data['DestinationChildInstanceTypes'] = $destinationChildInstanceTypes;
		foreach ($destinationChildInstanceTypes as $i => $iValue) {
			$this->options['query']['DestinationChildInstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceRouteTableIds
     *
     * @return $this
     */
	public function withSourceRouteTableIds(array $sourceRouteTableIds)
	{
	    $this->data['SourceRouteTableIds'] = $sourceRouteTableIds;
		foreach ($sourceRouteTableIds as $i => $iValue) {
			$this->options['query']['SourceRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceChildInstanceTypes
     *
     * @return $this
     */
	public function withSourceChildInstanceTypes(array $sourceChildInstanceTypes)
	{
	    $this->data['SourceChildInstanceTypes'] = $sourceChildInstanceTypes;
		foreach ($sourceChildInstanceTypes as $i => $iValue) {
			$this->options['query']['SourceChildInstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $operateCommunitySet
     *
     * @return $this
     */
	public function withOperateCommunitySet(array $operateCommunitySet)
	{
	    $this->data['OperateCommunitySet'] = $operateCommunitySet;
		foreach ($operateCommunitySet as $i => $iValue) {
			$this->options['query']['OperateCommunitySet.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $routeTypes
     *
     * @return $this
     */
	public function withRouteTypes(array $routeTypes)
	{
	    $this->data['RouteTypes'] = $routeTypes;
		foreach ($routeTypes as $i => $iValue) {
			$this->options['query']['RouteTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationRouteTableIds
     *
     * @return $this
     */
	public function withDestinationRouteTableIds(array $destinationRouteTableIds)
	{
	    $this->data['DestinationRouteTableIds'] = $destinationRouteTableIds;
		foreach ($destinationRouteTableIds as $i => $iValue) {
			$this->options['query']['DestinationRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceZoneIds
     *
     * @return $this
     */
	public function withSourceZoneIds(array $sourceZoneIds)
	{
	    $this->data['SourceZoneIds'] = $sourceZoneIds;
		foreach ($sourceZoneIds as $i => $iValue) {
			$this->options['query']['SourceZoneIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationInstanceIds
     *
     * @return $this
     */
	public function withDestinationInstanceIds(array $destinationInstanceIds)
	{
	    $this->data['DestinationInstanceIds'] = $destinationInstanceIds;
		foreach ($destinationInstanceIds as $i => $iValue) {
			$this->options['query']['DestinationInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $prependAsPath
     *
     * @return $this
     */
	public function withPrependAsPath(array $prependAsPath)
	{
	    $this->data['PrependAsPath'] = $prependAsPath;
		foreach ($prependAsPath as $i => $iValue) {
			$this->options['query']['PrependAsPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $matchCommunitySet
     *
     * @return $this
     */
	public function withMatchCommunitySet(array $matchCommunitySet)
	{
	    $this->data['MatchCommunitySet'] = $matchCommunitySet;
		foreach ($matchCommunitySet as $i => $iValue) {
			$this->options['query']['MatchCommunitySet.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getTag()
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class CreateFlowlog extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMarkingPolicyDescription()
 * @method $this withTrafficMarkingPolicyDescription($value)
 * @method string getTrafficMarkingPolicyName()
 * @method $this withTrafficMarkingPolicyName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getTrafficMatchRules()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getMarkingDscp()
 * @method $this withMarkingDscp($value)
 */
class CreateTrafficMarkingPolicy extends Rpc
{

    /**
     * @param array $trafficMatchRules
     *
     * @return $this
     */
	public function withTrafficMatchRules(array $trafficMatchRules)
	{
	    $this->data['TrafficMatchRules'] = $trafficMatchRules;
		foreach ($trafficMatchRules as $depth1 => $depth1Value) {
			foreach ($depth1Value['DstPortRange'] as $i => $iValue) {
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.DstPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MatchDscp'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.MatchDscp'] = $depth1Value['MatchDscp'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['TrafficMatchRuleDescription'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleDescription'] = $depth1Value['TrafficMatchRuleDescription'];
			}
			foreach ($depth1Value['SrcPortRange'] as $i => $iValue) {
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.SrcPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['DstCidr'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.DstCidr'] = $depth1Value['DstCidr'];
			}
			if(isset($depth1Value['TrafficMatchRuleName'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleName'] = $depth1Value['TrafficMatchRuleName'];
			}
			if(isset($depth1Value['SrcCidr'])){
				$this->options['query']['TrafficMatchRules.' . ($depth1 + 1) . '.SrcCidr'] = $depth1Value['SrcCidr'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTransitRouterName()
 * @method $this withTransitRouterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceMode()
 * @method $this withServiceMode($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getTransitRouterCidrList()
 * @method $this withTransitRouterCidrList($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterDescription()
 * @method $this withTransitRouterDescription($value)
 * @method string getSupportMulticast()
 * @method $this withSupportMulticast($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class CreateTransitRouter extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCidr()
 * @method $this withCidr($value)
 * @method string getPublishCidrRoute()
 * @method $this withPublishCidrRoute($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateTransitRouterCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableAssociationEnabled()
 * @method $this withRouteTableAssociationEnabled($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getFastLink()
 * @method $this withFastLink($value)
 * @method string getEcrId()
 * @method $this withEcrId($value)
 * @method array getTag()
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getRouteTablePropagationEnabled()
 * @method $this withRouteTablePropagationEnabled($value)
 * @method string getEcrOwnerId()
 * @method $this withEcrOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 */
class CreateTransitRouterEcrAttachment extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getMulticastType()
 * @method $this withMulticastType($value)
 * @method string getTransitRouterMulticastDomainDescription()
 * @method $this withTransitRouterMulticastDomainDescription($value)
 * @method string getTransitRouterMulticastDomainName()
 * @method $this withTransitRouterMulticastDomainName($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class CreateTransitRouterMulticastDomain extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableAssociationEnabled()
 * @method $this withRouteTableAssociationEnabled($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getDefaultLinkType()
 * @method $this withDefaultLinkType($value)
 * @method array getTag()
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getRouteTablePropagationEnabled()
 * @method $this withRouteTablePropagationEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getPeerTransitRouterRegionId()
 * @method $this withPeerTransitRouterRegionId($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getPeerTransitRouterId()
 * @method $this withPeerTransitRouterId($value)
 */
class CreateTransitRouterPeerAttachment extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getTransitRouterTableId()
 * @method $this withTransitRouterTableId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class CreateTransitRouterPrefixListAssociation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteEntryNextHopType()
 * @method $this withTransitRouterRouteEntryNextHopType($value)
 * @method string getTransitRouterRouteEntryDestinationCidrBlock()
 * @method $this withTransitRouterRouteEntryDestinationCidrBlock($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getTransitRouterRouteEntryNextHopId()
 * @method $this withTransitRouterRouteEntryNextHopId($value)
 * @method string getTransitRouterRouteEntryDescription()
 * @method $this withTransitRouterRouteEntryDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterRouteEntryName()
 * @method $this withTransitRouterRouteEntryName($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class CreateTransitRouterRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteTableOptions()
 * @method $this withRouteTableOptions($value)
 * @method string getTransitRouterRouteTableDescription()
 * @method $this withTransitRouterRouteTableDescription($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTransitRouterRouteTableName()
 * @method $this withTransitRouterRouteTableName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class CreateTransitRouterRouteTable extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableAssociationEnabled()
 * @method $this withRouteTableAssociationEnabled($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method array getTag()
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getRouteTablePropagationEnabled()
 * @method $this withRouteTablePropagationEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getAssociateRouteTableId()
 * @method $this withAssociateRouteTableId($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 */
class CreateTransitRouterVbrAttachment extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceMode()
 * @method $this withServiceMode($value)
 * @method string getVpcOwnerId()
 * @method $this withVpcOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableAssociationEnabled()
 * @method $this withRouteTableAssociationEnabled($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method array getTag()
 * @method string getAutoCreateVpcRoute()
 * @method $this withAutoCreateVpcRoute($value)
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getRouteTablePropagationEnabled()
 * @method $this withRouteTablePropagationEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method array getZoneMappings()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getAssociateRouteTableId()
 * @method $this withAssociateRouteTableId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateTransitRouterVpcAttachment extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $zoneMappings
     *
     * @return $this
     */
	public function withZoneMappings(array $zoneMappings)
	{
	    $this->data['ZoneMappings'] = $zoneMappings;
		foreach ($zoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['ZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['ZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableAssociationEnabled()
 * @method $this withRouteTableAssociationEnabled($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method array getZone()
 * @method array getTag()
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getRouteTablePropagationEnabled()
 * @method $this withRouteTablePropagationEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getVpnOwnerId()
 * @method $this withVpnOwnerId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getVpnId()
 * @method $this withVpnId($value)
 */
class CreateTransitRouterVpnAttachment extends Rpc
{

    /**
     * @param array $zone
     *
     * @return $this
     */
	public function withZone(array $zone)
	{
	    $this->data['Zone'] = $zone;
		foreach ($zone as $depth1 => $depth1Value) {
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['Zone.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouteTableAggregationDescription()
 * @method $this withTransitRouteTableAggregationDescription($value)
 * @method string getTransitRouteTableAggregationName()
 * @method $this withTransitRouteTableAggregationName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTransitRouteTableAggregationScope()
 * @method $this withTransitRouteTableAggregationScope($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouteTableId()
 * @method $this withTransitRouteTableId($value)
 * @method string getTransitRouteTableAggregationCidr()
 * @method $this withTransitRouteTableAggregationCidr($value)
 */
class CreateTransitRouteTableAggregation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeactiveFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class DeleteCenBandwidthPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class DeleteCenChildInstanceRouteEntryToAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getRouteTableId()
 * @method $this withRouteTableId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceAliUid()
 * @method $this withChildInstanceAliUid($value)
 */
class DeleteCenChildInstanceRouteEntryToCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficQosPolicyId()
 * @method $this withTrafficQosPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteCenInterRegionTrafficQosPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getQosQueueId()
 * @method $this withQosQueueId($value)
 */
class DeleteCenInterRegionTrafficQosQueue extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouteMapId()
 * @method $this withRouteMapId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 */
class DeleteCenRouteMap extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeleteFlowlog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getHostVpcId()
 * @method $this withHostVpcId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteRouteServiceInCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteTrafficMarkingPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteTransitRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterCidrId()
 * @method $this withTransitRouterCidrId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteTransitRouterCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteTransitRouterEcrAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteTransitRouterMulticastDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteTransitRouterPeerAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getTransitRouterTableId()
 * @method $this withTransitRouterTableId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class DeleteTransitRouterPrefixListAssociation extends Rpc
{
}

/**
 * @method string getTransitRouterRouteEntryId()
 * @method $this withTransitRouterRouteEntryId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteEntryNextHopType()
 * @method $this withTransitRouterRouteEntryNextHopType($value)
 * @method string getTransitRouterRouteEntryDestinationCidrBlock()
 * @method $this withTransitRouterRouteEntryDestinationCidrBlock($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getTransitRouterRouteEntryNextHopId()
 * @method $this withTransitRouterRouteEntryNextHopId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteTransitRouterRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeleteTransitRouterRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteTransitRouterVbrAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteTransitRouterVpcAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteTransitRouterVpnAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouteTableId()
 * @method $this withTransitRouteTableId($value)
 * @method string getTransitRouteTableAggregationCidr()
 * @method $this withTransitRouteTableAggregationCidr($value)
 */
class DeleteTransitRouteTableAggregation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getNetworkInterfaceIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method array getConnectPeerIds()
 * @method string getGroupIpAddress()
 * @method $this withGroupIpAddress($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getPeerTransitRouterMulticastDomains()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeregisterTransitRouterMulticastGroupMembers extends Rpc
{

    /**
     * @param array $networkInterfaceIds
     *
     * @return $this
     */
	public function withNetworkInterfaceIds(array $networkInterfaceIds)
	{
	    $this->data['NetworkInterfaceIds'] = $networkInterfaceIds;
		foreach ($networkInterfaceIds as $i => $iValue) {
			$this->options['query']['NetworkInterfaceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $connectPeerIds
     *
     * @return $this
     */
	public function withConnectPeerIds(array $connectPeerIds)
	{
	    $this->data['ConnectPeerIds'] = $connectPeerIds;
		foreach ($connectPeerIds as $i => $iValue) {
			$this->options['query']['ConnectPeerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $peerTransitRouterMulticastDomains
     *
     * @return $this
     */
	public function withPeerTransitRouterMulticastDomains(array $peerTransitRouterMulticastDomains)
	{
	    $this->data['PeerTransitRouterMulticastDomains'] = $peerTransitRouterMulticastDomains;
		foreach ($peerTransitRouterMulticastDomains as $i => $iValue) {
			$this->options['query']['PeerTransitRouterMulticastDomains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getNetworkInterfaceIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method array getConnectPeerIds()
 * @method string getGroupIpAddress()
 * @method $this withGroupIpAddress($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DeregisterTransitRouterMulticastGroupSources extends Rpc
{

    /**
     * @param array $networkInterfaceIds
     *
     * @return $this
     */
	public function withNetworkInterfaceIds(array $networkInterfaceIds)
	{
	    $this->data['NetworkInterfaceIds'] = $networkInterfaceIds;
		foreach ($networkInterfaceIds as $i => $iValue) {
			$this->options['query']['NetworkInterfaceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $connectPeerIds
     *
     * @return $this
     */
	public function withConnectPeerIds(array $connectPeerIds)
	{
	    $this->data['ConnectPeerIds'] = $connectPeerIds;
		foreach ($connectPeerIds as $i => $iValue) {
			$this->options['query']['ConnectPeerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIncludeRouteTable()
 * @method $this withIncludeRouteTable($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 */
class DescribeCenAttachedChildInstanceAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescribeCenAttachedChildInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeReservationData()
 * @method $this withIncludeReservationData($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsOrKey()
 * @method $this withIsOrKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getFilter()
 */
class DescribeCenBandwidthPackages extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCenChildInstanceRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getGeographicRegionBId()
 * @method $this withGeographicRegionBId($value)
 * @method string getGeographicRegionAId()
 * @method $this withGeographicRegionAId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescribeCenGeographicSpanRemainingBandwidth extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getGeographicSpanId()
 * @method $this withGeographicSpanId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescribeCenGeographicSpans extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTrRegionId()
 * @method $this withTrRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescribeCenInterRegionBandwidthLimits extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescribeCenPrivateZoneRoutes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCenRegionDomainRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTransmitDirection()
 * @method $this withTransmitDirection($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getRouteMapId()
 * @method $this withRouteMapId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getFilter()
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 */
class DescribeCenRouteMaps extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getFilter()
 */
class DescribeCens extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getVbrInstanceOwnerId()
 * @method $this withVbrInstanceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getVbrInstanceRegionId()
 * @method $this withVbrInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 */
class DescribeCenVbrHealthCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeChildInstanceRegions extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getLogStoreName()
 * @method $this withLogStoreName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeFlowlogs extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getGeographicRegionId()
 * @method $this withGeographicRegionId($value)
 */
class DescribeGeographicRegionMembership extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeGrantRulesToCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeGrantRulesToResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 */
class DescribePublishedRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 */
class DescribeRouteConflict extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getHostVpcId()
 * @method $this withHostVpcId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class DescribeRouteServicesInCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouteTableId()
 * @method $this withTransitRouteTableId($value)
 * @method string getTransitRouteTableAggregationCidr()
 * @method $this withTransitRouteTableAggregationCidr($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeTransitRouteTableAggregation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouteTableId()
 * @method $this withTransitRouteTableId($value)
 * @method string getTransitRouteTableAggregationCidr()
 * @method $this withTransitRouteTableAggregationCidr($value)
 */
class DescribeTransitRouteTableAggregationDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 */
class DetachCenChildInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getVbrInstanceOwnerId()
 * @method $this withVbrInstanceOwnerId($value)
 * @method string getVbrInstanceRegionId()
 * @method $this withVbrInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 */
class DisableCenVbrHealthCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class DisableTransitRouterRouteTablePropagation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getVSwitchIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class DisassociateTransitRouterMulticastDomain extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class DissociateTransitRouterAttachmentFromRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getHealthCheckTargetIp()
 * @method $this withHealthCheckTargetIp($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getVbrInstanceOwnerId()
 * @method $this withVbrInstanceOwnerId($value)
 * @method string getHealthCheckOnly()
 * @method $this withHealthCheckOnly($value)
 * @method string getVbrInstanceRegionId()
 * @method $this withVbrInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getHealthCheckSourceIp()
 * @method $this withHealthCheckSourceIp($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 */
class EnableCenVbrHealthCheck extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class EnableTransitRouterRouteTablePropagation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class GrantInstanceToTransitRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getRouteFilter()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 */
class ListCenChildInstanceRouteEntriesToAttachment extends Rpc
{

    /**
     * @param array $routeFilter
     *
     * @return $this
     */
	public function withRouteFilter(array $routeFilter)
	{
	    $this->data['RouteFilter'] = $routeFilter;
		foreach ($routeFilter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['RouteFilter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['RouteFilter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTrafficQosPolicyName()
 * @method $this withTrafficQosPolicyName($value)
 * @method string getTrafficQosPolicyId()
 * @method $this withTrafficQosPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTrafficQosPolicyDescription()
 * @method $this withTrafficQosPolicyDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListCenInterRegionTrafficQosPolicies extends Rpc
{
}

/**
 * @method string getTrafficQosQueueName()
 * @method $this withTrafficQosQueueName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTrafficQosQueueId()
 * @method $this withTrafficQosQueueId($value)
 * @method string getTrafficQosQueueDescription()
 * @method $this withTrafficQosQueueDescription($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTrafficQosPolicyId()
 * @method $this withTrafficQosPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListCenInterRegionTrafficQosQueues extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNetworkInterfaceName()
 * @method $this withNetworkInterfaceName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getPrimaryIpAddress()
 * @method $this withPrimaryIpAddress($value)
 * @method string getNetworkInterfaceId()
 * @method $this withNetworkInterfaceId($value)
 */
class ListGrantVSwitchEnis extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class ListGrantVSwitchesToCen extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTrafficMarkingPolicyDescription()
 * @method $this withTrafficMarkingPolicyDescription($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTrafficMarkingPolicyName()
 * @method $this withTrafficMarkingPolicyName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTrafficMarkingPolicies extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSupportMulticast()
 * @method $this withSupportMulticast($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class ListTransitRouterAvailableResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterCidrId()
 * @method $this withTransitRouterCidrId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class ListTransitRouterCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterCidrId()
 * @method $this withTransitRouterCidrId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCidr()
 * @method $this withCidr($value)
 * @method string getDedicatedOwnerId()
 * @method $this withDedicatedOwnerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getAttachmentName()
 * @method $this withAttachmentName($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getAttachmentId()
 * @method $this withAttachmentId($value)
 */
class ListTransitRouterCidrAllocation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterEcrAttachments extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getVSwitchIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterMulticastDomainAssociations extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterMulticastDomains extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method array getVSwitchIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterMulticastDomainVSwitches extends Rpc
{

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getNetworkInterfaceIds()
 * @method array getVSwitchIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getIsGroupSource()
 * @method $this withIsGroupSource($value)
 * @method array getConnectPeerIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getGroupIpAddress()
 * @method $this withGroupIpAddress($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getPeerTransitRouterMulticastDomains()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getIsGroupMember()
 * @method $this withIsGroupMember($value)
 */
class ListTransitRouterMulticastGroups extends Rpc
{

    /**
     * @param array $networkInterfaceIds
     *
     * @return $this
     */
	public function withNetworkInterfaceIds(array $networkInterfaceIds)
	{
	    $this->data['NetworkInterfaceIds'] = $networkInterfaceIds;
		foreach ($networkInterfaceIds as $i => $iValue) {
			$this->options['query']['NetworkInterfaceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
	public function withVSwitchIds(array $vSwitchIds)
	{
	    $this->data['VSwitchIds'] = $vSwitchIds;
		foreach ($vSwitchIds as $i => $iValue) {
			$this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $connectPeerIds
     *
     * @return $this
     */
	public function withConnectPeerIds(array $connectPeerIds)
	{
	    $this->data['ConnectPeerIds'] = $connectPeerIds;
		foreach ($connectPeerIds as $i => $iValue) {
			$this->options['query']['ConnectPeerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $peerTransitRouterMulticastDomains
     *
     * @return $this
     */
	public function withPeerTransitRouterMulticastDomains(array $peerTransitRouterMulticastDomains)
	{
	    $this->data['PeerTransitRouterMulticastDomains'] = $peerTransitRouterMulticastDomains;
		foreach ($peerTransitRouterMulticastDomains as $i => $iValue) {
			$this->options['query']['PeerTransitRouterMulticastDomains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDefaultLinkType()
 * @method $this withDefaultLinkType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterPeerAttachments extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getNextHopInstanceId()
 * @method $this withNextHopInstanceId($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerUid()
 * @method $this withOwnerUid($value)
 * @method string getNextHopType()
 * @method $this withNextHopType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getTransitRouterTableId()
 * @method $this withTransitRouterTableId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTransitRouterPrefixListAssociation extends Rpc
{
}

/**
 * @method string getTransitRouterRouteEntryType()
 * @method $this withTransitRouterRouteEntryType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTransitRouterRouteEntryNextHopResourceType()
 * @method $this withTransitRouterRouteEntryNextHopResourceType($value)
 * @method string getTransitRouterRouteEntryNextHopType()
 * @method $this withTransitRouterRouteEntryNextHopType($value)
 * @method string getTransitRouterRouteEntryDestinationCidrBlock()
 * @method $this withTransitRouterRouteEntryDestinationCidrBlock($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPrefixListId()
 * @method $this withPrefixListId($value)
 * @method string getTransitRouterRouteEntryNextHopId()
 * @method $this withTransitRouterRouteEntryNextHopId($value)
 * @method string getTransitRouterRouteEntryStatus()
 * @method $this withTransitRouterRouteEntryStatus($value)
 * @method array getRouteFilter()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTransitRouterRouteEntryNames()
 * @method array getTransitRouterRouteEntryIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterRouteEntryOriginResourceType()
 * @method $this withTransitRouterRouteEntryOriginResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTransitRouterRouteEntryOriginResourceId()
 * @method $this withTransitRouterRouteEntryOriginResourceId($value)
 * @method string getTransitRouterRouteEntryNextHopResourceId()
 * @method $this withTransitRouterRouteEntryNextHopResourceId($value)
 */
class ListTransitRouterRouteEntries extends Rpc
{

    /**
     * @param array $routeFilter
     *
     * @return $this
     */
	public function withRouteFilter(array $routeFilter)
	{
	    $this->data['RouteFilter'] = $routeFilter;
		foreach ($routeFilter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['RouteFilter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['RouteFilter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $transitRouterRouteEntryNames
     *
     * @return $this
     */
	public function withTransitRouterRouteEntryNames(array $transitRouterRouteEntryNames)
	{
	    $this->data['TransitRouterRouteEntryNames'] = $transitRouterRouteEntryNames;
		foreach ($transitRouterRouteEntryNames as $i => $iValue) {
			$this->options['query']['TransitRouterRouteEntryNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $transitRouterRouteEntryIds
     *
     * @return $this
     */
	public function withTransitRouterRouteEntryIds(array $transitRouterRouteEntryIds)
	{
	    $this->data['TransitRouterRouteEntryIds'] = $transitRouterRouteEntryIds;
		foreach ($transitRouterRouteEntryIds as $i => $iValue) {
			$this->options['query']['TransitRouterRouteEntryIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTransitRouterAttachmentResourceId()
 * @method $this withTransitRouterAttachmentResourceId($value)
 * @method string getTransitRouterAttachmentResourceType()
 * @method $this withTransitRouterAttachmentResourceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getTransitRouterAttachmentIds()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTransitRouterRouteTableAssociations extends Rpc
{

    /**
     * @param array $transitRouterAttachmentIds
     *
     * @return $this
     */
	public function withTransitRouterAttachmentIds(array $transitRouterAttachmentIds)
	{
	    $this->data['TransitRouterAttachmentIds'] = $transitRouterAttachmentIds;
		foreach ($transitRouterAttachmentIds as $i => $iValue) {
			$this->options['query']['TransitRouterAttachmentIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTransitRouterAttachmentResourceId()
 * @method $this withTransitRouterAttachmentResourceId($value)
 * @method string getTransitRouterAttachmentResourceType()
 * @method $this withTransitRouterAttachmentResourceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getTransitRouterAttachmentIds()
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTransitRouterRouteTablePropagations extends Rpc
{

    /**
     * @param array $transitRouterAttachmentIds
     *
     * @return $this
     */
	public function withTransitRouterAttachmentIds(array $transitRouterAttachmentIds)
	{
	    $this->data['TransitRouterAttachmentIds'] = $transitRouterAttachmentIds;
		foreach ($transitRouterAttachmentIds as $i => $iValue) {
			$this->options['query']['TransitRouterAttachmentIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTransitRouterRouteTableNames()
 * @method string getRouteTableOptions()
 * @method $this withRouteTableOptions($value)
 * @method string getTransitRouterRouteTableType()
 * @method $this withTransitRouterRouteTableType($value)
 * @method string getTransitRouterRouteTableStatus()
 * @method $this withTransitRouterRouteTableStatus($value)
 * @method array getTransitRouterRouteTableIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterRouteTables extends Rpc
{

    /**
     * @param array $transitRouterRouteTableNames
     *
     * @return $this
     */
	public function withTransitRouterRouteTableNames(array $transitRouterRouteTableNames)
	{
	    $this->data['TransitRouterRouteTableNames'] = $transitRouterRouteTableNames;
		foreach ($transitRouterRouteTableNames as $i => $iValue) {
			$this->options['query']['TransitRouterRouteTableNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $transitRouterRouteTableIds
     *
     * @return $this
     */
	public function withTransitRouterRouteTableIds(array $transitRouterRouteTableIds)
	{
	    $this->data['TransitRouterRouteTableIds'] = $transitRouterRouteTableIds;
		foreach ($transitRouterRouteTableIds as $i => $iValue) {
			$this->options['query']['TransitRouterRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTransitRouterName()
 * @method $this withTransitRouterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getGetPrimaryStandbyZoneInfo()
 * @method $this withGetPrimaryStandbyZoneInfo($value)
 * @method array getFeatureFilter()
 * @method string getType()
 * @method $this withType($value)
 * @method array getTransitRouterIds()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTransitRouters extends Rpc
{

    /**
     * @param array $featureFilter
     *
     * @return $this
     */
	public function withFeatureFilter(array $featureFilter)
	{
	    $this->data['FeatureFilter'] = $featureFilter;
		foreach ($featureFilter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['FeatureFilter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['FeatureFilter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $transitRouterIds
     *
     * @return $this
     */
	public function withTransitRouterIds(array $transitRouterIds)
	{
	    $this->data['TransitRouterIds'] = $transitRouterIds;
		foreach ($transitRouterIds as $i => $iValue) {
			$this->options['query']['TransitRouterIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterVbrAttachments extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTransitRouterVpcAttachments extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterVpnAttachments extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getIpv6Level()
 * @method $this withIpv6Level($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyCenAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyCenBandwidthPackageAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class ModifyCenBandwidthPackageSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCommunityMatchMode()
 * @method $this withCommunityMatchMode($value)
 * @method string getMapResult()
 * @method $this withMapResult($value)
 * @method array getDestinationRegionIds()
 * @method string getNextPriority()
 * @method $this withNextPriority($value)
 * @method array getDestinationCidrBlocks()
 * @method array getOriginalRouteTableIds()
 * @method array getSourceInstanceIds()
 * @method array getSourceRegionIds()
 * @method string getGatewayZoneId()
 * @method $this withGatewayZoneId($value)
 * @method array getMatchAsns()
 * @method string getPreference()
 * @method $this withPreference($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getDestinationChildInstanceTypes()
 * @method array getSourceRouteTableIds()
 * @method array getSourceChildInstanceTypes()
 * @method string getCommunityOperateMode()
 * @method $this withCommunityOperateMode($value)
 * @method array getOperateCommunitySet()
 * @method array getRouteTypes()
 * @method string getMatchAddressType()
 * @method $this withMatchAddressType($value)
 * @method string getCidrMatchMode()
 * @method $this withCidrMatchMode($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceInstanceIdsReverseMatch()
 * @method $this withSourceInstanceIdsReverseMatch($value)
 * @method string getGatewayRegionId()
 * @method $this withGatewayRegionId($value)
 * @method array getDestinationRouteTableIds()
 * @method array getSourceZoneIds()
 * @method array getDestinationInstanceIds()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationInstanceIdsReverseMatch()
 * @method $this withDestinationInstanceIdsReverseMatch($value)
 * @method string getRouteMapId()
 * @method $this withRouteMapId($value)
 * @method array getPrependAsPath()
 * @method string getAsPathMatchMode()
 * @method $this withAsPathMatchMode($value)
 * @method array getMatchCommunitySet()
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 */
class ModifyCenRouteMap extends Rpc
{

    /**
     * @param array $destinationRegionIds
     *
     * @return $this
     */
	public function withDestinationRegionIds(array $destinationRegionIds)
	{
	    $this->data['DestinationRegionIds'] = $destinationRegionIds;
		foreach ($destinationRegionIds as $i => $iValue) {
			$this->options['query']['DestinationRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationCidrBlocks
     *
     * @return $this
     */
	public function withDestinationCidrBlocks(array $destinationCidrBlocks)
	{
	    $this->data['DestinationCidrBlocks'] = $destinationCidrBlocks;
		foreach ($destinationCidrBlocks as $i => $iValue) {
			$this->options['query']['DestinationCidrBlocks.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $originalRouteTableIds
     *
     * @return $this
     */
	public function withOriginalRouteTableIds(array $originalRouteTableIds)
	{
	    $this->data['OriginalRouteTableIds'] = $originalRouteTableIds;
		foreach ($originalRouteTableIds as $i => $iValue) {
			$this->options['query']['OriginalRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceInstanceIds
     *
     * @return $this
     */
	public function withSourceInstanceIds(array $sourceInstanceIds)
	{
	    $this->data['SourceInstanceIds'] = $sourceInstanceIds;
		foreach ($sourceInstanceIds as $i => $iValue) {
			$this->options['query']['SourceInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceRegionIds
     *
     * @return $this
     */
	public function withSourceRegionIds(array $sourceRegionIds)
	{
	    $this->data['SourceRegionIds'] = $sourceRegionIds;
		foreach ($sourceRegionIds as $i => $iValue) {
			$this->options['query']['SourceRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $matchAsns
     *
     * @return $this
     */
	public function withMatchAsns(array $matchAsns)
	{
	    $this->data['MatchAsns'] = $matchAsns;
		foreach ($matchAsns as $i => $iValue) {
			$this->options['query']['MatchAsns.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationChildInstanceTypes
     *
     * @return $this
     */
	public function withDestinationChildInstanceTypes(array $destinationChildInstanceTypes)
	{
	    $this->data['DestinationChildInstanceTypes'] = $destinationChildInstanceTypes;
		foreach ($destinationChildInstanceTypes as $i => $iValue) {
			$this->options['query']['DestinationChildInstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceRouteTableIds
     *
     * @return $this
     */
	public function withSourceRouteTableIds(array $sourceRouteTableIds)
	{
	    $this->data['SourceRouteTableIds'] = $sourceRouteTableIds;
		foreach ($sourceRouteTableIds as $i => $iValue) {
			$this->options['query']['SourceRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceChildInstanceTypes
     *
     * @return $this
     */
	public function withSourceChildInstanceTypes(array $sourceChildInstanceTypes)
	{
	    $this->data['SourceChildInstanceTypes'] = $sourceChildInstanceTypes;
		foreach ($sourceChildInstanceTypes as $i => $iValue) {
			$this->options['query']['SourceChildInstanceTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $operateCommunitySet
     *
     * @return $this
     */
	public function withOperateCommunitySet(array $operateCommunitySet)
	{
	    $this->data['OperateCommunitySet'] = $operateCommunitySet;
		foreach ($operateCommunitySet as $i => $iValue) {
			$this->options['query']['OperateCommunitySet.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $routeTypes
     *
     * @return $this
     */
	public function withRouteTypes(array $routeTypes)
	{
	    $this->data['RouteTypes'] = $routeTypes;
		foreach ($routeTypes as $i => $iValue) {
			$this->options['query']['RouteTypes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationRouteTableIds
     *
     * @return $this
     */
	public function withDestinationRouteTableIds(array $destinationRouteTableIds)
	{
	    $this->data['DestinationRouteTableIds'] = $destinationRouteTableIds;
		foreach ($destinationRouteTableIds as $i => $iValue) {
			$this->options['query']['DestinationRouteTableIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $sourceZoneIds
     *
     * @return $this
     */
	public function withSourceZoneIds(array $sourceZoneIds)
	{
	    $this->data['SourceZoneIds'] = $sourceZoneIds;
		foreach ($sourceZoneIds as $i => $iValue) {
			$this->options['query']['SourceZoneIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $destinationInstanceIds
     *
     * @return $this
     */
	public function withDestinationInstanceIds(array $destinationInstanceIds)
	{
	    $this->data['DestinationInstanceIds'] = $destinationInstanceIds;
		foreach ($destinationInstanceIds as $i => $iValue) {
			$this->options['query']['DestinationInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $prependAsPath
     *
     * @return $this
     */
	public function withPrependAsPath(array $prependAsPath)
	{
	    $this->data['PrependAsPath'] = $prependAsPath;
		foreach ($prependAsPath as $i => $iValue) {
			$this->options['query']['PrependAsPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $matchCommunitySet
     *
     * @return $this
     */
	public function withMatchCommunitySet(array $matchCommunitySet)
	{
	    $this->data['MatchCommunitySet'] = $matchCommunitySet;
		foreach ($matchCommunitySet as $i => $iValue) {
			$this->options['query']['MatchCommunitySet.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class ModifyFlowLogAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTransitRouterCidrId()
 * @method $this withTransitRouterCidrId($value)
 * @method string getCidr()
 * @method $this withCidr($value)
 * @method string getPublishCidrRoute()
 * @method $this withPublishCidrRoute($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyTransitRouterCidr extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method string getTransitRouterMulticastDomainDescription()
 * @method $this withTransitRouterMulticastDomainDescription($value)
 * @method string getTransitRouterMulticastDomainName()
 * @method $this withTransitRouterMulticastDomainName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class ModifyTransitRouterMulticastDomain extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class MoveResourceGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class OpenTransitRouterService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 */
class PublishRouteEntries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouteTableId()
 * @method $this withTransitRouteTableId($value)
 * @method string getTransitRouteTableAggregationCidr()
 * @method $this withTransitRouteTableAggregationCidr($value)
 */
class RefreshTransitRouteTableAggregation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getNetworkInterfaceIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method array getConnectPeerIds()
 * @method string getGroupIpAddress()
 * @method $this withGroupIpAddress($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getPeerTransitRouterMulticastDomains()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class RegisterTransitRouterMulticastGroupMembers extends Rpc
{

    /**
     * @param array $networkInterfaceIds
     *
     * @return $this
     */
	public function withNetworkInterfaceIds(array $networkInterfaceIds)
	{
	    $this->data['NetworkInterfaceIds'] = $networkInterfaceIds;
		foreach ($networkInterfaceIds as $i => $iValue) {
			$this->options['query']['NetworkInterfaceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $connectPeerIds
     *
     * @return $this
     */
	public function withConnectPeerIds(array $connectPeerIds)
	{
	    $this->data['ConnectPeerIds'] = $connectPeerIds;
		foreach ($connectPeerIds as $i => $iValue) {
			$this->options['query']['ConnectPeerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $peerTransitRouterMulticastDomains
     *
     * @return $this
     */
	public function withPeerTransitRouterMulticastDomains(array $peerTransitRouterMulticastDomains)
	{
	    $this->data['PeerTransitRouterMulticastDomains'] = $peerTransitRouterMulticastDomains;
		foreach ($peerTransitRouterMulticastDomains as $i => $iValue) {
			$this->options['query']['PeerTransitRouterMulticastDomains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getNetworkInterfaceIds()
 * @method string getTransitRouterMulticastDomainId()
 * @method $this withTransitRouterMulticastDomainId($value)
 * @method array getConnectPeerIds()
 * @method string getGroupIpAddress()
 * @method $this withGroupIpAddress($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class RegisterTransitRouterMulticastGroupSources extends Rpc
{

    /**
     * @param array $networkInterfaceIds
     *
     * @return $this
     */
	public function withNetworkInterfaceIds(array $networkInterfaceIds)
	{
	    $this->data['NetworkInterfaceIds'] = $networkInterfaceIds;
		foreach ($networkInterfaceIds as $i => $iValue) {
			$this->options['query']['NetworkInterfaceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $connectPeerIds
     *
     * @return $this
     */
	public function withConnectPeerIds(array $connectPeerIds)
	{
	    $this->data['ConnectPeerIds'] = $connectPeerIds;
		foreach ($connectPeerIds as $i => $iValue) {
			$this->options['query']['ConnectPeerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTrafficMarkRuleIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class RemoveTrafficMatchRuleFromTrafficMarkingPolicy extends Rpc
{

    /**
     * @param array $trafficMarkRuleIds
     *
     * @return $this
     */
	public function withTrafficMarkRuleIds(array $trafficMarkRuleIds)
	{
	    $this->data['TrafficMarkRuleIds'] = $trafficMarkRuleIds;
		foreach ($trafficMarkRuleIds as $i => $iValue) {
			$this->options['query']['TrafficMarkRuleIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTrafficMarkRuleIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class RemoveTraficMatchRuleFromTrafficMarkingPolicy extends Rpc
{

    /**
     * @param array $trafficMarkRuleIds
     *
     * @return $this
     */
	public function withTrafficMarkRuleIds(array $trafficMarkRuleIds)
	{
	    $this->data['TrafficMarkRuleIds'] = $trafficMarkRuleIds;
		foreach ($trafficMarkRuleIds as $i => $iValue) {
			$this->options['query']['TrafficMarkRuleIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class ReplaceTransitRouterRouteTableAssociation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUpdateInterval()
 * @method $this withUpdateInterval($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getHostVpcId()
 * @method $this withHostVpcId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getAccessRegionIds()
 */
class ResolveAndRouteServiceInCen extends Rpc
{

    /**
     * @param array $accessRegionIds
     *
     * @return $this
     */
	public function withAccessRegionIds(array $accessRegionIds)
	{
	    $this->data['AccessRegionIds'] = $accessRegionIds;
		foreach ($accessRegionIds as $i => $iValue) {
			$this->options['query']['AccessRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RevokeInstanceFromTransitRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getHostVpcId()
 * @method $this withHostVpcId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class RoutePrivateZoneInCenToVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOppositeRegionId()
 * @method $this withOppositeRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getLocalRegionId()
 * @method $this withLocalRegionId($value)
 * @method string getBandwidthLimit()
 * @method $this withBandwidthLimit($value)
 */
class SetCenInterRegionBandwidthLimit extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class TagResources extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class TempUpgradeCenBandwidthPackageSpec extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class UnassociateCenBandwidthPackage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UnroutePrivateZoneInCenToVpc extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTrafficQosPolicyName()
 * @method $this withTrafficQosPolicyName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTrafficQosPolicyId()
 * @method $this withTrafficQosPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTrafficQosPolicyDescription()
 * @method $this withTrafficQosPolicyDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UpdateCenInterRegionTrafficQosPolicyAttribute extends Rpc
{
}

/**
 * @method array getDscps()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getQosQueueName()
 * @method $this withQosQueueName($value)
 * @method string getRemainBandwidthPercent()
 * @method $this withRemainBandwidthPercent($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getQosQueueId()
 * @method $this withQosQueueId($value)
 * @method string getQosQueueDescription()
 * @method $this withQosQueueDescription($value)
 */
class UpdateCenInterRegionTrafficQosQueueAttribute extends Rpc
{

    /**
     * @param array $dscps
     *
     * @return $this
     */
	public function withDscps(array $dscps)
	{
	    $this->data['Dscps'] = $dscps;
		foreach ($dscps as $i => $iValue) {
			$this->options['query']['Dscps.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAddTrafficMatchRules()
 * @method string getTrafficMarkingPolicyDescription()
 * @method $this withTrafficMarkingPolicyDescription($value)
 * @method string getTrafficMarkingPolicyId()
 * @method $this withTrafficMarkingPolicyId($value)
 * @method string getTrafficMarkingPolicyName()
 * @method $this withTrafficMarkingPolicyName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method array getDeleteTrafficMatchRules()
 */
class UpdateTrafficMarkingPolicyAttribute extends Rpc
{

    /**
     * @param array $addTrafficMatchRules
     *
     * @return $this
     */
	public function withAddTrafficMatchRules(array $addTrafficMatchRules)
	{
	    $this->data['AddTrafficMatchRules'] = $addTrafficMatchRules;
		foreach ($addTrafficMatchRules as $depth1 => $depth1Value) {
			foreach ($depth1Value['DstPortRange'] as $i => $iValue) {
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.DstPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MatchDscp'])){
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.MatchDscp'] = $depth1Value['MatchDscp'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['TrafficMatchRuleDescription'])){
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleDescription'] = $depth1Value['TrafficMatchRuleDescription'];
			}
			foreach ($depth1Value['SrcPortRange'] as $i => $iValue) {
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.SrcPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['DstCidr'])){
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.DstCidr'] = $depth1Value['DstCidr'];
			}
			if(isset($depth1Value['TrafficMatchRuleName'])){
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleName'] = $depth1Value['TrafficMatchRuleName'];
			}
			if(isset($depth1Value['SrcCidr'])){
				$this->options['query']['AddTrafficMatchRules.' . ($depth1 + 1) . '.SrcCidr'] = $depth1Value['SrcCidr'];
			}
		}

		return $this;
    }

    /**
     * @param array $deleteTrafficMatchRules
     *
     * @return $this
     */
	public function withDeleteTrafficMatchRules(array $deleteTrafficMatchRules)
	{
	    $this->data['DeleteTrafficMatchRules'] = $deleteTrafficMatchRules;
		foreach ($deleteTrafficMatchRules as $depth1 => $depth1Value) {
			foreach ($depth1Value['DstPortRange'] as $i => $iValue) {
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.DstPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['MatchDscp'])){
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.MatchDscp'] = $depth1Value['MatchDscp'];
			}
			if(isset($depth1Value['Protocol'])){
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			}
			if(isset($depth1Value['TrafficMatchRuleDescription'])){
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleDescription'] = $depth1Value['TrafficMatchRuleDescription'];
			}
			foreach ($depth1Value['SrcPortRange'] as $i => $iValue) {
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.SrcPortRange.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['DstCidr'])){
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.DstCidr'] = $depth1Value['DstCidr'];
			}
			if(isset($depth1Value['TrafficMatchRuleName'])){
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.TrafficMatchRuleName'] = $depth1Value['TrafficMatchRuleName'];
			}
			if(isset($depth1Value['SrcCidr'])){
				$this->options['query']['DeleteTrafficMatchRules.' . ($depth1 + 1) . '.SrcCidr'] = $depth1Value['SrcCidr'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTransitRouterName()
 * @method $this withTransitRouterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 * @method string getTransitRouterDescription()
 * @method $this withTransitRouterDescription($value)
 * @method string getSupportMulticast()
 * @method $this withSupportMulticast($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UpdateTransitRouter extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 */
class UpdateTransitRouterEcrAttachmentAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getDefaultLinkType()
 * @method $this withDefaultLinkType($value)
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class UpdateTransitRouterPeerAttachmentAttribute extends Rpc
{
}

/**
 * @method string getTransitRouterRouteEntryId()
 * @method $this withTransitRouterRouteEntryId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterRouteEntryDescription()
 * @method $this withTransitRouterRouteEntryDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterRouteEntryName()
 * @method $this withTransitRouterRouteEntryName($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UpdateTransitRouterRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRouteTableOptions()
 * @method $this withRouteTableOptions($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getTransitRouterRouteTableDescription()
 * @method $this withTransitRouterRouteTableDescription($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getTransitRouterRouteTableName()
 * @method $this withTransitRouterRouteTableName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UpdateTransitRouterRouteTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 */
class UpdateTransitRouterVbrAttachmentAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 */
class UpdateTransitRouterVpcAttachmentAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getRemoveZoneMappings()
 * @method array getAddZoneMappings()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class UpdateTransitRouterVpcAttachmentZones extends Rpc
{

    /**
     * @param array $removeZoneMappings
     *
     * @return $this
     */
	public function withRemoveZoneMappings(array $removeZoneMappings)
	{
	    $this->data['RemoveZoneMappings'] = $removeZoneMappings;
		foreach ($removeZoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['RemoveZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['RemoveZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $addZoneMappings
     *
     * @return $this
     */
	public function withAddZoneMappings(array $addZoneMappings)
	{
	    $this->data['AddZoneMappings'] = $addZoneMappings;
		foreach ($addZoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['AddZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['AddZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
 * @method string getAutoPublishRouteEnabled()
 * @method $this withAutoPublishRouteEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 */
class UpdateTransitRouterVpnAttachmentAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 */
class WithdrawPublishedRouteEntries extends Rpc
{
}
