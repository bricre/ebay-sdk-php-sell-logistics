<?php

namespace Ebay\Sell\Logistics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A container that defines the elements of error and warning message.
 */
class Error extends AbstractModel
{
    /**
     * The category type for this error or warning. It takes a string that can have one
     * of three values: Application: Indicates an exception or error occurred in the
     * application code or at runtime. Examples include catching an exception in a
     * service's business logic, system failures, or request errors from a dependency.
     * Business: Used when your service or a dependent service refused to continue
     * processing on the resource because of a business rule violation such as
     * &quot;Seller does not ship item to Antarctica&quot; or &quot;Buyer ineligible to
     * purchase an alcoholic item&quot;. Business errors are not syntactical input
     * errors. Request: Used when there is anything wrong with the request, such as
     * authentication, syntactical errors, rate limiting or missing headers, bad HTTP
     * header values, and so on.
     *
     * @var string
     */
    public $category = null;

    /**
     * Name of the domain containing the service or application.
     *
     * @var string
     */
    public $domain = null;

    /**
     * A positive integer that uniquely identifies the specific error condition that
     * occurred. Your application can use error codes as identifiers in your customized
     * error-handling algorithms.
     *
     * @var int
     */
    public $errorId = null;

    /**
     * Identifies specific request elements associated with the error, if any.
     * inputRefId's response is format specific. For JSON, use JSONPath notation.
     *
     * @var string[]
     */
    public $inputRefIds = null;

    /**
     * An expanded version of message that should be around 100-200 characters long,
     * but is not required to be such.
     *
     * @var string
     */
    public $longMessage = null;

    /**
     * An end user and app-developer friendly device agnostic message. It explains what
     * the error or warning is, and how to fix it (in a general sense). Its value is at
     * most 50 characters long. If applicable, the value is localized in the end user's
     * requested locale.
     *
     * @var string
     */
    public $message = null;

    /**
     * Identifies specific response elements associated with the error, if any. Path
     * format is the same as inputRefId.
     *
     * @var string[]
     */
    public $outputRefIds = null;

    /**
     * This optional complex field type contains a list of one or more context-specific
     * ErrorParameter objects, with each item in the list entry being a parameter (or
     * input field name) that caused an error condition. Each ErrorParameter object
     * consists of two fields, a name and a value.
     *
     * @var \Ebay\Sell\Logistics\Model\ErrorParameter[]
     */
    public $parameters = null;

    /**
     * Name of the domain's subsystem or subdivision. For example, checkout is a
     * subdomain in the buying domain.
     *
     * @var string
     */
    public $subdomain = null;
}
