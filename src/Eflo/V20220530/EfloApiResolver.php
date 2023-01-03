<?php

namespace AlibabaCloud\Eflo\V20220530;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateSubnet createSubnet(array $options = [])
 * @method CreateVcc createVcc(array $options = [])
 * @method CreateVpd createVpd(array $options = [])
 * @method DeleteSubnet deleteSubnet(array $options = [])
 * @method DeleteVpd deleteVpd(array $options = [])
 * @method GetSubnet getSubnet(array $options = [])
 * @method GetVcc getVcc(array $options = [])
 * @method GetVpd getVpd(array $options = [])
 * @method InitializeVcc initializeVcc(array $options = [])
 * @method ListSubnets listSubnets(array $options = [])
 * @method ListVccs listVccs(array $options = [])
 * @method ListVpds listVpds(array $options = [])
 * @method UpdateSubnet updateSubnet(array $options = [])
 * @method UpdateVcc updateVcc(array $options = [])
 * @method UpdateVpd updateVpd(array $options = [])
 */
class EfloApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eflo';

    /** @var string */
    public $version = '2022-05-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eflo';
}

/**
 * @method string getType()
 * @method string getVpdId()
 * @method string getName()
 * @method string getZoneId()
 * @method string getCidr()
 */
class CreateSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

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
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCidr($value)
    {
        $this->data['Cidr'] = $value;
        $this->options['form_params']['Cidr'] = $value;

        return $this;
    }
}

/**
 * @method string getBgpCidr()
 * @method string getCenId()
 * @method string getDescription()
 * @method string getAccessCouldService()
 * @method string getVccId()
 * @method string getVSwitchId()
 * @method string getVpdId()
 * @method string getVpcId()
 */
class CreateVcc extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBgpCidr($value)
    {
        $this->data['BgpCidr'] = $value;
        $this->options['form_params']['BgpCidr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCenId($value)
    {
        $this->data['CenId'] = $value;
        $this->options['form_params']['CenId'] = $value;

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
    public function withAccessCouldService($value)
    {
        $this->data['AccessCouldService'] = $value;
        $this->options['form_params']['AccessCouldService'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getCidr()
 * @method array getSubnets()
 */
class CreateVpd extends Rpc
{

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
    public function withCidr($value)
    {
        $this->data['Cidr'] = $value;
        $this->options['form_params']['Cidr'] = $value;

        return $this;
    }

    /**
     * @param array $subnets
     *
     * @return $this
     */
	public function withSubnets(array $subnets)
	{
	    $this->data['Subnets'] = $subnets;
		foreach ($subnets as $depth1 => $depth1Value) {
			if(isset($depth1Value['RegionId'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.RegionId'] = $depth1Value['RegionId'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
			if(isset($depth1Value['Cidr'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.Cidr'] = $depth1Value['Cidr'];
			}
			if(isset($depth1Value['Type'])){
				$this->options['form_params']['Subnets.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSubnetId()
 * @method string getVpdId()
 * @method string getZoneId()
 */
class DeleteSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdId()
 */
class DeleteVpd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}

/**
 * @method string getSubnetId()
 */
class GetSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }
}

/**
 * @method string getVccId()
 */
class GetVcc extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }
}

/**
 * @method string getVpdId()
 */
class GetVpd extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }
}

class InitializeVcc extends Rpc
{
}

/**
 * @method string getType()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getSubnetId()
 * @method string getVpdId()
 * @method string getEnablePage()
 * @method string getName()
 * @method string getZoneId()
 * @method string getStatus()
 */
class ListSubnets extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

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
 * @method string getCenId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getVccId()
 * @method string getBandwidth()
 * @method string getExStatus()
 * @method string getVpdId()
 * @method string getVpcId()
 * @method string getEnablePage()
 * @method string getStatus()
 */
class ListVccs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCenId($value)
    {
        $this->data['CenId'] = $value;
        $this->options['form_params']['CenId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['form_params']['Bandwidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExStatus($value)
    {
        $this->data['ExStatus'] = $value;
        $this->options['form_params']['ExStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getPageNumber()
 * @method string getWithDependence()
 * @method string getWithoutVcc()
 * @method string getPageSize()
 * @method string getForSelect()
 * @method string getFilterErId()
 * @method string getVpdId()
 * @method string getEnablePage()
 * @method string getName()
 * @method string getStatus()
 */
class ListVpds extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithDependence($value)
    {
        $this->data['WithDependence'] = $value;
        $this->options['form_params']['WithDependence'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWithoutVcc($value)
    {
        $this->data['WithoutVcc'] = $value;
        $this->options['form_params']['WithoutVcc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForSelect($value)
    {
        $this->data['ForSelect'] = $value;
        $this->options['form_params']['ForSelect'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterErId($value)
    {
        $this->data['FilterErId'] = $value;
        $this->options['form_params']['FilterErId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnablePage($value)
    {
        $this->data['EnablePage'] = $value;
        $this->options['form_params']['EnablePage'] = $value;

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
 * @method string getSubnetId()
 * @method string getDescription()
 * @method string getVpdId()
 * @method string getName()
 * @method string getZoneId()
 */
class UpdateSubnet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubnetId($value)
    {
        $this->data['SubnetId'] = $value;
        $this->options['form_params']['SubnetId'] = $value;

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
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

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
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['ZoneId'] = $value;

        return $this;
    }
}

/**
 * @method string getBandwidth()
 * @method string getOrderId()
 * @method string getVccName()
 * @method string getVccId()
 */
class UpdateVcc extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidth($value)
    {
        $this->data['Bandwidth'] = $value;
        $this->options['form_params']['Bandwidth'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderId($value)
    {
        $this->data['OrderId'] = $value;
        $this->options['form_params']['OrderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccName($value)
    {
        $this->data['VccName'] = $value;
        $this->options['form_params']['VccName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVccId($value)
    {
        $this->data['VccId'] = $value;
        $this->options['form_params']['VccId'] = $value;

        return $this;
    }
}

/**
 * @method string getDescription()
 * @method string getVpdId()
 * @method string getName()
 */
class UpdateVpd extends Rpc
{

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
    public function withVpdId($value)
    {
        $this->data['VpdId'] = $value;
        $this->options['form_params']['VpdId'] = $value;

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
