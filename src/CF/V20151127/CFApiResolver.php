<?php

namespace AlibabaCloud\CF\V20151127;

use AlibabaCloud\ApiResolverTrait;

/**
 * Resolve Api based on the method name.
 *
 * @method MonthlyPaymentCheckOrder monthlyPaymentCheckOrder(array $options = [])
 * @method CFMonthlyPayment cFMonthlyPayment(array $options = [])
 * @method GetRating getRating(array $options = [])
 * @method CfAccountFeedback cfAccountFeedback(array $options = [])
 * @method CfAccountQuery cfAccountQuery(array $options = [])
 * @method QuerySimple querySimple(array $options = [])
 * @method Authenticate authenticate(array $options = [])
 */
class CFApiResolver
{
    use ApiResolverTrait;
}
