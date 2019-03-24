<?php

namespace AlibabaCloud\Cbn\V20170912;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method UntagResources untagResources(array $options = [])
 * @method ModifyCenRouteMap modifyCenRouteMap(array $options = [])
 * @method DescribeCenRouteMaps describeCenRouteMaps(array $options = [])
 * @method DeleteCenRouteMap deleteCenRouteMap(array $options = [])
 * @method CreateCenRouteMap createCenRouteMap(array $options = [])
 * @method DescribeCenChildInstanceRouteEntries describeCenChildInstanceRouteEntries(array $options = [])
 * @method ResolveAndRouteServiceInCen resolveAndRouteServiceInCen(array $options = [])
 * @method DeleteRouteServiceInCen deleteRouteServiceInCen(array $options = [])
 * @method DescribeRouteServicesInCen describeRouteServicesInCen(array $options = [])
 * @method UnroutePrivateZoneInCenToVpc unroutePrivateZoneInCenToVpc(array $options = [])
 * @method RoutePrivateZoneInCenToVpc routePrivateZoneInCenToVpc(array $options = [])
 * @method DescribeCenPrivateZoneRoutes describeCenPrivateZoneRoutes(array $options = [])
 * @method DescribeGrantRulesToCen describeGrantRulesToCen(array $options = [])
 * @method DescribeCenAttachedChildInstanceAttribute describeCenAttachedChildInstanceAttribute(array $options = [])
 * @method WithdrawPublishedRouteEntries withdrawPublishedRouteEntries(array $options = [])
 * @method PublishRouteEntries publishRouteEntries(array $options = [])
 * @method DescribePublishedRouteEntries describePublishedRouteEntries(array $options = [])
 * @method DescribeCenGeographicSpans describeCenGeographicSpans(array $options = [])
 * @method DescribeChildInstanceRegions describeChildInstanceRegions(array $options = [])
 * @method UnassociateCenBandwidthPackage unassociateCenBandwidthPackage(array $options = [])
 * @method SetCenInterRegionBandwidthLimit setCenInterRegionBandwidthLimit(array $options = [])
 * @method ModifyCenBandwidthPackageSpec modifyCenBandwidthPackageSpec(array $options = [])
 * @method ModifyCenBandwidthPackageAttribute modifyCenBandwidthPackageAttribute(array $options = [])
 * @method ModifyCenAttribute modifyCenAttribute(array $options = [])
 * @method EnableCenVbrHealthCheck enableCenVbrHealthCheck(array $options = [])
 * @method DisableCenVbrHealthCheck disableCenVbrHealthCheck(array $options = [])
 * @method DetachCenChildInstance detachCenChildInstance(array $options = [])
 * @method DescribeCenVbrHealthCheck describeCenVbrHealthCheck(array $options = [])
 * @method DescribeCens describeCens(array $options = [])
 * @method DescribeCenRegionDomainRouteEntries describeCenRegionDomainRouteEntries(array $options = [])
 * @method DescribeCenInterRegionBandwidthLimits describeCenInterRegionBandwidthLimits(array $options = [])
 * @method DescribeCenGeographicSpanRemainingBandwidth describeCenGeographicSpanRemainingBandwidth(array $options = [])
 * @method DescribeCenBandwidthPackages describeCenBandwidthPackages(array $options = [])
 * @method DescribeCenAttachedChildInstances describeCenAttachedChildInstances(array $options = [])
 * @method DeleteCenBandwidthPackage deleteCenBandwidthPackage(array $options = [])
 * @method DeleteCen deleteCen(array $options = [])
 * @method CreateCenBandwidthPackage createCenBandwidthPackage(array $options = [])
 * @method CreateCen createCen(array $options = [])
 * @method AttachCenChildInstance attachCenChildInstance(array $options = [])
 * @method AssociateCenBandwidthPackage associateCenBandwidthPackage(array $options = [])
 * @method DescribeRouteConflict describeRouteConflict(array $options = [])
 * @method DescribeGeographicRegionMembership describeGeographicRegionMembership(array $options = [])
 */
