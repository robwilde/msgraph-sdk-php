<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttendeeGriffin File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;
/**
* AttendeeGriffin class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AttendeeGriffin extends Entity
{

    /**
    * Gets the type
    *
    * @return AttendeeType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "Microsoft\Graph\Model\AttendeeType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AttendeeType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    *
    * @param AttendeeType $val The value to assign to the type
    *
    * @return AttendeeGriffin The AttendeeGriffin
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }

    /**
    * Gets the emailAddress
    *
    * @return EmailAddressGriffin The emailAddress
    */
    public function getEmailAddress()
    {
        if (array_key_exists("emailAddress", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddress"], "Microsoft\Graph\Model\EmailAddressGriffin")) {
                return $this->_propDict["emailAddress"];
            } else {
                $this->_propDict["emailAddress"] = new EmailAddressGriffin($this->_propDict["emailAddress"]);
                return $this->_propDict["emailAddress"];
            }
        }
        return null;
    }

    /**
    * Sets the emailAddress
    *
    * @param EmailAddressGriffin $val The value to assign to the emailAddress
    *
    * @return AttendeeGriffin The AttendeeGriffin
    */
    public function setEmailAddress($val)
    {
        $this->_propDict["emailAddress"] = $val;
         return $this;
    }
}