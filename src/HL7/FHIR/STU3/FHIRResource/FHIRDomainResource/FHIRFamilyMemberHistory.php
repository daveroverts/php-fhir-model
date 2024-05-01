<?php declare(strict_types=1);

namespace HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

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

use HL7\FHIR\STU3\FHIRBooleanPrimitive;
use HL7\FHIR\STU3\FHIRCodePrimitive;
use HL7\FHIR\STU3\FHIRDatePrimitive;
use HL7\FHIR\STU3\FHIRDateTimePrimitive;
use HL7\FHIR\STU3\FHIRElement\FHIRAdministrativeGender;
use HL7\FHIR\STU3\FHIRElement\FHIRAnnotation;
use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition;
use HL7\FHIR\STU3\FHIRElement\FHIRBoolean;
use HL7\FHIR\STU3\FHIRElement\FHIRCode;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRDate;
use HL7\FHIR\STU3\FHIRElement\FHIRDateTime;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRFamilyHistoryStatus;
use HL7\FHIR\STU3\FHIRElement\FHIRId;
use HL7\FHIR\STU3\FHIRElement\FHIRIdentifier;
use HL7\FHIR\STU3\FHIRElement\FHIRMeta;
use HL7\FHIR\STU3\FHIRElement\FHIRNarrative;
use HL7\FHIR\STU3\FHIRElement\FHIRPeriod;
use HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge;
use HL7\FHIR\STU3\FHIRElement\FHIRRange;
use HL7\FHIR\STU3\FHIRElement\FHIRReference;
use HL7\FHIR\STU3\FHIRElement\FHIRString;
use HL7\FHIR\STU3\FHIRElement\FHIRUri;
use HL7\FHIR\STU3\FHIRIdPrimitive;
use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;
use HL7\FHIR\STU3\FHIRStringPrimitive;
use HL7\FHIR\STU3\FHIRUriPrimitive;
use HL7\FHIR\STU3\PHPFHIRConfig;
use HL7\FHIR\STU3\PHPFHIRConstants;
use HL7\FHIR\STU3\PHPFHIRContainedTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeInterface;
use HL7\FHIR\STU3\PHPFHIRTypeMap;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\STU3\PHPFHIRXmlSerializableInterface;

