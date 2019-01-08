<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUserRamPolicy
 *
 * @method string getCompanyId()
 * @method string getUserType()
 * @method string getStoreId()
 */
class DescribeUserRamPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeUserRamPolicy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $companyId
     *
     * @return $this
     */
    public function withCompanyId($companyId)
    {
        $this->data['CompanyId'] = $companyId;
        $this->options['query']['CompanyId'] = $companyId;

        return $this;
    }

    /**
     * @param string $userType
     *
     * @return $this
     */
    public function withUserType($userType)
    {
        $this->data['UserType'] = $userType;
        $this->options['query']['UserType'] = $userType;

        return $this;
    }

    /**
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

        return $this;
    }
}
