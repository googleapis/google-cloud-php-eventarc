<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the UpdateGoogleChannelConfig method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.UpdateGoogleChannelConfigRequest</code>
 */
class UpdateGoogleChannelConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The config to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.GoogleChannelConfig google_channel_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $google_channel_config = null;
    /**
     * The fields to be updated; only fields explicitly provided are updated.
     * If no field mask is provided, all provided fields in the request are
     * updated. To update all fields, provide a field mask of "*".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Eventarc\V1\GoogleChannelConfig $googleChannelConfig Required. The config to be updated.
     * @param \Google\Protobuf\FieldMask                    $updateMask          The fields to be updated; only fields explicitly provided are updated.
     *                                                                           If no field mask is provided, all provided fields in the request are
     *                                                                           updated. To update all fields, provide a field mask of "*".
     *
     * @return \Google\Cloud\Eventarc\V1\UpdateGoogleChannelConfigRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Eventarc\V1\GoogleChannelConfig $googleChannelConfig, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setGoogleChannelConfig($googleChannelConfig)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Eventarc\V1\GoogleChannelConfig $google_channel_config
     *           Required. The config to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The fields to be updated; only fields explicitly provided are updated.
     *           If no field mask is provided, all provided fields in the request are
     *           updated. To update all fields, provide a field mask of "*".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The config to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.GoogleChannelConfig google_channel_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Eventarc\V1\GoogleChannelConfig|null
     */
    public function getGoogleChannelConfig()
    {
        return $this->google_channel_config;
    }

    public function hasGoogleChannelConfig()
    {
        return isset($this->google_channel_config);
    }

    public function clearGoogleChannelConfig()
    {
        unset($this->google_channel_config);
    }

    /**
     * Required. The config to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.GoogleChannelConfig google_channel_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Eventarc\V1\GoogleChannelConfig $var
     * @return $this
     */
    public function setGoogleChannelConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Eventarc\V1\GoogleChannelConfig::class);
        $this->google_channel_config = $var;

        return $this;
    }

    /**
     * The fields to be updated; only fields explicitly provided are updated.
     * If no field mask is provided, all provided fields in the request are
     * updated. To update all fields, provide a field mask of "*".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The fields to be updated; only fields explicitly provided are updated.
     * If no field mask is provided, all provided fields in the request are
     * updated. To update all fields, provide a field mask of "*".
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