/**
 * Significant health events and conditions for a person related to the patient
 * relevant in the context of care for the patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRFamilyMemberHistory
 * @package \HL7\FHIR\STU3\FHIRResource\FHIRDomainResource
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY;

    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_DEFINITION = 'definition';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_NOT_DONE = 'notDone';
    const FIELD_NOT_DONE_EXT = '_notDone';
    const FIELD_NOT_DONE_REASON = 'notDoneReason';
    const FIELD_PATIENT = 'patient';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_RELATIONSHIP = 'relationship';
    const FIELD_GENDER = 'gender';
    const FIELD_GENDER_EXT = '_gender';
    const FIELD_BORN_PERIOD = 'bornPeriod';
    const FIELD_BORN_DATE = 'bornDate';
    const FIELD_BORN_DATE_EXT = '_bornDate';
    const FIELD_BORN_STRING = 'bornString';
    const FIELD_BORN_STRING_EXT = '_bornString';
    const FIELD_AGE_AGE = 'ageAge';
    const FIELD_AGE_RANGE = 'ageRange';
    const FIELD_AGE_STRING = 'ageString';
    const FIELD_AGE_STRING_EXT = '_ageString';
    const FIELD_ESTIMATED_AGE = 'estimatedAge';
    const FIELD_ESTIMATED_AGE_EXT = '_estimatedAge';
    const FIELD_DECEASED_BOOLEAN = 'deceasedBoolean';
    const FIELD_DECEASED_BOOLEAN_EXT = '_deceasedBoolean';
    const FIELD_DECEASED_AGE = 'deceasedAge';
    const FIELD_DECEASED_RANGE = 'deceasedRange';
    const FIELD_DECEASED_DATE = 'deceasedDate';
    const FIELD_DECEASED_DATE_EXT = '_deceasedDate';
    const FIELD_DECEASED_STRING = 'deceasedString';
    const FIELD_DECEASED_STRING_EXT = '_deceasedString';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_NOTE = 'note';
    const FIELD_CONDITION = 'condition';

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $definition = [];
    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRFamilyHistoryStatus
     */
    protected null|FHIRFamilyHistoryStatus $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the taking of an individual family member's history did not
     * occur. The notDone element should not be used to document negated conditions,
     * such as a family member that did not have a condition.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $notDone = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is absent.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $notDoneReason = null;
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    protected null|FHIRReference $patient = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) when the family member history was taken.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    protected null|FHIRCodeableConcept $relationship = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRAdministrativeGender
     */
    protected null|FHIRAdministrativeGender $gender = null;
    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    protected null|FHIRPeriod $bornPeriod = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $bornDate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $bornString = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $ageAge = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $ageRange = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $ageString = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $estimatedAge = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $deceasedBoolean = null;
    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    protected null|FHIRAge $deceasedAge = null;
    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    protected null|FHIRRange $deceasedRange = null;
    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    protected null|FHIRDate $deceasedDate = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    protected null|FHIRString $deceasedString = null;
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member history occurred in coded or textual form.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $reasonCode = [];
    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    protected null|array $reasonReference = [];
    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    protected null|array $note = [];
    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @var null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    protected null|array $condition = [];

    /**
     * Validation map for fields in type FamilyMemberHistory
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRFamilyMemberHistory Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } elseif ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_DEFINITION])) {
            if (is_array($data[self::FIELD_DEFINITION])) {
                foreach($data[self::FIELD_DEFINITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDefinition($v);
                    } else {
                        $this->addDefinition(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_DEFINITION] instanceof FHIRReference) {
                $this->addDefinition($data[self::FIELD_DEFINITION]);
            } else {
                $this->addDefinition(new FHIRReference($data[self::FIELD_DEFINITION]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRFamilyHistoryStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRFamilyHistoryStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRFamilyHistoryStatus([FHIRFamilyHistoryStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRFamilyHistoryStatus($ext));
            }
        }
        if (isset($data[self::FIELD_NOT_DONE]) || isset($data[self::FIELD_NOT_DONE_EXT])) {
            $value = $data[self::FIELD_NOT_DONE] ?? null;
            $ext = (isset($data[self::FIELD_NOT_DONE_EXT]) && is_array($data[self::FIELD_NOT_DONE_EXT])) ? $data[self::FIELD_NOT_DONE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setNotDone($value);
                } else if (is_array($value)) {
                    $this->setNotDone(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setNotDone(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setNotDone(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_NOT_DONE_REASON])) {
            if ($data[self::FIELD_NOT_DONE_REASON] instanceof FHIRCodeableConcept) {
                $this->setNotDoneReason($data[self::FIELD_NOT_DONE_REASON]);
            } else {
                $this->setNotDoneReason(new FHIRCodeableConcept($data[self::FIELD_NOT_DONE_REASON]));
            }
        }
        if (isset($data[self::FIELD_PATIENT])) {
            if ($data[self::FIELD_PATIENT] instanceof FHIRReference) {
                $this->setPatient($data[self::FIELD_PATIENT]);
            } else {
                $this->setPatient(new FHIRReference($data[self::FIELD_PATIENT]));
            }
        }
        if (isset($data[self::FIELD_DATE]) || isset($data[self::FIELD_DATE_EXT])) {
            $value = $data[self::FIELD_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DATE_EXT]) && is_array($data[self::FIELD_DATE_EXT])) ? $data[self::FIELD_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setDate($value);
                } else if (is_array($value)) {
                    $this->setDate(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setDate(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDate(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_NAME]) || isset($data[self::FIELD_NAME_EXT])) {
            $value = $data[self::FIELD_NAME] ?? null;
            $ext = (isset($data[self::FIELD_NAME_EXT]) && is_array($data[self::FIELD_NAME_EXT])) ? $data[self::FIELD_NAME_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setName($value);
                } else if (is_array($value)) {
                    $this->setName(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setName(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setName(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_RELATIONSHIP])) {
            if ($data[self::FIELD_RELATIONSHIP] instanceof FHIRCodeableConcept) {
                $this->setRelationship($data[self::FIELD_RELATIONSHIP]);
            } else {
                $this->setRelationship(new FHIRCodeableConcept($data[self::FIELD_RELATIONSHIP]));
            }
        }
        if (isset($data[self::FIELD_GENDER]) || isset($data[self::FIELD_GENDER_EXT])) {
            $value = $data[self::FIELD_GENDER] ?? null;
            $ext = (isset($data[self::FIELD_GENDER_EXT]) && is_array($data[self::FIELD_GENDER_EXT])) ? $data[self::FIELD_GENDER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRAdministrativeGender) {
                    $this->setGender($value);
                } else if (is_array($value)) {
                    $this->setGender(new FHIRAdministrativeGender(array_merge($ext, $value)));
                } else {
                    $this->setGender(new FHIRAdministrativeGender([FHIRAdministrativeGender::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setGender(new FHIRAdministrativeGender($ext));
            }
        }
        if (isset($data[self::FIELD_BORN_PERIOD])) {
            if ($data[self::FIELD_BORN_PERIOD] instanceof FHIRPeriod) {
                $this->setBornPeriod($data[self::FIELD_BORN_PERIOD]);
            } else {
                $this->setBornPeriod(new FHIRPeriod($data[self::FIELD_BORN_PERIOD]));
            }
        }
        if (isset($data[self::FIELD_BORN_DATE]) || isset($data[self::FIELD_BORN_DATE_EXT])) {
            $value = $data[self::FIELD_BORN_DATE] ?? null;
            $ext = (isset($data[self::FIELD_BORN_DATE_EXT]) && is_array($data[self::FIELD_BORN_DATE_EXT])) ? $data[self::FIELD_BORN_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setBornDate($value);
                } else if (is_array($value)) {
                    $this->setBornDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setBornDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBornDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_BORN_STRING]) || isset($data[self::FIELD_BORN_STRING_EXT])) {
            $value = $data[self::FIELD_BORN_STRING] ?? null;
            $ext = (isset($data[self::FIELD_BORN_STRING_EXT]) && is_array($data[self::FIELD_BORN_STRING_EXT])) ? $data[self::FIELD_BORN_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setBornString($value);
                } else if (is_array($value)) {
                    $this->setBornString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setBornString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setBornString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_AGE_AGE])) {
            if ($data[self::FIELD_AGE_AGE] instanceof FHIRAge) {
                $this->setAgeAge($data[self::FIELD_AGE_AGE]);
            } else {
                $this->setAgeAge(new FHIRAge($data[self::FIELD_AGE_AGE]));
            }
        }
        if (isset($data[self::FIELD_AGE_RANGE])) {
            if ($data[self::FIELD_AGE_RANGE] instanceof FHIRRange) {
                $this->setAgeRange($data[self::FIELD_AGE_RANGE]);
            } else {
                $this->setAgeRange(new FHIRRange($data[self::FIELD_AGE_RANGE]));
            }
        }
        if (isset($data[self::FIELD_AGE_STRING]) || isset($data[self::FIELD_AGE_STRING_EXT])) {
            $value = $data[self::FIELD_AGE_STRING] ?? null;
            $ext = (isset($data[self::FIELD_AGE_STRING_EXT]) && is_array($data[self::FIELD_AGE_STRING_EXT])) ? $data[self::FIELD_AGE_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setAgeString($value);
                } else if (is_array($value)) {
                    $this->setAgeString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setAgeString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAgeString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_ESTIMATED_AGE]) || isset($data[self::FIELD_ESTIMATED_AGE_EXT])) {
            $value = $data[self::FIELD_ESTIMATED_AGE] ?? null;
            $ext = (isset($data[self::FIELD_ESTIMATED_AGE_EXT]) && is_array($data[self::FIELD_ESTIMATED_AGE_EXT])) ? $data[self::FIELD_ESTIMATED_AGE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setEstimatedAge($value);
                } else if (is_array($value)) {
                    $this->setEstimatedAge(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setEstimatedAge(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEstimatedAge(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DECEASED_BOOLEAN]) || isset($data[self::FIELD_DECEASED_BOOLEAN_EXT])) {
            $value = $data[self::FIELD_DECEASED_BOOLEAN] ?? null;
            $ext = (isset($data[self::FIELD_DECEASED_BOOLEAN_EXT]) && is_array($data[self::FIELD_DECEASED_BOOLEAN_EXT])) ? $data[self::FIELD_DECEASED_BOOLEAN_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDeceasedBoolean($value);
                } else if (is_array($value)) {
                    $this->setDeceasedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDeceasedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDeceasedBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DECEASED_AGE])) {
            if ($data[self::FIELD_DECEASED_AGE] instanceof FHIRAge) {
                $this->setDeceasedAge($data[self::FIELD_DECEASED_AGE]);
            } else {
                $this->setDeceasedAge(new FHIRAge($data[self::FIELD_DECEASED_AGE]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_RANGE])) {
            if ($data[self::FIELD_DECEASED_RANGE] instanceof FHIRRange) {
                $this->setDeceasedRange($data[self::FIELD_DECEASED_RANGE]);
            } else {
                $this->setDeceasedRange(new FHIRRange($data[self::FIELD_DECEASED_RANGE]));
            }
        }
        if (isset($data[self::FIELD_DECEASED_DATE]) || isset($data[self::FIELD_DECEASED_DATE_EXT])) {
            $value = $data[self::FIELD_DECEASED_DATE] ?? null;
            $ext = (isset($data[self::FIELD_DECEASED_DATE_EXT]) && is_array($data[self::FIELD_DECEASED_DATE_EXT])) ? $data[self::FIELD_DECEASED_DATE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDate) {
                    $this->setDeceasedDate($value);
                } else if (is_array($value)) {
                    $this->setDeceasedDate(new FHIRDate(array_merge($ext, $value)));
                } else {
                    $this->setDeceasedDate(new FHIRDate([FHIRDate::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDeceasedDate(new FHIRDate($ext));
            }
        }
        if (isset($data[self::FIELD_DECEASED_STRING]) || isset($data[self::FIELD_DECEASED_STRING_EXT])) {
            $value = $data[self::FIELD_DECEASED_STRING] ?? null;
            $ext = (isset($data[self::FIELD_DECEASED_STRING_EXT]) && is_array($data[self::FIELD_DECEASED_STRING_EXT])) ? $data[self::FIELD_DECEASED_STRING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setDeceasedString($value);
                } else if (is_array($value)) {
                    $this->setDeceasedString(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setDeceasedString(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDeceasedString(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } elseif ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } elseif ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_CONDITION])) {
            if (is_array($data[self::FIELD_CONDITION])) {
                foreach($data[self::FIELD_CONDITION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRFamilyMemberHistoryCondition) {
                        $this->addCondition($v);
                    } else {
                        $this->addCondition(new FHIRFamilyMemberHistoryCondition($v));
                    }
                }
            } elseif ($data[self::FIELD_CONDITION] instanceof FHIRFamilyMemberHistoryCondition) {
                $this->addCondition($data[self::FIELD_CONDITION]);
            } else {
                $this->addCondition(new FHIRFamilyMemberHistoryCondition($data[self::FIELD_CONDITION]));
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
     * @return string
     */
    public function _getResourceType(): string
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(null|FHIRIdentifier $identifier = null): self
    {
        if (null === $identifier) {
            $identifier = new FHIRIdentifier();
        }
        $this->_trackValueAdded();
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A technical identifier - identifies some entity uniquely and unambiguously.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This records identifiers associated with this family member history record that
     * are defined by business processes and/ or used to refer to it when a direct URL
     * reference to the resource itself is not appropriate (e.g. in CDA documents, or
     * in written / printed documentation).
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = []): self
    {
        if ([] !== $this->identifier) {
            $this->_trackValuesRemoved(count($this->identifier));
            $this->identifier = [];
        }
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDefinition(): null|array
    {
        return $this->definition;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $definition
     * @return static
     */
    public function addDefinition(null|FHIRReference $definition = null): self
    {
        if (null === $definition) {
            $definition = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A protocol or questionnaire that was adhered to in whole or in part by this
     * event.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $definition
     * @return static
     */
    public function setDefinition(array $definition = []): self
    {
        if ([] !== $this->definition) {
            $this->_trackValuesRemoved(count($this->definition));
            $this->definition = [];
        }
        if ([] === $definition) {
            return $this;
        }
        foreach($definition as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDefinition($v);
            } else {
                $this->addDefinition(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus(): null|FHIRFamilyHistoryStatus
    {
        return $this->status;
    }

    /**
     * A code that identifies the status of the family history record.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the status of the record of the family history of a specific
     * family member.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRFamilyHistoryStatus $status
     * @return static
     */
    public function setStatus(null|FHIRFamilyHistoryStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRFamilyHistoryStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the taking of an individual family member's history did not
     * occur. The notDone element should not be used to document negated conditions,
     * such as a family member that did not have a condition.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getNotDone(): null|FHIRBoolean
    {
        return $this->notDone;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates the taking of an individual family member's history did not
     * occur. The notDone element should not be used to document negated conditions,
     * such as a family member that did not have a condition.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $notDone
     * @return static
     */
    public function setNotDone(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $notDone = null): self
    {
        if (null !== $notDone && !($notDone instanceof FHIRBoolean)) {
            $notDone = new FHIRBoolean($notDone);
        }
        $this->_trackValueSet($this->notDone, $notDone);
        $this->notDone = $notDone;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is absent.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getNotDoneReason(): null|FHIRCodeableConcept
    {
        return $this->notDoneReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member's history is absent.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $notDoneReason
     * @return static
     */
    public function setNotDoneReason(null|FHIRCodeableConcept $notDoneReason = null): self
    {
        if (null === $notDoneReason) {
            $notDoneReason = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->notDoneReason, $notDoneReason);
        $this->notDoneReason = $notDoneReason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPatient(): null|FHIRReference
    {
        return $this->patient;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who this history concerns.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $patient
     * @return static
     */
    public function setPatient(null|FHIRReference $patient = null): self
    {
        if (null === $patient) {
            $patient = new FHIRReference();
        }
        $this->_trackValueSet($this->patient, $patient);
        $this->patient = $patient;
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
     * The date (and possibly time) when the family member history was taken.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getDate(): null|FHIRDateTime
    {
        return $this->date;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and possibly time) when the family member history was taken.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDateTimePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDateTime $date
     * @return static
     */
    public function setDate(null|string|\DateTimeInterface|FHIRDateTimePrimitive|FHIRDateTime $date = null): self
    {
        if (null !== $date && !($date instanceof FHIRDateTime)) {
            $date = new FHIRDateTime($date);
        }
        $this->_trackValueSet($this->date, $date);
        $this->date = $date;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with
     * the red hair".
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $name
     * @return static
     */
    public function setName(null|string|FHIRStringPrimitive|FHIRString $name = null): self
    {
        if (null !== $name && !($name instanceof FHIRString)) {
            $name = new FHIRString($name);
        }
        $this->_trackValueSet($this->name, $name);
        $this->name = $name;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship(): null|FHIRCodeableConcept
    {
        return $this->relationship;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The type of relationship this person has to the patient (father, mother, brother
     * etc.).
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $relationship
     * @return static
     */
    public function setRelationship(null|FHIRCodeableConcept $relationship = null): self
    {
        if (null === $relationship) {
            $relationship = new FHIRCodeableConcept();
        }
        $this->_trackValueSet($this->relationship, $relationship);
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRAdministrativeGender
     */
    public function getGender(): null|FHIRAdministrativeGender
    {
        return $this->gender;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Administrative Gender - the gender that the relative is considered to have for
     * administration and record keeping purposes.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRAdministrativeGender $gender
     * @return static
     */
    public function setGender(null|FHIRAdministrativeGender $gender = null): self
    {
        if (null === $gender) {
            $gender = new FHIRAdministrativeGender();
        }
        $this->_trackValueSet($this->gender, $gender);
        $this->gender = $gender;
        return $this;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod(): null|FHIRPeriod
    {
        return $this->bornPeriod;
    }

    /**
     * A time period defined by a start and end date and optionally time.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRPeriod $bornPeriod
     * @return static
     */
    public function setBornPeriod(null|FHIRPeriod $bornPeriod = null): self
    {
        if (null === $bornPeriod) {
            $bornPeriod = new FHIRPeriod();
        }
        $this->_trackValueSet($this->bornPeriod, $bornPeriod);
        $this->bornPeriod = $bornPeriod;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public function getBornDate(): null|FHIRDate
    {
        return $this->bornDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDatePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDate $bornDate
     * @return static
     */
    public function setBornDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $bornDate = null): self
    {
        if (null !== $bornDate && !($bornDate instanceof FHIRDate)) {
            $bornDate = new FHIRDate($bornDate);
        }
        $this->_trackValueSet($this->bornDate, $bornDate);
        $this->bornDate = $bornDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getBornString(): null|FHIRString
    {
        return $this->bornString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The actual or approximate date of birth of the relative.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $bornString
     * @return static
     */
    public function setBornString(null|string|FHIRStringPrimitive|FHIRString $bornString = null): self
    {
        if (null !== $bornString && !($bornString instanceof FHIRString)) {
            $bornString = new FHIRString($bornString);
        }
        $this->_trackValueSet($this->bornString, $bornString);
        $this->bornString = $bornString;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getAgeAge(): null|FHIRAge
    {
        return $this->ageAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge $ageAge
     * @return static
     */
    public function setAgeAge(null|FHIRAge $ageAge = null): self
    {
        if (null === $ageAge) {
            $ageAge = new FHIRAge();
        }
        $this->_trackValueSet($this->ageAge, $ageAge);
        $this->ageAge = $ageAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    public function getAgeRange(): null|FHIRRange
    {
        return $this->ageRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRange $ageRange
     * @return static
     */
    public function setAgeRange(null|FHIRRange $ageRange = null): self
    {
        if (null === $ageRange) {
            $ageRange = new FHIRRange();
        }
        $this->_trackValueSet($this->ageRange, $ageRange);
        $this->ageRange = $ageRange;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getAgeString(): null|FHIRString
    {
        return $this->ageString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The age of the relative at the time the family member history is recorded.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $ageString
     * @return static
     */
    public function setAgeString(null|string|FHIRStringPrimitive|FHIRString $ageString = null): self
    {
        if (null !== $ageString && !($ageString instanceof FHIRString)) {
            $ageString = new FHIRString($ageString);
        }
        $this->_trackValueSet($this->ageString, $ageString);
        $this->ageString = $ageString;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getEstimatedAge(): null|FHIRBoolean
    {
        return $this->estimatedAge;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true, indicates that the age value specified is an estimated value.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $estimatedAge
     * @return static
     */
    public function setEstimatedAge(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $estimatedAge = null): self
    {
        if (null !== $estimatedAge && !($estimatedAge instanceof FHIRBoolean)) {
            $estimatedAge = new FHIRBoolean($estimatedAge);
        }
        $this->_trackValueSet($this->estimatedAge, $estimatedAge);
        $this->estimatedAge = $estimatedAge;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean(): null|FHIRBoolean
    {
        return $this->deceasedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|bool|\HL7\FHIR\STU3\FHIRBooleanPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return static
     */
    public function setDeceasedBoolean(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $deceasedBoolean = null): self
    {
        if (null !== $deceasedBoolean && !($deceasedBoolean instanceof FHIRBoolean)) {
            $deceasedBoolean = new FHIRBoolean($deceasedBoolean);
        }
        $this->_trackValueSet($this->deceasedBoolean, $deceasedBoolean);
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge
     */
    public function getDeceasedAge(): null|FHIRAge
    {
        return $this->deceasedAge;
    }

    /**
     * A duration of time during which an organism (or a process) has existed.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRQuantity\FHIRAge $deceasedAge
     * @return static
     */
    public function setDeceasedAge(null|FHIRAge $deceasedAge = null): self
    {
        if (null === $deceasedAge) {
            $deceasedAge = new FHIRAge();
        }
        $this->_trackValueSet($this->deceasedAge, $deceasedAge);
        $this->deceasedAge = $deceasedAge;
        return $this;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRRange
     */
    public function getDeceasedRange(): null|FHIRRange
    {
        return $this->deceasedRange;
    }

    /**
     * A set of ordered Quantities defined by a low and high limit.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRRange $deceasedRange
     * @return static
     */
    public function setDeceasedRange(null|FHIRRange $deceasedRange = null): self
    {
        if (null === $deceasedRange) {
            $deceasedRange = new FHIRRange();
        }
        $this->_trackValueSet($this->deceasedRange, $deceasedRange);
        $this->deceasedRange = $deceasedRange;
        return $this;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRDate
     */
    public function getDeceasedDate(): null|FHIRDate
    {
        return $this->deceasedDate;
    }

    /**
     * A date or partial date (e.g. just year or year + month). There is no time zone.
     * The format is a union of the schema types gYear, gYearMonth and date. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\STU3\FHIRDatePrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRDate $deceasedDate
     * @return static
     */
    public function setDeceasedDate(null|string|\DateTimeInterface|FHIRDatePrimitive|FHIRDate $deceasedDate = null): self
    {
        if (null !== $deceasedDate && !($deceasedDate instanceof FHIRDate)) {
            $deceasedDate = new FHIRDate($deceasedDate);
        }
        $this->_trackValueSet($this->deceasedDate, $deceasedDate);
        $this->deceasedDate = $deceasedDate;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDeceasedString(): null|FHIRString
    {
        return $this->deceasedString;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings may not exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Deceased flag or the actual or approximate age of the relative at the time of
     * death for the family member history record.
     *
     * @param null|string|\HL7\FHIR\STU3\FHIRStringPrimitive|\HL7\FHIR\STU3\FHIRElement\FHIRString $deceasedString
     * @return static
     */
    public function setDeceasedString(null|string|FHIRStringPrimitive|FHIRString $deceasedString = null): self
    {
        if (null !== $deceasedString && !($deceasedString instanceof FHIRString)) {
            $deceasedString = new FHIRString($deceasedString);
        }
        $this->_trackValueSet($this->deceasedString, $deceasedString);
        $this->deceasedString = $deceasedString;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member history occurred in coded or textual form.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode(): null|array
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member history occurred in coded or textual form.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(null|FHIRCodeableConcept $reasonCode = null): self
    {
        if (null === $reasonCode) {
            $reasonCode = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Describes why the family member history occurred in coded or textual form.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = []): self
    {
        if ([] !== $this->reasonCode) {
            $this->_trackValuesRemoved(count($this->reasonCode));
            $this->reasonCode = [];
        }
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference(): null|array
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(null|FHIRReference $reasonReference = null): self
    {
        if (null === $reasonReference) {
            $reasonReference = new FHIRReference();
        }
        $this->_trackValueAdded();
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates a Condition, Observation, AllergyIntolerance, or QuestionnaireResponse
     * that justifies this family member history event.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = []): self
    {
        if ([] !== $this->reasonReference) {
            $this->_trackValuesRemoved(count($this->reasonReference));
            $this->reasonReference = [];
        }
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote(): null|array
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(null|FHIRAnnotation $note = null): self
    {
        if (null === $note) {
            $note = new FHIRAnnotation();
        }
        $this->_trackValueAdded();
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * This property allows a non condition-specific note to the made about the related
     * person. Ideally, the note would be in the condition property, but this is not
     * always possible.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = []): self
    {
        if ([] !== $this->note) {
            $this->_trackValuesRemoved(count($this->note));
            $this->note = [];
        }
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @return null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition(): null|array
    {
        return $this->condition;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param null|\HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition $condition
     * @return static
     */
    public function addCondition(null|FHIRFamilyMemberHistoryCondition $condition = null): self
    {
        if (null === $condition) {
            $condition = new FHIRFamilyMemberHistoryCondition();
        }
        $this->_trackValueAdded();
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * Significant health events and conditions for a person related to the patient
     * relevant in the context of care for the patient.
     *
     * The significant Conditions (or condition) that the family member had. This is a
     * repeating section to allow a system to represent more than one condition per
     * resource, though there is nothing stopping multiple resources - one per
     * condition.
     *
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] $condition
     * @return static
     */
    public function setCondition(array $condition = []): self
    {
        if ([] !== $this->condition) {
            $this->_trackValuesRemoved(count($this->condition));
            $this->condition = [];
        }
        if ([] === $condition) {
            return $this;
        }
        foreach($condition as $v) {
            if ($v instanceof FHIRFamilyMemberHistoryCondition) {
                $this->addCondition($v);
            } else {
                $this->addCondition(new FHIRFamilyMemberHistoryCondition($v));
            }
        }
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
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DEFINITION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotDone())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_DONE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NOT_DONE_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPatient())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PATIENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RELATIONSHIP] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getGender())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GENDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBornPeriod())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BORN_PERIOD] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBornDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BORN_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getBornString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_BORN_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAgeAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAgeRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAgeString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AGE_STRING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getEstimatedAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ESTIMATED_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeceasedAge())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_AGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeceasedRange())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_RANGE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDeceasedString())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DECEASED_STRING] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONDITION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_DONE])) {
            $v = $this->getNotDone();
            foreach($validationRules[self::FIELD_NOT_DONE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_NOT_DONE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_DONE])) {
                        $errs[self::FIELD_NOT_DONE] = [];
                    }
                    $errs[self::FIELD_NOT_DONE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOT_DONE_REASON])) {
            $v = $this->getNotDoneReason();
            foreach($validationRules[self::FIELD_NOT_DONE_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_NOT_DONE_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOT_DONE_REASON])) {
                        $errs[self::FIELD_NOT_DONE_REASON] = [];
                    }
                    $errs[self::FIELD_NOT_DONE_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PATIENT])) {
            $v = $this->getPatient();
            foreach($validationRules[self::FIELD_PATIENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_PATIENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PATIENT])) {
                        $errs[self::FIELD_PATIENT] = [];
                    }
                    $errs[self::FIELD_PATIENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RELATIONSHIP])) {
            $v = $this->getRelationship();
            foreach($validationRules[self::FIELD_RELATIONSHIP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_RELATIONSHIP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RELATIONSHIP])) {
                        $errs[self::FIELD_RELATIONSHIP] = [];
                    }
                    $errs[self::FIELD_RELATIONSHIP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GENDER])) {
            $v = $this->getGender();
            foreach($validationRules[self::FIELD_GENDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_GENDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GENDER])) {
                        $errs[self::FIELD_GENDER] = [];
                    }
                    $errs[self::FIELD_GENDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BORN_PERIOD])) {
            $v = $this->getBornPeriod();
            foreach($validationRules[self::FIELD_BORN_PERIOD] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_BORN_PERIOD, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BORN_PERIOD])) {
                        $errs[self::FIELD_BORN_PERIOD] = [];
                    }
                    $errs[self::FIELD_BORN_PERIOD][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BORN_DATE])) {
            $v = $this->getBornDate();
            foreach($validationRules[self::FIELD_BORN_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_BORN_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BORN_DATE])) {
                        $errs[self::FIELD_BORN_DATE] = [];
                    }
                    $errs[self::FIELD_BORN_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BORN_STRING])) {
            $v = $this->getBornString();
            foreach($validationRules[self::FIELD_BORN_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_BORN_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BORN_STRING])) {
                        $errs[self::FIELD_BORN_STRING] = [];
                    }
                    $errs[self::FIELD_BORN_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_AGE])) {
            $v = $this->getAgeAge();
            foreach($validationRules[self::FIELD_AGE_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_AGE_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_AGE])) {
                        $errs[self::FIELD_AGE_AGE] = [];
                    }
                    $errs[self::FIELD_AGE_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_RANGE])) {
            $v = $this->getAgeRange();
            foreach($validationRules[self::FIELD_AGE_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_AGE_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_RANGE])) {
                        $errs[self::FIELD_AGE_RANGE] = [];
                    }
                    $errs[self::FIELD_AGE_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AGE_STRING])) {
            $v = $this->getAgeString();
            foreach($validationRules[self::FIELD_AGE_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_AGE_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AGE_STRING])) {
                        $errs[self::FIELD_AGE_STRING] = [];
                    }
                    $errs[self::FIELD_AGE_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ESTIMATED_AGE])) {
            $v = $this->getEstimatedAge();
            foreach($validationRules[self::FIELD_ESTIMATED_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_ESTIMATED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ESTIMATED_AGE])) {
                        $errs[self::FIELD_ESTIMATED_AGE] = [];
                    }
                    $errs[self::FIELD_ESTIMATED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_BOOLEAN])) {
            $v = $this->getDeceasedBoolean();
            foreach($validationRules[self::FIELD_DECEASED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DECEASED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_BOOLEAN])) {
                        $errs[self::FIELD_DECEASED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_DECEASED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_AGE])) {
            $v = $this->getDeceasedAge();
            foreach($validationRules[self::FIELD_DECEASED_AGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DECEASED_AGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_AGE])) {
                        $errs[self::FIELD_DECEASED_AGE] = [];
                    }
                    $errs[self::FIELD_DECEASED_AGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_RANGE])) {
            $v = $this->getDeceasedRange();
            foreach($validationRules[self::FIELD_DECEASED_RANGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DECEASED_RANGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_RANGE])) {
                        $errs[self::FIELD_DECEASED_RANGE] = [];
                    }
                    $errs[self::FIELD_DECEASED_RANGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_DATE])) {
            $v = $this->getDeceasedDate();
            foreach($validationRules[self::FIELD_DECEASED_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DECEASED_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_DATE])) {
                        $errs[self::FIELD_DECEASED_DATE] = [];
                    }
                    $errs[self::FIELD_DECEASED_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DECEASED_STRING])) {
            $v = $this->getDeceasedString();
            foreach($validationRules[self::FIELD_DECEASED_STRING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_DECEASED_STRING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DECEASED_STRING])) {
                        $errs[self::FIELD_DECEASED_STRING] = [];
                    }
                    $errs[self::FIELD_DECEASED_STRING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONDITION])) {
            $v = $this->getCondition();
            foreach($validationRules[self::FIELD_CONDITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_FAMILY_MEMBER_HISTORY, self::FIELD_CONDITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONDITION])) {
                        $errs[self::FIELD_CONDITION] = [];
                    }
                    $errs[self::FIELD_CONDITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory $type
     * @param null|int|\HL7\FHIR\STU3\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\STU3\FHIRResource\FHIRDomainResource\FHIRFamilyMemberHistory
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
        } else if (!($type instanceof FHIRFamilyMemberHistory)) {
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
            if (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION === $n->nodeName) {
                $type->addDefinition(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRFamilyHistoryStatus::xmlUnserialize($n));
            } elseif (self::FIELD_NOT_DONE === $n->nodeName) {
                $type->setNotDone(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_NOT_DONE_REASON === $n->nodeName) {
                $type->setNotDoneReason(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PATIENT === $n->nodeName) {
                $type->setPatient(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_RELATIONSHIP === $n->nodeName) {
                $type->setRelationship(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_GENDER === $n->nodeName) {
                $type->setGender(FHIRAdministrativeGender::xmlUnserialize($n));
            } elseif (self::FIELD_BORN_PERIOD === $n->nodeName) {
                $type->setBornPeriod(FHIRPeriod::xmlUnserialize($n));
            } elseif (self::FIELD_BORN_DATE === $n->nodeName) {
                $type->setBornDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_BORN_STRING === $n->nodeName) {
                $type->setBornString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_AGE_AGE === $n->nodeName) {
                $type->setAgeAge(FHIRAge::xmlUnserialize($n));
            } elseif (self::FIELD_AGE_RANGE === $n->nodeName) {
                $type->setAgeRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_AGE_STRING === $n->nodeName) {
                $type->setAgeString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_ESTIMATED_AGE === $n->nodeName) {
                $type->setEstimatedAge(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_DECEASED_BOOLEAN === $n->nodeName) {
                $type->setDeceasedBoolean(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_DECEASED_AGE === $n->nodeName) {
                $type->setDeceasedAge(FHIRAge::xmlUnserialize($n));
            } elseif (self::FIELD_DECEASED_RANGE === $n->nodeName) {
                $type->setDeceasedRange(FHIRRange::xmlUnserialize($n));
            } elseif (self::FIELD_DECEASED_DATE === $n->nodeName) {
                $type->setDeceasedDate(FHIRDate::xmlUnserialize($n));
            } elseif (self::FIELD_DECEASED_STRING === $n->nodeName) {
                $type->setDeceasedString(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_CODE === $n->nodeName) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_REASON_REFERENCE === $n->nodeName) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($n));
            } elseif (self::FIELD_NOTE === $n->nodeName) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($n));
            } elseif (self::FIELD_CONDITION === $n->nodeName) {
                $type->addCondition(FHIRFamilyMemberHistoryCondition::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRNarrative::xmlUnserialize($n));
            } elseif (self::FIELD_CONTAINED === $n->nodeName) {
                for ($ni = 0; $ni < $n->childNodes->length; $ni++) {
                    $nn = $n->childNodes->item($ni);
                    if ($nn instanceof \DOMElement) {
                        $type->addContained(PHPFHIRTypeMap::getContainedTypeFromXML($nn));
                    }
                }
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRId::xmlUnserialize($n));
            } elseif (self::FIELD_META === $n->nodeName) {
                $type->setMeta(FHIRMeta::xmlUnserialize($n));
            } elseif (self::FIELD_IMPLICIT_RULES === $n->nodeName) {
                $type->setImplicitRules(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_LANGUAGE === $n->nodeName) {
                $type->setLanguage(FHIRCode::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NOT_DONE);
        if (null !== $n) {
            $pt = $type->getNotDone();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setNotDone($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DATE);
        if (null !== $n) {
            $pt = $type->getDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_NAME);
        if (null !== $n) {
            $pt = $type->getName();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setName($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BORN_DATE);
        if (null !== $n) {
            $pt = $type->getBornDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBornDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_BORN_STRING);
        if (null !== $n) {
            $pt = $type->getBornString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setBornString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_AGE_STRING);
        if (null !== $n) {
            $pt = $type->getAgeString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAgeString($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ESTIMATED_AGE);
        if (null !== $n) {
            $pt = $type->getEstimatedAge();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setEstimatedAge($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DECEASED_BOOLEAN);
        if (null !== $n) {
            $pt = $type->getDeceasedBoolean();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDeceasedBoolean($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DECEASED_DATE);
        if (null !== $n) {
            $pt = $type->getDeceasedDate();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDeceasedDate($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DECEASED_STRING);
        if (null !== $n) {
            $pt = $type->getDeceasedString();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDeceasedString($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_IMPLICIT_RULES);
        if (null !== $n) {
            $pt = $type->getImplicitRules();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setImplicitRules($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LANGUAGE);
        if (null !== $n) {
            $pt = $type->getLanguage();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLanguage($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('FamilyMemberHistory'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_IDENTIFIER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getDefinition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNotDone())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOT_DONE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NOT_DONE_REASON);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPatient())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PATIENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRelationship())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_RELATIONSHIP);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getGender())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_GENDER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBornPeriod())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BORN_PERIOD);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBornDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BORN_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getBornString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_BORN_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAgeAge())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AGE_AGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAgeRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AGE_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAgeString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_AGE_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getEstimatedAge())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ESTIMATED_AGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_BOOLEAN);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDeceasedAge())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_AGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDeceasedRange())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_RANGE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDeceasedString())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DECEASED_STRING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_REASON_REFERENCE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_NOTE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONDITION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize(): mixed
    {
        $out = parent::jsonSerialize();
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getDefinition())) {
            $out->{self::FIELD_DEFINITION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_DEFINITION}[] = $v;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRFamilyHistoryStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNotDone())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NOT_DONE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NOT_DONE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getNotDoneReason())) {
            $out->{self::FIELD_NOT_DONE_REASON} = $v;
        }
        if (null !== ($v = $this->getPatient())) {
            $out->{self::FIELD_PATIENT} = $v;
        }
        if (null !== ($v = $this->getDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDateTime::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getName())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_NAME} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_NAME_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRelationship())) {
            $out->{self::FIELD_RELATIONSHIP} = $v;
        }
        if (null !== ($v = $this->getGender())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_GENDER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRAdministrativeGender::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_GENDER_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBornPeriod())) {
            $out->{self::FIELD_BORN_PERIOD} = $v;
        }
        if (null !== ($v = $this->getBornDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BORN_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BORN_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getBornString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_BORN_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_BORN_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAgeAge())) {
            $out->{self::FIELD_AGE_AGE} = $v;
        }
        if (null !== ($v = $this->getAgeRange())) {
            $out->{self::FIELD_AGE_RANGE} = $v;
        }
        if (null !== ($v = $this->getAgeString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_AGE_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_AGE_STRING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getEstimatedAge())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ESTIMATED_AGE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ESTIMATED_AGE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDeceasedBoolean())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DECEASED_BOOLEAN} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DECEASED_BOOLEAN_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDeceasedAge())) {
            $out->{self::FIELD_DECEASED_AGE} = $v;
        }
        if (null !== ($v = $this->getDeceasedRange())) {
            $out->{self::FIELD_DECEASED_RANGE} = $v;
        }
        if (null !== ($v = $this->getDeceasedDate())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DECEASED_DATE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDate::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DECEASED_DATE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDeceasedString())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DECEASED_STRING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DECEASED_STRING_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $out->{self::FIELD_REASON_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_CODE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $out->{self::FIELD_REASON_REFERENCE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_REASON_REFERENCE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            $out->{self::FIELD_NOTE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_NOTE}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getCondition())) {
            $out->{self::FIELD_CONDITION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONDITION}[] = $v;
            }
        }

        $out->{PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE} = $this->_getResourceType();

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