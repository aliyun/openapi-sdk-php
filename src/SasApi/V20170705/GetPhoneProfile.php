<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetPhoneProfile
 *
 * @method string getPhone()
 * @method string getSensType()
 * @method string getDataVersion()
 * @method string getBusinessType()
 */
class GetPhoneProfile extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Sas-api';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetPhoneProfile';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPhone() instead.
     *
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        return $this->withPhone($phone);
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function withPhone($phone)
    {
        $this->data['Phone'] = $phone;
        $this->options['query']['Phone'] = $phone;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSensType() instead.
     *
     * @param string $sensType
     *
     * @return $this
     */
    public function setSensType($sensType)
    {
        return $this->withSensType($sensType);
    }

    /**
     * @param string $sensType
     *
     * @return $this
     */
    public function withSensType($sensType)
    {
        $this->data['SensType'] = $sensType;
        $this->options['query']['SensType'] = $sensType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDataVersion() instead.
     *
     * @param string $dataVersion
     *
     * @return $this
     */
    public function setDataVersion($dataVersion)
    {
        return $this->withDataVersion($dataVersion);
    }

    /**
     * @param string $dataVersion
     *
     * @return $this
     */
    public function withDataVersion($dataVersion)
    {
        $this->data['DataVersion'] = $dataVersion;
        $this->options['query']['DataVersion'] = $dataVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBusinessType() instead.
     *
     * @param string $businessType
     *
     * @return $this
     */
    public function setBusinessType($businessType)
    {
        return $this->withBusinessType($businessType);
    }

    /**
     * @param string $businessType
     *
     * @return $this
     */
    public function withBusinessType($businessType)
    {
        $this->data['BusinessType'] = $businessType;
        $this->options['query']['BusinessType'] = $businessType;

        return $this;
    }
}
