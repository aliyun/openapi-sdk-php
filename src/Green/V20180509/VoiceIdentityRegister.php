<?php

namespace AlibabaCloud\Green\V20180509;

use AlibabaCloud\Roa;

/**
 * @method string getClientInfo()
 */
class VoiceIdentityRegister extends Roa
{
    public $product = 'Green';

    public $version = '2018-05-09';

    public $pathPattern = '/green/voice/auth/register';

    public $method = 'POST';

    public $serviceCode = 'green';

    /**
     * @param string $clientInfo
     *
     * @return $this
     */
    public function withClientInfo($clientInfo)
    {
        $this->data['ClientInfo'] = $clientInfo;
        $this->options['query']['ClientInfo'] = $clientInfo;

        return $this;
    }
}
