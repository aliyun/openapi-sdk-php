<?php

namespace AlibabaCloud\Cbn\V20170912;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withResourceId(array $value)
    {
        $this->data['ResourceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTagKey(array $value)
    {
        $this->data['TagKey'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withRouteTypes(array $value)
    {
        $this->data['RouteTypes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RouteTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationCidrBlocks(array $value)
    {
        $this->data['DestinationCidrBlocks'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationCidrBlocks.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationRouteTableIds(array $value)
    {
        $this->data['DestinationRouteTableIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationRouteTableIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceInstanceIds(array $value)
    {
        $this->data['SourceInstanceIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceInstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceRegionIds(array $value)
    {
        $this->data['SourceRegionIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceRegionIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationInstanceIds(array $value)
    {
        $this->data['DestinationInstanceIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationInstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMatchAsns(array $value)
    {
        $this->data['MatchAsns'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MatchAsns.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationChildInstanceTypes(array $value)
    {
        $this->data['DestinationChildInstanceTypes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationChildInstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceRouteTableIds(array $value)
    {
        $this->data['SourceRouteTableIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceRouteTableIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceChildInstanceTypes(array $value)
    {
        $this->data['SourceChildInstanceTypes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceChildInstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMatchCommunitySet(array $value)
    {
        $this->data['MatchCommunitySet'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MatchCommunitySet.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOperateCommunitySet(array $value)
    {
        $this->data['OperateCommunitySet'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withRouteTypes(array $value)
    {
        $this->data['RouteTypes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RouteTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationCidrBlocks(array $value)
    {
        $this->data['DestinationCidrBlocks'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationCidrBlocks.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationRouteTableIds(array $value)
    {
        $this->data['DestinationRouteTableIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationRouteTableIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceInstanceIds(array $value)
    {
        $this->data['SourceInstanceIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceInstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceRegionIds(array $value)
    {
        $this->data['SourceRegionIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceRegionIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationInstanceIds(array $value)
    {
        $this->data['DestinationInstanceIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationInstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMatchAsns(array $value)
    {
        $this->data['MatchAsns'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MatchAsns.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDestinationChildInstanceTypes(array $value)
    {
        $this->data['DestinationChildInstanceTypes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['DestinationChildInstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceRouteTableIds(array $value)
    {
        $this->data['SourceRouteTableIds'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceRouteTableIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSourceChildInstanceTypes(array $value)
    {
        $this->data['SourceChildInstanceTypes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SourceChildInstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMatchCommunitySet(array $value)
    {
        $this->data['MatchCommunitySet'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['MatchCommunitySet.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOperateCommunitySet(array $value)
    {
        $this->data['OperateCommunitySet'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withTag(array $value)
    {
        $this->data['Tag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withFilter(array $value)
    {
        $this->data['Filter'] = $value;
        foreach ($value as $i => $iValue) {
            foreach ($value[$i]['Values'] as $j => $jValue) {
                $this->options['query']['Filter.' . ($i + 1) . '.Value.' . ($j + 1)] = $jValue;
            }
            $this->options['query']['Filter.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
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
