<?php

namespace AlibabaCloud\Cbn\V20170912;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveFlowLog activeFlowLog(array $options = [])
 * @method AssociateCenBandwidthPackage associateCenBandwidthPackage(array $options = [])
 * @method AssociateTransitRouterAttachmentWithRouteTable associateTransitRouterAttachmentWithRouteTable(array $options = [])
 * @method AttachCenChildInstance attachCenChildInstance(array $options = [])
 * @method CreateCen createCen(array $options = [])
 * @method CreateCenBandwidthPackage createCenBandwidthPackage(array $options = [])
 * @method CreateCenChildInstanceRouteEntryToCen createCenChildInstanceRouteEntryToCen(array $options = [])
 * @method CreateCenRouteMap createCenRouteMap(array $options = [])
 * @method CreateFlowlog createFlowlog(array $options = [])
 * @method CreateTransitRouter createTransitRouter(array $options = [])
 * @method CreateTransitRouterPeerAttachment createTransitRouterPeerAttachment(array $options = [])
 * @method CreateTransitRouterRouteEntry createTransitRouterRouteEntry(array $options = [])
 * @method CreateTransitRouterRouteTable createTransitRouterRouteTable(array $options = [])
 * @method CreateTransitRouterVbrAttachment createTransitRouterVbrAttachment(array $options = [])
 * @method CreateTransitRouterVpcAttachment createTransitRouterVpcAttachment(array $options = [])
 * @method DeactiveFlowLog deactiveFlowLog(array $options = [])
 * @method DeleteCen deleteCen(array $options = [])
 * @method DeleteCenBandwidthPackage deleteCenBandwidthPackage(array $options = [])
 * @method DeleteCenChildInstanceRouteEntryToCen deleteCenChildInstanceRouteEntryToCen(array $options = [])
 * @method DeleteCenRouteMap deleteCenRouteMap(array $options = [])
 * @method DeleteFlowlog deleteFlowlog(array $options = [])
 * @method DeleteRouteServiceInCen deleteRouteServiceInCen(array $options = [])
 * @method DeleteTransitRouterPeerAttachment deleteTransitRouterPeerAttachment(array $options = [])
 * @method DeleteTransitRouterRouteEntry deleteTransitRouterRouteEntry(array $options = [])
 * @method DeleteTransitRouterRouteTable deleteTransitRouterRouteTable(array $options = [])
 * @method DeleteTransitRouterVbrAttachment deleteTransitRouterVbrAttachment(array $options = [])
 * @method DeleteTransitRouterVpcAttachment deleteTransitRouterVpcAttachment(array $options = [])
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
 * @method DescribePublishedRouteEntries describePublishedRouteEntries(array $options = [])
 * @method DescribeRouteConflict describeRouteConflict(array $options = [])
 * @method DescribeRouteServicesInCen describeRouteServicesInCen(array $options = [])
 * @method DetachCenChildInstance detachCenChildInstance(array $options = [])
 * @method DisableCenVbrHealthCheck disableCenVbrHealthCheck(array $options = [])
 * @method DisableTransitRouterRouteTablePropagation disableTransitRouterRouteTablePropagation(array $options = [])
 * @method DissociateTransitRouterAttachmentFromRouteTable dissociateTransitRouterAttachmentFromRouteTable(array $options = [])
 * @method EnableCenVbrHealthCheck enableCenVbrHealthCheck(array $options = [])
 * @method EnableTransitRouterRouteTablePropagation enableTransitRouterRouteTablePropagation(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTransitRouterAvailableResource listTransitRouterAvailableResource(array $options = [])
 * @method ListTransitRouterPeerAttachments listTransitRouterPeerAttachments(array $options = [])
 * @method ListTransitRouterRouteEntries listTransitRouterRouteEntries(array $options = [])
 * @method ListTransitRouterRouteTableAssociations listTransitRouterRouteTableAssociations(array $options = [])
 * @method ListTransitRouterRouteTablePropagations listTransitRouterRouteTablePropagations(array $options = [])
 * @method ListTransitRouterRouteTables listTransitRouterRouteTables(array $options = [])
 * @method ListTransitRouters listTransitRouters(array $options = [])
 * @method ListTransitRouterVbrAttachments listTransitRouterVbrAttachments(array $options = [])
 * @method ListTransitRouterVpcAttachments listTransitRouterVpcAttachments(array $options = [])
 * @method ModifyCenAttribute modifyCenAttribute(array $options = [])
 * @method ModifyCenBandwidthPackageAttribute modifyCenBandwidthPackageAttribute(array $options = [])
 * @method ModifyCenBandwidthPackageSpec modifyCenBandwidthPackageSpec(array $options = [])
 * @method ModifyCenRouteMap modifyCenRouteMap(array $options = [])
 * @method ModifyFlowLogAttribute modifyFlowLogAttribute(array $options = [])
 * @method PublishRouteEntries publishRouteEntries(array $options = [])
 * @method ResolveAndRouteServiceInCen resolveAndRouteServiceInCen(array $options = [])
 * @method RoutePrivateZoneInCenToVpc routePrivateZoneInCenToVpc(array $options = [])
 * @method SetCenInterRegionBandwidthLimit setCenInterRegionBandwidthLimit(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TempUpgradeCenBandwidthPackageSpec tempUpgradeCenBandwidthPackageSpec(array $options = [])
 * @method UnassociateCenBandwidthPackage unassociateCenBandwidthPackage(array $options = [])
 * @method UnroutePrivateZoneInCenToVpc unroutePrivateZoneInCenToVpc(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateTransitRouter updateTransitRouter(array $options = [])
 * @method UpdateTransitRouterPeerAttachmentAttribute updateTransitRouterPeerAttachmentAttribute(array $options = [])
 * @method UpdateTransitRouterRouteEntry updateTransitRouterRouteEntry(array $options = [])
 * @method UpdateTransitRouterRouteTable updateTransitRouterRouteTable(array $options = [])
 * @method UpdateTransitRouterVbrAttachmentAttribute updateTransitRouterVbrAttachmentAttribute(array $options = [])
 * @method UpdateTransitRouterVpcAttachmentAttribute updateTransitRouterVpcAttachmentAttribute(array $options = [])
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
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class ActiveFlowLog extends Rpc
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class AssociateTransitRouterAttachmentWithRouteTable extends Rpc
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
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
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
 * @method string getIpv6Level()
 * @method $this withIpv6Level($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCen extends Rpc
{
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
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateCenBandwidthPackage extends Rpc
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
 * @method string getCommunityMatchMode()
 * @method $this withCommunityMatchMode($value)
 * @method string getMapResult()
 * @method $this withMapResult($value)
 * @method array getDestinationRegionIds()
 * @method string getNextPriority()
 * @method $this withNextPriority($value)
 * @method array getDestinationCidrBlocks()
 * @method string getSystemPolicy()
 * @method $this withSystemPolicy($value)
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
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 */
class CreateFlowlog extends Rpc
{
}

/**
 * @method string getTransitRouterName()
 * @method $this withTransitRouterName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getType()
 * @method $this withType($value)
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
 */
class CreateTransitRouter extends Rpc
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
 */
class CreateTransitRouterRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
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
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 */
class CreateTransitRouterRouteTable extends Rpc
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
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getTransitRouterAttachmentName()
 * @method $this withTransitRouterAttachmentName($value)
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
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getVbrOwnerId()
 * @method $this withVbrOwnerId($value)
 */
class CreateTransitRouterVbrAttachment extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getAutoCreateVpcRoute()
 * @method $this withAutoCreateVpcRoute($value)
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
 * @method string getTransitRouterAttachmentDescription()
 * @method $this withTransitRouterAttachmentDescription($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 */
class CreateTransitRouterVpcAttachment extends Rpc
{

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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 */
class DeactiveFlowLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 */
class DeleteCenBandwidthPackage extends Rpc
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
 */
class DeleteRouteServiceInCen extends Rpc
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class DeleteTransitRouterPeerAttachment extends Rpc
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class DeleteTransitRouterVpcAttachment extends Rpc
{
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
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
 * @method string getFlowLogId()
 * @method $this withFlowLogId($value)
 * @method string getFlowLogName()
 * @method $this withFlowLogName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeFlowlogs extends Rpc
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeGrantRulesToCen extends Rpc
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
 */
class DescribeRouteServicesInCen extends Rpc
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
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 */
class EnableTransitRouterRouteTablePropagation extends Rpc
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
 */
class ListTransitRouterAvailableResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterPeerAttachments extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTransitRouterRouteEntryDestinationCidrBlock()
 * @method $this withTransitRouterRouteEntryDestinationCidrBlock($value)
 * @method string getTransitRouterRouteTableId()
 * @method $this withTransitRouterRouteTableId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTransitRouterRouteEntryStatus()
 * @method $this withTransitRouterRouteEntryStatus($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getTransitRouterRouteEntryNames()
 * @method array getTransitRouterRouteEntryIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterRouteEntries extends Rpc
{

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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getTransitRouterAttachmentIds()
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
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getTransitRouterAttachmentIds()
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
 * @method string getTransitRouterRouteTableType()
 * @method $this withTransitRouterRouteTableType($value)
 * @method string getTransitRouterRouteTableStatus()
 * @method $this withTransitRouterRouteTableStatus($value)
 * @method array getTransitRouterRouteTableIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method array getTransitRouterIds()
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
 * @method string getTransitRouterId()
 * @method $this withTransitRouterId($value)
 */
class ListTransitRouters extends Rpc
{

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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterVbrAttachments extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
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
 * @method string getTransitRouterAttachmentId()
 * @method $this withTransitRouterAttachmentId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTransitRouterVpcAttachments extends Rpc
{
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
 */
class UpdateTransitRouterRouteEntry extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
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
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 */
class WithdrawPublishedRouteEntries extends Rpc
{
}
