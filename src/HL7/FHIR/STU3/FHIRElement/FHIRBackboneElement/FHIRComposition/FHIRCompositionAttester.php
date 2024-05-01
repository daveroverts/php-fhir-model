<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: May 1st, 2024 07:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2024 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRDateTimePrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\STU3\FHIRElement\FHIRCompositionAttestationMode;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * A set of healthcare-related information that is assembled together into a single
 * logical document that provides a single coherent statement of meaning,
 * establishes its own context and that has clinical attestation with regard to who
 * is making the statement. While a Composition defines the structure, it does not
 * actually contain the content: rather the full content of a document is contained
 * in a Bundle, of which the Composition is the first resource contained.
 *
 * Class FHIRCompositionAttester
 * @package \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition
 */
class FHIRCompositionAttester extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER;

    const FIELD_MODE = 'mode';
    const FIELD_MODE_EXT = '_mode';
    const FIELD_TIME = 'time';
    const FIELD_TIME_EXT = '_time';
    const FIELD_PARTY = 'party';

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCompositionAttestationMode[]
     */
    protected null|array $mode = [];
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the composition was attested by the party.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $time = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who attested the composition in the specified way.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $party = null;

    /**
     * Validation map for fields in type Composition.Attester
     * @var array
     */
    private const _VALIDATION_RULES = [
        self::FIELD_MODE => [
            PHPFHIRConstants::VALIDATE_MIN_OCCURS => 1,
        ],
    ];

    /**
     * FHIRCompositionAttester Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_MODE]) || isset($data[self::FIELD_MODE_EXT])) {
            $value = $data[self::FIELD_MODE] ?? null;
            $ext = (isset($data[self::FIELD_MODE_EXT]) && is_array($data[self::FIELD_MODE_EXT])) ? $data[self::FIELD_MODE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCompositionAttestationMode) {
                    $this->addMode($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCompositionAttestationMode) {
                            $this->addMode($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addMode(new FHIRCompositionAttestationMode(array_merge($v, $iext)));
                            } else {
                                $this->addMode(new FHIRCompositionAttestationMode([FHIRCompositionAttestationMode::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addMode(new FHIRCompositionAttestationMode(array_merge($ext, $value)));
                } else {
                    $this->addMode(new FHIRCompositionAttestationMode([FHIRCompositionAttestationMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addMode(new FHIRCompositionAttestationMode($iext));
                }
            }
        }
        if (isset($data[self::FIELD_TIME]) || isset($data[self::FIELD_TIME_EXT])) {
            $value = $data[self::FIELD_TIME] ?? null;
            $ext = (isset($data[self::FIELD_TIME_EXT]) && is_array($data[self::FIELD_TIME_EXT])) ? $data[self::FIELD_TIME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setTime($value);
                } else if (is_array($value)) {
                    $this->setTime(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setTime(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTime(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_PARTY])) {
            if ($data[self::FIELD_PARTY] instanceof FHIRReference) {
                $this->setParty($data[self::FIELD_PARTY]);
            } else {
                $this->setParty(new FHIRReference($data[self::FIELD_PARTY]));
            }
        }
    }


    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCompositionAttestationMode[]
     */
    public function getMode(): null|array
    {
        return $this->mode;
    }

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCompositionAttestationMode $mode
     * @return static
     */
    public function addMode(null|FHIRCompositionAttestationMode $mode = null): self
    {
        if (null === $mode) {
            $mode = new FHIRCompositionAttestationMode();
        }
        $this->_trackValueAdded();
        $this->mode[] = $mode;
        return $this;
    }

    /**
     * The way in which a person authenticated a composition.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of attestation the authenticator offers.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCompositionAttestationMode[] $mode
     * @return static
     */
    public function setMode(array $mode = []): self
    {
        if ([] !== $this->mode) {
            $this->_trackValuesRemoved(count($this->mode));
            $this->mode = [];
        }
        if ([] === $mode) {
            return $this;
        }
        foreach($mode as $v) {
            if ($v instanceof FHIRCompositionAttestationMode) {
                $this->addMode($v);
            } else {
                $this->addMode(new FHIRCompositionAttestationMode($v));
            }
        }
        return $this;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the composition was attested by the party.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getTime(): null|FHIRDateTime
    {
        return $this->time;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * When the composition was attested by the party.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $time
     * @return static
     */
    public function setTime(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $time = null): self
    {
        if (null !== $time && !($time instanceof FHIRDateTime)) {
            $time = new FHIRDateTime($time);
        }
        $this->_trackValueSet($this->time, $time);
        $this->time = $time;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who attested the composition in the specified way.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getParty(): null|FHIRReference
    {
        return $this->party;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Who attested the composition in the specified way.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $party
     * @return static
     */
    public function setParty(null|FHIRReference $party = null): self
    {
        if (null === $party) {
            $party = new FHIRReference();
        }
        $this->_trackValueSet($this->party, $party);
        $this->party = $party;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::_VALIDATION_RULES;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if ([] !== ($vs = $this->getMode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_MODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getTime())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TIME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getParty())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PARTY] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_MODE])) {
            $v = $this->getMode();
            foreach($validationRules[self::FIELD_MODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER, self::FIELD_MODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODE])) {
                        $errs[self::FIELD_MODE] = [];
                    }
                    $errs[self::FIELD_MODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TIME])) {
            $v = $this->getTime();
            foreach($validationRules[self::FIELD_TIME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER, self::FIELD_TIME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TIME])) {
                        $errs[self::FIELD_TIME] = [];
                    }
                    $errs[self::FIELD_TIME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PARTY])) {
            $v = $this->getParty();
            foreach($validationRules[self::FIELD_PARTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_COMPOSITION_DOT_ATTESTER, self::FIELD_PARTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PARTY])) {
                        $errs[self::FIELD_PARTY] = [];
                    }
                    $errs[self::FIELD_PARTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRComposition\FHIRCompositionAttester
     */
    public static function xmlUnserialize(null|string|\DOMElement $element, null|PHPFHIRXmlSerializableInterface $type = null, null|int|PHPFHIRXmlSerializableConfigInterface $config = null): null|self
    {
        if (null === $element) {
            return null;
        }
        if (is_int($config)) {
            $libxmlOpts = $config;
            $config = new PHPFHIRConfig();
        } else if (null === $config) {
            $libxmlOpts = PHPFHIRXmlSerializableConfigInterface::DEFAULT_LIBXML_OPTS;
            $config = new PHPFHIRConfig();
        } else {
            $libxmlOpts = $config->getLibxmlOpts();
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = $config->newDOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf(
                    '%s::xmlUnserialize - String provided is not parseable as XML: %s',
                    ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                    implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))
                ));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (null === $type) {
            $type = new static(null);
        } else if (!($type instanceof FHIRCompositionAttester)) {
            throw new \RuntimeException(sprintf(
                '%s::xmlUnserialize - $type must be instance of \\%s or null, %s seen.',
                ltrim(substr(__CLASS__, (int)strrpos(__CLASS__, '\\')), '\\'),
                static::class,
                get_class($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && '' !== ($ens = (string)$element->namespaceURI)) {
            $type->_setFHIRXMLNamespace($ens);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_MODE === $n->nodeName) {
                $type->addMode(FHIRCompositionAttestationMode::xmlUnserialize($n));
            } elseif (self::FIELD_TIME === $n->nodeName) {
                $type->setTime(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_PARTY === $n->nodeName) {
                $type->setParty(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TIME);
        if (null !== $n) {
            $pt = $type->getTime();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTime($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return \DOMElement
     * @throws \DOMException
     */
    public function xmlSerialize(\DOMElement $element = null, null|int|PHPFHIRXmlSerializableConfigInterface $config = null): \DOMElement
    {
        if (is_int($config)) {
            $libxmlOpts = $config;
            $config = new PHPFHIRConfig();
        } else if (null === $config) {
            $libxmlOpts = PHPFHIRXmlSerializableConfigInterface::DEFAULT_LIBXML_OPTS;
            $config = new PHPFHIRConfig();
        } else {
            $libxmlOpts = $config->getLibxmlOpts();
        }
        if (null === $element) {
            $dom = $config->newDOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CompositionAttester'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getMode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_MODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getTime())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TIME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getParty())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PARTY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getMode())) {
            $vals = [];
            $exts = [];
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $val = $v->getValue();
                $ext = $v->jsonSerialize();
                unset($ext->{FHIRCompositionAttestationMode::FIELD_VALUE});
                if (null !== $val) {
                    $vals[] = $val;
                }
                if ([] !== $ext) {
                    $exts[] = $ext;
                }
            }
            if ([] !== $vals) {
                $out->{self::FIELD_MODE} = $vals;
            }
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MODE_EXT} = $exts;
            }
        }
        if (null !== ($v = $this->getTime())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TIME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TIME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getParty())) {
            $out->{self::FIELD_PARTY} = $v;
        }

        return $out;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}