<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/trigger.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a HTTP endpoint destination.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.HttpEndpoint</code>
 */
class HttpEndpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI of the HTTP enpdoint.
     * The value must be a RFC2396 URI string.
     * Examples: `http://10.10.10.8:80/route`,
     * `http://svc.us-central1.p.local:8080/`.
     * Only HTTP and HTTPS protocols are supported. The host can be either a
     * static IP addressable from the VPC specified by the network config, or
     * an internal DNS hostname of the service resolvable via Cloud DNS.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The URI of the HTTP enpdoint.
     *           The value must be a RFC2396 URI string.
     *           Examples: `http://10.10.10.8:80/route`,
     *           `http://svc.us-central1.p.local:8080/`.
     *           Only HTTP and HTTPS protocols are supported. The host can be either a
     *           static IP addressable from the VPC specified by the network config, or
     *           an internal DNS hostname of the service resolvable via Cloud DNS.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Trigger::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI of the HTTP enpdoint.
     * The value must be a RFC2396 URI string.
     * Examples: `http://10.10.10.8:80/route`,
     * `http://svc.us-central1.p.local:8080/`.
     * Only HTTP and HTTPS protocols are supported. The host can be either a
     * static IP addressable from the VPC specified by the network config, or
     * an internal DNS hostname of the service resolvable via Cloud DNS.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The URI of the HTTP enpdoint.
     * The value must be a RFC2396 URI string.
     * Examples: `http://10.10.10.8:80/route`,
     * `http://svc.us-central1.p.local:8080/`.
     * Only HTTP and HTTPS protocols are supported. The host can be either a
     * static IP addressable from the VPC specified by the network config, or
     * an internal DNS hostname of the service resolvable via Cloud DNS.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}
