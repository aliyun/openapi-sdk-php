<?php

namespace AlibabaCloud\Imarketing\V20220704;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateDevice createDevice(array $options = [])
 * @method GetBrandPage getBrandPage(array $options = [])
 * @method GetMainPartPage getMainPartPage(array $options = [])
 * @method GetUserFinishedAd getUserFinishedAd(array $options = [])
 * @method ListAdvertising listAdvertising(array $options = [])
 * @method SendSms sendSms(array $options = [])
 */
class ImarketingApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'imarketing';

    /** @var string */
    public $version = '2022-07-04';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFirstScene()
 * @method string getExtraMap()
 * @method string getCity()
 * @method string getMediaId()
 * @method string getDeviceType()
 * @method string getLocationName()
 * @method string getProvince()
 * @method string getDistrict()
 * @method string getDeviceName()
 * @method string getDeviceModelNumber()
 * @method string getSecondScene()
 * @method string getFloor()
 * @method string getChannelId()
 * @method string getOuterCode()
 */
class CreateDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFirstScene($value)
    {
        $this->data['FirstScene'] = $value;
        $this->options['form_params']['FirstScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraMap($value)
    {
        $this->data['ExtraMap'] = $value;
        $this->options['form_params']['ExtraMap'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCity($value)
    {
        $this->data['City'] = $value;
        $this->options['form_params']['City'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaId($value)
    {
        $this->data['MediaId'] = $value;
        $this->options['form_params']['MediaId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocationName($value)
    {
        $this->data['LocationName'] = $value;
        $this->options['form_params']['LocationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProvince($value)
    {
        $this->data['Province'] = $value;
        $this->options['form_params']['Province'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDistrict($value)
    {
        $this->data['District'] = $value;
        $this->options['form_params']['District'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceModelNumber($value)
    {
        $this->data['DeviceModelNumber'] = $value;
        $this->options['form_params']['DeviceModelNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecondScene($value)
    {
        $this->data['SecondScene'] = $value;
        $this->options['form_params']['SecondScene'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFloor($value)
    {
        $this->data['Floor'] = $value;
        $this->options['form_params']['Floor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelId($value)
    {
        $this->data['ChannelId'] = $value;
        $this->options['form_params']['ChannelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterCode($value)
    {
        $this->data['OuterCode'] = $value;
        $this->options['form_params']['OuterCode'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountNo()
 * @method $this withAccountNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getMainId()
 * @method $this withMainId($value)
 * @method string getMainName()
 * @method $this withMainName($value)
 */
class GetBrandPage extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getMainId()
 * @method $this withMainId($value)
 * @method string getMainName()
 * @method $this withMainName($value)
 */
class GetMainPartPage extends Rpc
{
}

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getAdid()
 * @method $this withAdid($value)
 * @method string getTagid()
 * @method $this withTagid($value)
 * @method string getClicklink()
 * @method $this withClicklink($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getMediaid()
 * @method $this withMediaid($value)
 */
class GetUserFinishedAd extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getExt()
 * @method $this withExt($value)
 * @method string getTest()
 * @method $this withTest($value)
 * @method string getImp()
 * @method $this withImp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getDevice()
 * @method $this withDevice($value)
 * @method string getDealtype()
 * @method $this withDealtype($value)
 */
class ListAdvertising extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 */
class SendSms extends Rpc
{
}
