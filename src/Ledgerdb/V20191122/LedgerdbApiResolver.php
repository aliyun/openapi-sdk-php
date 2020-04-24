<?php

namespace AlibabaCloud\Ledgerdb\V20191122;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptMember acceptMember(array $options = [])
 * @method CreateVpcEndpoint createVpcEndpoint(array $options = [])
 * @method DeleteLedger deleteLedger(array $options = [])
 * @method DeleteMember deleteMember(array $options = [])
 * @method DeleteVpcEndpoint deleteVpcEndpoint(array $options = [])
 * @method DescribeLedger describeLedger(array $options = [])
 * @method DescribeLedgers describeLedgers(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DisableMember disableMember(array $options = [])
 * @method EnableMember enableMember(array $options = [])
 * @method GetJournal getJournal(array $options = [])
 * @method GetMember getMember(array $options = [])
 * @method InviteMembers inviteMembers(array $options = [])
 * @method ListJournals listJournals(array $options = [])
 * @method ListMembers listMembers(array $options = [])
 * @method ListTimeAnchors listTimeAnchors(array $options = [])
 * @method ListVpcEndpoints listVpcEndpoints(array $options = [])
 * @method ModifyLedgerAttribute modifyLedgerAttribute(array $options = [])
 * @method ModifyMemberACLs modifyMemberACLs(array $options = [])
 * @method ModifyMemberKey modifyMemberKey(array $options = [])
 */
class LedgerdbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ledgerdb';

    /** @var string */
    public $version = '2019-11-22';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ledgerdb';
}

/**
 * @method string getPublicKey()
 * @method string getKeyType()
 * @method string getLedgerId()
 */
class AcceptMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicKey($value)
    {
        $this->data['PublicKey'] = $value;
        $this->options['form_params']['PublicKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyType($value)
    {
        $this->data['KeyType'] = $value;
        $this->options['form_params']['KeyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getLedgerId()
 * @method string getVSwitchId()
 * @method string getVpcId()
 */
class CreateVpcEndpoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['form_params']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 */
class DeleteLedger extends Rpc
{
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DeleteMember extends Rpc
{
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVpcEndpointId()
 * @method $this withVpcEndpointId($value)
 */
class DeleteVpcEndpoint extends Rpc
{
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 */
class DescribeLedger extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeLedgers extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getLedgerId()
 * @method string getMemberId()
 */
class DisableMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }
}

/**
 * @method string getLedgerId()
 * @method string getMemberId()
 */
class EnableMember extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }
}

/**
 * @method string getJournalId()
 * @method $this withJournalId($value)
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 */
class GetJournal extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class GetMember extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAliUids()
 * @method string getLedgerId()
 */
class InviteMembers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliUids($value)
    {
        $this->data['AliUids'] = $value;
        $this->options['form_params']['AliUids'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getClue()
 * @method $this withClue($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class ListJournals extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListMembers extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListTimeAnchors extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLedgerId()
 * @method $this withLedgerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVpcEndpoints extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLedgerId()
 * @method string getLedgerName()
 * @method string getLedgerDescription()
 */
class ModifyLedgerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerName($value)
    {
        $this->data['LedgerName'] = $value;
        $this->options['form_params']['LedgerName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerDescription($value)
    {
        $this->data['LedgerDescription'] = $value;
        $this->options['form_params']['LedgerDescription'] = $value;

        return $this;
    }
}

/**
 * @method string getRole()
 * @method string getLedgerId()
 * @method string getMemberId()
 */
class ModifyMemberACLs extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRole($value)
    {
        $this->data['Role'] = $value;
        $this->options['form_params']['Role'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }
}

/**
 * @method string getPublicKey()
 * @method string getKeyType()
 * @method string getLedgerId()
 * @method string getMemberId()
 */
class ModifyMemberKey extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPublicKey($value)
    {
        $this->data['PublicKey'] = $value;
        $this->options['form_params']['PublicKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyType($value)
    {
        $this->data['KeyType'] = $value;
        $this->options['form_params']['KeyType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLedgerId($value)
    {
        $this->data['LedgerId'] = $value;
        $this->options['form_params']['LedgerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemberId($value)
    {
        $this->data['MemberId'] = $value;
        $this->options['form_params']['MemberId'] = $value;

        return $this;
    }
}
