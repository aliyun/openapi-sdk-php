<?php

namespace AlibabaCloud\SasApi\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api GetPhoneProfile
 *
 * @method string getPhone()
 * @method string getSensType()
 * @method string getDataVersion()
 * @method string getBusinessType()
 */
class GetPhoneProfile extends Rpc
{
    public $product = 'Sas-api';

    public $version = '2017-07-05';

    public $method = 'POST';

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
