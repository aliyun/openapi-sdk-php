<?php

namespace AlibabaCloud\AddressPurification\V20191118;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ClassifyPOI classifyPOI(array $options = [])
 * @method CompleteAddress completeAddress(array $options = [])
 * @method CorrectAddress correctAddress(array $options = [])
 * @method ExtractAddress extractAddress(array $options = [])
 * @method ExtractExpress extractExpress(array $options = [])
 * @method ExtractName extractName(array $options = [])
 * @method ExtractPhone extractPhone(array $options = [])
 * @method GetAddressBlockMapping getAddressBlockMapping(array $options = [])
 * @method GetAddressDivisionCode getAddressDivisionCode(array $options = [])
 * @method GetAddressEvaluate getAddressEvaluate(array $options = [])
 * @method GetAddressGeocode getAddressGeocode(array $options = [])
 * @method GetAddressSearch getAddressSearch(array $options = [])
 * @method GetAddressSimilarity getAddressSimilarity(array $options = [])
 * @method GetInputSearch getInputSearch(array $options = [])
 * @method GetZipcode getZipcode(array $options = [])
 * @method PredictPOI predictPOI(array $options = [])
 * @method StructureAddress structureAddress(array $options = [])
 * @method TransferCoord transferCoord(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 */
class AddressPurificationApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'address-purification';

    /** @var string */
    public $version = '2019-11-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'addrp';
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class ClassifyPOI extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class CompleteAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class CorrectAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class ExtractAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class ExtractExpress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class ExtractName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class ExtractPhone extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetAddressBlockMapping extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetAddressDivisionCode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetAddressEvaluate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetAddressGeocode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetAddressSearch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetAddressSimilarity extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetInputSearch extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class GetZipcode extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class PredictPOI extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getServiceCode()
 * @method string getDefaultCity()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 * @method string getText()
 */
class StructureAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }
}

/**
 * @method string getDefaultProvince()
 * @method string getSrcCoord()
 * @method string getDefaultCity()
 * @method string getText()
 * @method string getServiceCode()
 * @method string getDefaultDistrict()
 * @method string getAppKey()
 */
class TransferCoord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultProvince($value)
    {
        $this->data['DefaultProvince'] = $value;
        $this->options['form_params']['DefaultProvince'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSrcCoord($value)
    {
        $this->data['SrcCoord'] = $value;
        $this->options['form_params']['SrcCoord'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultCity($value)
    {
        $this->data['DefaultCity'] = $value;
        $this->options['form_params']['DefaultCity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultDistrict($value)
    {
        $this->data['DefaultDistrict'] = $value;
        $this->options['form_params']['DefaultDistrict'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppKey($value)
    {
        $this->data['AppKey'] = $value;
        $this->options['form_params']['AppKey'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceCode()
 * @method string getParameters()
 */
class UpdateProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }
}