class CbnApiResolver
{
    use ApiResolverTrait;
}

class V20170912Rpc extends Rpc
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
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getTagOwnerBid()
 * @method $this withTagOwnerBid($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKey()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class UntagResources extends V20170912Rpc
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
 * @method array getRouteTypes()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCidrMatchMode()
 * @method $this withCidrMatchMode($value)
 * @method string getCommunityMatchMode()
 * @method $this withCommunityMatchMode($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getMapResult()
 * @method $this withMapResult($value)
 * @method string getAsPathLength()
 * @method $this withAsPathLength($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextPriority()
 * @method $this withNextPriority($value)
 * @method array getDestinationCidrBlocks()
 * @method array getDestinationRouteTableIds()
 * @method array getSourceInstanceIds()
 * @method array getSourceRegionIds()
 * @method array getDestinationInstanceIds()
 * @method array getMatchAsns()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPreference()
 * @method $this withPreference($value)
 * @method string getRouteMapId()
 * @method $this withRouteMapId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method array getDestinationChildInstanceTypes()
 * @method array getSourceRouteTableIds()
 * @method string getAsPathMatchMode()
 * @method $this withAsPathMatchMode($value)
 * @method array getSourceChildInstanceTypes()
 * @method array getMatchCommunitySet()
 * @method string getCommunityOperateMode()
 * @method $this withCommunityOperateMode($value)
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 * @method array getOperateCommunitySet()
 */
class ModifyCenRouteMap extends V20170912Rpc
{

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
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRouteMapId()
 * @method $this withRouteMapId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTransmitDirection()
 * @method $this withTransmitDirection($value)
 */
class DescribeCenRouteMaps extends V20170912Rpc
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
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 * @method string getRouteMapId()
 * @method $this withRouteMapId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCenRouteMap extends V20170912Rpc
{
}

/**
 * @method array getRouteTypes()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCidrMatchMode()
 * @method $this withCidrMatchMode($value)
 * @method string getCommunityMatchMode()
 * @method $this withCommunityMatchMode($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getMapResult()
 * @method $this withMapResult($value)
 * @method string getAsPathLength()
 * @method $this withAsPathLength($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextPriority()
 * @method $this withNextPriority($value)
 * @method array getDestinationCidrBlocks()
 * @method array getDestinationRouteTableIds()
 * @method array getSourceInstanceIds()
 * @method array getSourceRegionIds()
 * @method string getTransmitDirection()
 * @method $this withTransmitDirection($value)
 * @method array getDestinationInstanceIds()
 * @method array getMatchAsns()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPreference()
 * @method $this withPreference($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method array getDestinationChildInstanceTypes()
 * @method array getSourceRouteTableIds()
 * @method string getAsPathMatchMode()
 * @method $this withAsPathMatchMode($value)
 * @method array getSourceChildInstanceTypes()
 * @method array getMatchCommunitySet()
 * @method string getCommunityOperateMode()
 * @method $this withCommunityOperateMode($value)
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 * @method array getOperateCommunitySet()
 */
class CreateCenRouteMap extends V20170912Rpc
{

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
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class DescribeCenChildInstanceRouteEntries extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getUpdateInterval()
 * @method $this withUpdateInterval($value)
 */
class ResolveAndRouteServiceInCen extends V20170912Rpc
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
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteRouteServiceInCen extends V20170912Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHost()
 * @method $this withHost($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeRouteServicesInCen extends V20170912Rpc
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
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnroutePrivateZoneInCenToVpc extends V20170912Rpc
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
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHostVpcId()
 * @method $this withHostVpcId($value)
 */
class RoutePrivateZoneInCenToVpc extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHostRegionId()
 * @method $this withHostRegionId($value)
 * @method string getAccessRegionId()
 * @method $this withAccessRegionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCenPrivateZoneRoutes extends V20170912Rpc
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
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeGrantRulesToCen extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
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
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class DescribeCenAttachedChildInstanceAttribute extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class WithdrawPublishedRouteEntries extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class PublishRouteEntries extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class DescribePublishedRouteEntries extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGeographicSpanId()
 * @method $this withGeographicSpanId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCenGeographicSpans extends V20170912Rpc
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
 * @method string getProductType()
 * @method $this withProductType($value)
 */
class DescribeChildInstanceRegions extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UnassociateCenBandwidthPackage extends V20170912Rpc
{
}

/**
 * @method string getLocalRegionId()
 * @method $this withLocalRegionId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOppositeRegionId()
 * @method $this withOppositeRegionId($value)
 * @method string getBandwidthLimit()
 * @method $this withBandwidthLimit($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class SetCenInterRegionBandwidthLimit extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCenBandwidthPackageSpec extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCenBandwidthPackageAttribute extends V20170912Rpc
{
}

/**
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyCenAttribute extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getHealthCheckSourceIp()
 * @method $this withHealthCheckSourceIp($value)
 * @method string getVbrInstanceOwnerId()
 * @method $this withVbrInstanceOwnerId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 * @method string getHealthCheckTargetIp()
 * @method $this withHealthCheckTargetIp($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVbrInstanceRegionId()
 * @method $this withVbrInstanceRegionId($value)
 */
class EnableCenVbrHealthCheck extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getVbrInstanceOwnerId()
 * @method $this withVbrInstanceOwnerId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVbrInstanceRegionId()
 * @method $this withVbrInstanceRegionId($value)
 */
class DisableCenVbrHealthCheck extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCenOwnerId()
 * @method $this withCenOwnerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class DetachCenChildInstance extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getVbrInstanceOwnerId()
 * @method $this withVbrInstanceOwnerId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrInstanceId()
 * @method $this withVbrInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVbrInstanceRegionId()
 * @method $this withVbrInstanceRegionId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCenVbrHealthCheck extends V20170912Rpc
{
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCens extends V20170912Rpc
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
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
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
 * @method string getCenRegionId()
 * @method $this withCenRegionId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeCenRegionDomainRouteEntries extends V20170912Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCenInterRegionBandwidthLimits extends V20170912Rpc
{
}

/**
 * @method string getGeographicRegionBId()
 * @method $this withGeographicRegionBId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGeographicRegionAId()
 * @method $this withGeographicRegionAId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeCenGeographicSpanRemainingBandwidth extends V20170912Rpc
{
}

/**
 * @method array getFilter()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getIsOrKey()
 * @method $this withIsOrKey($value)
 */
class DescribeCenBandwidthPackages extends V20170912Rpc
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
            $this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class DescribeCenAttachedChildInstances extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteCenBandwidthPackage extends V20170912Rpc
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
class DeleteCen extends V20170912Rpc
{
}

/**
 * @method string getGeographicRegionBId()
 * @method $this withGeographicRegionBId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getGeographicRegionAId()
 * @method $this withGeographicRegionAId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getBandwidthPackageChargeType()
 * @method $this withBandwidthPackageChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateCenBandwidthPackage extends V20170912Rpc
{
}

/**
 * @method string getProtectionLevel()
 * @method $this withProtectionLevel($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCen extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
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
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceOwnerId()
 * @method $this withChildInstanceOwnerId($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class AttachCenChildInstance extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getCenId()
 * @method $this withCenId($value)
 * @method string getCenBandwidthPackageId()
 * @method $this withCenBandwidthPackageId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AssociateCenBandwidthPackage extends V20170912Rpc
{
}

/**
 * @method string getChildInstanceId()
 * @method $this withChildInstanceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDestinationCidrBlock()
 * @method $this withDestinationCidrBlock($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getChildInstanceType()
 * @method $this withChildInstanceType($value)
 * @method string getChildInstanceRouteTableId()
 * @method $this withChildInstanceRouteTableId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getChildInstanceRegionId()
 * @method $this withChildInstanceRegionId($value)
 */
class DescribeRouteConflict extends V20170912Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getGeographicRegionId()
 * @method $this withGeographicRegionId($value)
 */
class DescribeGeographicRegionMembership extends V20170912Rpc
{
}
