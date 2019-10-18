<?php

namespace AlibabaCloud\DnsKnocker\V20190910;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchCreateRr batchCreateRr(array $options = [])
 * @method BatchDeleteRr batchDeleteRr(array $options = [])
 * @method ChangeResourceRecord changeResourceRecord(array $options = [])
 * @method ChangeResourceRecords changeResourceRecords(array $options = [])
 * @method CreateResourceRecord createResourceRecord(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DeleteResourceRecord deleteResourceRecord(array $options = [])
 * @method DeleteResourceRecords deleteResourceRecords(array $options = [])
 * @method GetDomain getDomain(array $options = [])
 * @method GetResourceRecords getResourceRecords(array $options = [])
 */
class DnsKnockerApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'DnsKnocker';

    /** @var string */
    public $version = '2019-09-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dns_knocker';
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getResourceRecords()
 * @method string getLine()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 */
class BatchCreateRr extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceRecords($value)
    {
        $this->data['ResourceRecords'] = $value;
        $this->options['form_params']['ResourceRecords'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLine($value)
    {
        $this->data['Line'] = $value;
        $this->options['form_params']['Line'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getResourceRecords()
 * @method string getLine()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 */
class BatchDeleteRr extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceRecords($value)
    {
        $this->data['ResourceRecords'] = $value;
        $this->options['form_params']['ResourceRecords'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLine($value)
    {
        $this->data['Line'] = $value;
        $this->options['form_params']['Line'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getNewRRInfo()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 * @method string getOldRRInfo()
 */
class ChangeResourceRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewRRInfo($value)
    {
        $this->data['NewRRInfo'] = $value;
        $this->options['form_params']['NewRRInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOldRRInfo($value)
    {
        $this->data['OldRRInfo'] = $value;
        $this->options['form_params']['OldRRInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getTypes()
 * @method string getResourceRecords()
 * @method string getLine()
 * @method string getDomainName()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 */
class ChangeResourceRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTypes($value)
    {
        $this->data['Types'] = $value;
        $this->options['form_params']['Types'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceRecords($value)
    {
        $this->data['ResourceRecords'] = $value;
        $this->options['form_params']['ResourceRecords'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLine($value)
    {
        $this->data['Line'] = $value;
        $this->options['form_params']['Line'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getRrTTL()
 * @method string getAccessSecret()
 * @method string getRrLine()
 * @method string getDomainName()
 * @method string getRrValue()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 * @method string getRrType()
 */
class CreateResourceRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRrTTL($value)
    {
        $this->data['RrTTL'] = $value;
        $this->options['form_params']['RrTTL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRrLine($value)
    {
        $this->data['RrLine'] = $value;
        $this->options['form_params']['RrLine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRrValue($value)
    {
        $this->data['RrValue'] = $value;
        $this->options['form_params']['RrValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRrType($value)
    {
        $this->data['RrType'] = $value;
        $this->options['form_params']['RrType'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getLine()
 * @method string getDomainName()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 */
class DeleteDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLine($value)
    {
        $this->data['Line'] = $value;
        $this->options['form_params']['Line'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getRRTTL()
 * @method string getAccessSecret()
 * @method string getRRLine()
 * @method string getDomainName()
 * @method string getRRValue()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 * @method string getRRType()
 */
class DeleteResourceRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRRTTL($value)
    {
        $this->data['RRTTL'] = $value;
        $this->options['form_params']['RRTTL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRRLine($value)
    {
        $this->data['RRLine'] = $value;
        $this->options['form_params']['RRLine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRRValue($value)
    {
        $this->data['RRValue'] = $value;
        $this->options['form_params']['RRValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRRType($value)
    {
        $this->data['RRType'] = $value;
        $this->options['form_params']['RRType'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getTypeList()
 * @method string getLine()
 * @method string getDomainName()
 * @method string getZoneName()
 * @method string getTransactionId()
 * @method string getGroup()
 */
class DeleteResourceRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTypeList($value)
    {
        $this->data['TypeList'] = $value;
        $this->options['form_params']['TypeList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLine($value)
    {
        $this->data['Line'] = $value;
        $this->options['form_params']['Line'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneName($value)
    {
        $this->data['ZoneName'] = $value;
        $this->options['form_params']['ZoneName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getDomainName()
 * @method string getDomainLine()
 * @method string getGroup()
 */
class GetDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainLine($value)
    {
        $this->data['DomainLine'] = $value;
        $this->options['form_params']['DomainLine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessID()
 * @method string getAccessSecret()
 * @method string getZone()
 * @method string getDomainName()
 * @method string getTransactionId()
 * @method string getDomainLine()
 * @method string getGroup()
 */
class GetResourceRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessID($value)
    {
        $this->data['AccessID'] = $value;
        $this->options['form_params']['AccessID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessSecret($value)
    {
        $this->data['AccessSecret'] = $value;
        $this->options['form_params']['AccessSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZone($value)
    {
        $this->data['Zone'] = $value;
        $this->options['form_params']['Zone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransactionId($value)
    {
        $this->data['TransactionId'] = $value;
        $this->options['form_params']['TransactionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainLine($value)
    {
        $this->data['DomainLine'] = $value;
        $this->options['form_params']['DomainLine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }
}
