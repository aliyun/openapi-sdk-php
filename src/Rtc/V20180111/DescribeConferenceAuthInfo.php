<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeConferenceAuthInfo
 *
 * @method string getOwnerId()
 * @method string getConferenceId()
 * @method string getAppId()
 */
class DescribeConferenceAuthInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'DescribeConferenceAuthInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $conferenceId
     *
     * @return $this
     */
    public function withConferenceId($conferenceId)
    {
        $this->data['ConferenceId'] = $conferenceId;
        $this->options['query']['ConferenceId'] = $conferenceId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }
}
