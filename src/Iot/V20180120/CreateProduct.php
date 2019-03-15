<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getDataFormat()
 * @method $this withDataFormat($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getId2()
 * @method $this withId2($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getAliyunCommodityCode()
 * @method $this withAliyunCommodityCode($value)
 * @method string getJoinPermissionId()
 * @method $this withJoinPermissionId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class CreateProduct extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
