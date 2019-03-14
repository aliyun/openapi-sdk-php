<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api CPFSModifyFileSystem
 *
 * @method string getFsId()
 * @method string getLdapUrl()
 * @method string getFsDesc()
 */
class CPFSModifyFileSystem extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

    /**
     * @param string $fsId
     *
     * @return $this
     */
    public function withFsId($fsId)
    {
        $this->data['FsId'] = $fsId;
        $this->options['query']['FsId'] = $fsId;

        return $this;
    }

    /**
     * @param string $ldapUrl
     *
     * @return $this
     */
    public function withLdapUrl($ldapUrl)
    {
        $this->data['LdapUrl'] = $ldapUrl;
        $this->options['query']['LdapUrl'] = $ldapUrl;

        return $this;
    }

    /**
     * @param string $fsDesc
     *
     * @return $this
     */
    public function withFsDesc($fsDesc)
    {
        $this->data['FsDesc'] = $fsDesc;
        $this->options['query']['FsDesc'] = $fsDesc;

        return $this;
    }
}
