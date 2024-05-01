<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire;

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
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\R4\FHIRBooleanPrimitive;
use HL7\FHIR\R4\FHIRCanonicalPrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement;
use HL7\FHIR\R4\FHIRElement\FHIRBoolean;
use HL7\FHIR\R4\FHIRElement\FHIRCanonical;
use HL7\FHIR\R4\FHIRElement\FHIRCoding;
use HL7\FHIR\R4\FHIRElement\FHIREnableWhenBehavior;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRInteger;
use HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireItemType;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRIntegerPrimitive;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\FHIRUriPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * A structured set of questions intended to guide the collection of answers from
 * end-users. Questionnaires provide detailed control over order, presentation,
 * phraseology and grouping to allow coherent, consistent data collection.
 *
 * Class FHIRQuestionnaireItem
 * @package \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire
 */
class FHIRQuestionnaireItem extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM;

    const FIELD_LINK_ID = 'linkId';
    const FIELD_LINK_ID_EXT = '_linkId';
    const FIELD_DEFINITION = 'definition';
    const FIELD_DEFINITION_EXT = '_definition';
    const FIELD_CODE = 'code';
    const FIELD_PREFIX = 'prefix';
    const FIELD_PREFIX_EXT = '_prefix';
    const FIELD_TEXT = 'text';
    const FIELD_TEXT_EXT = '_text';
    const FIELD_TYPE = 'type';
    const FIELD_TYPE_EXT = '_type';
    const FIELD_ENABLE_WHEN = 'enableWhen';
    const FIELD_ENABLE_BEHAVIOR = 'enableBehavior';
    const FIELD_ENABLE_BEHAVIOR_EXT = '_enableBehavior';
    const FIELD_REQUIRED = 'required';
    const FIELD_REQUIRED_EXT = '_required';
    const FIELD_REPEATS = 'repeats';
    const FIELD_REPEATS_EXT = '_repeats';
    const FIELD_READ_ONLY = 'readOnly';
    const FIELD_READ_ONLY_EXT = '_readOnly';
    const FIELD_MAX_LENGTH = 'maxLength';
    const FIELD_MAX_LENGTH_EXT = '_maxLength';
    const FIELD_ANSWER_VALUE_SET = 'answerValueSet';
    const FIELD_ANSWER_VALUE_SET_EXT = '_answerValueSet';
    const FIELD_ANSWER_OPTION = 'answerOption';
    const FIELD_INITIAL = 'initial';
    const FIELD_ITEM = 'item';

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $linkId = null;
    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides
     * information about this item, including information that might otherwise be
     * included in the instance of the Questionnaire resource. A detailed description
     * of the construction of the URI is shown in Comments, below. If this element is
     * present then the following element values MAY be derived from the Element
     * Definition if the corresponding elements of this Questionnaire resource instance
     * have no value: * code (ElementDefinition.code) * type (ElementDefinition.type) *
     * required (ElementDefinition.min) * repeats (ElementDefinition.max) * maxLength
     * (ElementDefinition.maxLength) * answerValueSet (ElementDefinition.binding) *
     * options (ElementDefinition.binding).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $definition = null;
    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCoding[]
     */
    protected null|array $code = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $prefix = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $text = null;
    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireItemType
     */
    protected null|FHIRQuestionnaireItemType $type = null;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    protected null|array $enableWhen = [];
    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIREnableWhenBehavior
     */
    protected null|FHIREnableWhenBehavior $enableBehavior = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $required = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers for questions or multiple sets of answers for
     * groups.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $repeats = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $readOnly = null;
    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    protected null|FHIRInteger $maxLength = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $answerValueSet = null;
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    protected null|array $answerOption = [];
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    protected null|array $initial = [];
    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    protected null|array $item = [];

    /**
     * Validation map for fields in type Questionnaire.Item
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRQuestionnaireItem Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LINK_ID]) || isset($data[self::FIELD_LINK_ID_EXT])) {
            $value = $data[self::FIELD_LINK_ID] ?? null;
            $ext = (isset($data[self::FIELD_LINK_ID_EXT]) && is_array($data[self::FIELD_LINK_ID_EXT])) ? $data[self::FIELD_LINK_ID_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setLinkId($value);
                } else if (is_array($value)) {
                    $this->setLinkId(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setLinkId(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLinkId(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_DEFINITION]) || isset($data[self::FIELD_DEFINITION_EXT])) {
            $value = $data[self::FIELD_DEFINITION] ?? null;
            $ext = (isset($data[self::FIELD_DEFINITION_EXT]) && is_array($data[self::FIELD_DEFINITION_EXT])) ? $data[self::FIELD_DEFINITION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setDefinition($value);
                } else if (is_array($value)) {
                    $this->setDefinition(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setDefinition(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDefinition(new FHIRUri($ext));
            }
        }
        if (isset($data[self::FIELD_CODE])) {
            if (is_array($data[self::FIELD_CODE])) {
                foreach($data[self::FIELD_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCoding) {
                        $this->addCode($v);
                    } else {
                        $this->addCode(new FHIRCoding($v));
                    }
                }
            } elseif ($data[self::FIELD_CODE] instanceof FHIRCoding) {
                $this->addCode($data[self::FIELD_CODE]);
            } else {
                $this->addCode(new FHIRCoding($data[self::FIELD_CODE]));
            }
        }
        if (isset($data[self::FIELD_PREFIX]) || isset($data[self::FIELD_PREFIX_EXT])) {
            $value = $data[self::FIELD_PREFIX] ?? null;
            $ext = (isset($data[self::FIELD_PREFIX_EXT]) && is_array($data[self::FIELD_PREFIX_EXT])) ? $data[self::FIELD_PREFIX_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPrefix($value);
                } else if (is_array($value)) {
                    $this->setPrefix(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPrefix(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPrefix(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TEXT]) || isset($data[self::FIELD_TEXT_EXT])) {
            $value = $data[self::FIELD_TEXT] ?? null;
            $ext = (isset($data[self::FIELD_TEXT_EXT]) && is_array($data[self::FIELD_TEXT_EXT])) ? $data[self::FIELD_TEXT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setText($value);
                } else if (is_array($value)) {
                    $this->setText(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setText(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setText(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_TYPE]) || isset($data[self::FIELD_TYPE_EXT])) {
            $value = $data[self::FIELD_TYPE] ?? null;
            $ext = (isset($data[self::FIELD_TYPE_EXT]) && is_array($data[self::FIELD_TYPE_EXT])) ? $data[self::FIELD_TYPE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRQuestionnaireItemType) {
                    $this->setType($value);
                } else if (is_array($value)) {
                    $this->setType(new FHIRQuestionnaireItemType(array_merge($ext, $value)));
                } else {
                    $this->setType(new FHIRQuestionnaireItemType([FHIRQuestionnaireItemType::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setType(new FHIRQuestionnaireItemType($ext));
            }
        }
        if (isset($data[self::FIELD_ENABLE_WHEN])) {
            if (is_array($data[self::FIELD_ENABLE_WHEN])) {
                foreach($data[self::FIELD_ENABLE_WHEN] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireEnableWhen) {
                        $this->addEnableWhen($v);
                    } else {
                        $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($v));
                    }
                }
            } elseif ($data[self::FIELD_ENABLE_WHEN] instanceof FHIRQuestionnaireEnableWhen) {
                $this->addEnableWhen($data[self::FIELD_ENABLE_WHEN]);
            } else {
                $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($data[self::FIELD_ENABLE_WHEN]));
            }
        }
        if (isset($data[self::FIELD_ENABLE_BEHAVIOR]) || isset($data[self::FIELD_ENABLE_BEHAVIOR_EXT])) {
            $value = $data[self::FIELD_ENABLE_BEHAVIOR] ?? null;
            $ext = (isset($data[self::FIELD_ENABLE_BEHAVIOR_EXT]) && is_array($data[self::FIELD_ENABLE_BEHAVIOR_EXT])) ? $data[self::FIELD_ENABLE_BEHAVIOR_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIREnableWhenBehavior) {
                    $this->setEnableBehavior($value);
                } else if (is_array($value)) {
                    $this->setEnableBehavior(new FHIREnableWhenBehavior(array_merge($ext, $value)));
                } else {
                    $this->setEnableBehavior(new FHIREnableWhenBehavior([FHIREnableWhenBehavior::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setEnableBehavior(new FHIREnableWhenBehavior($ext));
            }
        }
        if (isset($data[self::FIELD_REQUIRED]) || isset($data[self::FIELD_REQUIRED_EXT])) {
            $value = $data[self::FIELD_REQUIRED] ?? null;
            $ext = (isset($data[self::FIELD_REQUIRED_EXT]) && is_array($data[self::FIELD_REQUIRED_EXT])) ? $data[self::FIELD_REQUIRED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRequired($value);
                } else if (is_array($value)) {
                    $this->setRequired(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRequired(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRequired(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REPEATS]) || isset($data[self::FIELD_REPEATS_EXT])) {
            $value = $data[self::FIELD_REPEATS] ?? null;
            $ext = (isset($data[self::FIELD_REPEATS_EXT]) && is_array($data[self::FIELD_REPEATS_EXT])) ? $data[self::FIELD_REPEATS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setRepeats($value);
                } else if (is_array($value)) {
                    $this->setRepeats(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setRepeats(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setRepeats(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_READ_ONLY]) || isset($data[self::FIELD_READ_ONLY_EXT])) {
            $value = $data[self::FIELD_READ_ONLY] ?? null;
            $ext = (isset($data[self::FIELD_READ_ONLY_EXT]) && is_array($data[self::FIELD_READ_ONLY_EXT])) ? $data[self::FIELD_READ_ONLY_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReadOnly($value);
                } else if (is_array($value)) {
                    $this->setReadOnly(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReadOnly(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setReadOnly(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_MAX_LENGTH]) || isset($data[self::FIELD_MAX_LENGTH_EXT])) {
            $value = $data[self::FIELD_MAX_LENGTH] ?? null;
            $ext = (isset($data[self::FIELD_MAX_LENGTH_EXT]) && is_array($data[self::FIELD_MAX_LENGTH_EXT])) ? $data[self::FIELD_MAX_LENGTH_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->setMaxLength($value);
                } else if (is_array($value)) {
                    $this->setMaxLength(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->setMaxLength(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setMaxLength(new FHIRInteger($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_VALUE_SET]) || isset($data[self::FIELD_ANSWER_VALUE_SET_EXT])) {
            $value = $data[self::FIELD_ANSWER_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_ANSWER_VALUE_SET_EXT]) && is_array($data[self::FIELD_ANSWER_VALUE_SET_EXT])) ? $data[self::FIELD_ANSWER_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setAnswerValueSet($value);
                } else if (is_array($value)) {
                    $this->setAnswerValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setAnswerValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAnswerValueSet(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_ANSWER_OPTION])) {
            if (is_array($data[self::FIELD_ANSWER_OPTION])) {
                foreach($data[self::FIELD_ANSWER_OPTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireAnswerOption) {
                        $this->addAnswerOption($v);
                    } else {
                        $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($v));
                    }
                }
            } elseif ($data[self::FIELD_ANSWER_OPTION] instanceof FHIRQuestionnaireAnswerOption) {
                $this->addAnswerOption($data[self::FIELD_ANSWER_OPTION]);
            } else {
                $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($data[self::FIELD_ANSWER_OPTION]));
            }
        }
        if (isset($data[self::FIELD_INITIAL])) {
            if (is_array($data[self::FIELD_INITIAL])) {
                foreach($data[self::FIELD_INITIAL] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireInitial) {
                        $this->addInitial($v);
                    } else {
                        $this->addInitial(new FHIRQuestionnaireInitial($v));
                    }
                }
            } elseif ($data[self::FIELD_INITIAL] instanceof FHIRQuestionnaireInitial) {
                $this->addInitial($data[self::FIELD_INITIAL]);
            } else {
                $this->addInitial(new FHIRQuestionnaireInitial($data[self::FIELD_INITIAL]));
            }
        }
        if (isset($data[self::FIELD_ITEM])) {
            if (is_array($data[self::FIELD_ITEM])) {
                foreach($data[self::FIELD_ITEM] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRQuestionnaireItem) {
                        $this->addItem($v);
                    } else {
                        $this->addItem(new FHIRQuestionnaireItem($v));
                    }
                }
            } elseif ($data[self::FIELD_ITEM] instanceof FHIRQuestionnaireItem) {
                $this->addItem($data[self::FIELD_ITEM]);
            } else {
                $this->addItem(new FHIRQuestionnaireItem($data[self::FIELD_ITEM]));
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getLinkId(): null|FHIRString
    {
        return $this->linkId;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An identifier that is unique within the Questionnaire allowing linkage to the
     * equivalent item in a QuestionnaireResponse resource.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $linkId
     * @return static
     */
    public function setLinkId(null|string|FHIRStringPrimitive|FHIRString $linkId = null): self
    {
        if (null !== $linkId && !($linkId instanceof FHIRString)) {
            $linkId = new FHIRString($linkId);
        }
        $this->_trackValueSet($this->linkId, $linkId);
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides
     * information about this item, including information that might otherwise be
     * included in the instance of the Questionnaire resource. A detailed description
     * of the construction of the URI is shown in Comments, below. If this element is
     * present then the following element values MAY be derived from the Element
     * Definition if the corresponding elements of this Questionnaire resource instance
     * have no value: * code (ElementDefinition.code) * type (ElementDefinition.type) *
     * required (ElementDefinition.min) * repeats (ElementDefinition.max) * maxLength
     * (ElementDefinition.maxLength) * answerValueSet (ElementDefinition.binding) *
     * options (ElementDefinition.binding).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRUri
     */
    public function getDefinition(): null|FHIRUri
    {
        return $this->definition;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This element is a URI that refers to an [[[ElementDefinition]]] that provides
     * information about this item, including information that might otherwise be
     * included in the instance of the Questionnaire resource. A detailed description
     * of the construction of the URI is shown in Comments, below. If this element is
     * present then the following element values MAY be derived from the Element
     * Definition if the corresponding elements of this Questionnaire resource instance
     * have no value: * code (ElementDefinition.code) * type (ElementDefinition.type) *
     * required (ElementDefinition.min) * repeats (ElementDefinition.max) * maxLength
     * (ElementDefinition.maxLength) * answerValueSet (ElementDefinition.binding) *
     * options (ElementDefinition.binding).
     *
     * @param null|string|\HL7\FHIR\R4\FHIRUriPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRUri $definition
     * @return static
     */
    public function setDefinition(null|string|FHIRUriPrimitive|FHIRUri $definition = null): self
    {
        if (null !== $definition && !($definition instanceof FHIRUri)) {
            $definition = new FHIRUri($definition);
        }
        $this->_trackValueSet($this->definition, $definition);
        $this->definition = $definition;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCoding[]
     */
    public function getCode(): null|array
    {
        return $this->code;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCoding $code
     * @return static
     */
    public function addCode(null|FHIRCoding $code = null): self
    {
        if (null === $code) {
            $code = new FHIRCoding();
        }
        $this->_trackValueAdded();
        $this->code[] = $code;
        return $this;
    }

    /**
     * A reference to a code defined by a terminology system.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A terminology code that corresponds to this group or question (e.g. a code from
     * LOINC, which defines many questions and answers).
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCoding[] $code
     * @return static
     */
    public function setCode(array $code = []): self
    {
        if ([] !== $this->code) {
            $this->_trackValuesRemoved(count($this->code));
            $this->code = [];
        }
        if ([] === $code) {
            return $this;
        }
        foreach($code as $v) {
            if ($v instanceof FHIRCoding) {
                $this->addCode($v);
            } else {
                $this->addCode(new FHIRCoding($v));
            }
        }
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getPrefix(): null|FHIRString
    {
        return $this->prefix;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short label for a particular group, question or set of display text within the
     * questionnaire used for reference by the individual completing the questionnaire.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $prefix
     * @return static
     */
    public function setPrefix(null|string|FHIRStringPrimitive|FHIRString $prefix = null): self
    {
        if (null !== $prefix && !($prefix instanceof FHIRString)) {
            $prefix = new FHIRString($prefix);
        }
        $this->_trackValueSet($this->prefix, $prefix);
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getText(): null|FHIRString
    {
        return $this->text;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of a section, the text of a question or text content for a display
     * item.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $text
     * @return static
     */
    public function setText(null|string|FHIRStringPrimitive|FHIRString $text = null): self
    {
        if (null !== $text && !($text instanceof FHIRString)) {
            $text = new FHIRString($text);
        }
        $this->_trackValueSet($this->text, $text);
        $this->text = $text;
        return $this;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireItemType
     */
    public function getType(): null|FHIRQuestionnaireItemType
    {
        return $this->type;
    }

    /**
     * Distinguishes groups from questions and display text and indicates data type for
     * questions.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The type of questionnaire item this is - whether text for display, a grouping of
     * other items or a particular type of data to be captured (string, integer, coded
     * choice, etc.).
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRQuestionnaireItemType $type
     * @return static
     */
    public function setType(null|FHIRQuestionnaireItemType $type = null): self
    {
        if (null === $type) {
            $type = new FHIRQuestionnaireItemType();
        }
        $this->_trackValueSet($this->type, $type);
        $this->type = $type;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[]
     */
    public function getEnableWhen(): null|array
    {
        return $this->enableWhen;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen $enableWhen
     * @return static
     */
    public function addEnableWhen(null|FHIRQuestionnaireEnableWhen $enableWhen = null): self
    {
        if (null === $enableWhen) {
            $enableWhen = new FHIRQuestionnaireEnableWhen();
        }
        $this->_trackValueAdded();
        $this->enableWhen[] = $enableWhen;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * A constraint indicating that this item should only be enabled (displayed/allow
     * answers to be captured) when the specified condition is true.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireEnableWhen[] $enableWhen
     * @return static
     */
    public function setEnableWhen(array $enableWhen = []): self
    {
        if ([] !== $this->enableWhen) {
            $this->_trackValuesRemoved(count($this->enableWhen));
            $this->enableWhen = [];
        }
        if ([] === $enableWhen) {
            return $this;
        }
        foreach($enableWhen as $v) {
            if ($v instanceof FHIRQuestionnaireEnableWhen) {
                $this->addEnableWhen($v);
            } else {
                $this->addEnableWhen(new FHIRQuestionnaireEnableWhen($v));
            }
        }
        return $this;
    }

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIREnableWhenBehavior
     */
    public function getEnableBehavior(): null|FHIREnableWhenBehavior
    {
        return $this->enableBehavior;
    }

    /**
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Controls how multiple enableWhen values are interpreted - whether all or any
     * must be true.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIREnableWhenBehavior $enableBehavior
     * @return static
     */
    public function setEnableBehavior(null|FHIREnableWhenBehavior $enableBehavior = null): self
    {
        if (null === $enableBehavior) {
            $enableBehavior = new FHIREnableWhenBehavior();
        }
        $this->_trackValueSet($this->enableBehavior, $enableBehavior);
        $this->enableBehavior = $enableBehavior;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getRequired(): null|FHIRBoolean
    {
        return $this->required;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item must be present in a "completed"
     * QuestionnaireResponse. If false, the item may be skipped when answering the
     * questionnaire.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $required
     * @return static
     */
    public function setRequired(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $required = null): self
    {
        if (null !== $required && !($required instanceof FHIRBoolean)) {
            $required = new FHIRBoolean($required);
        }
        $this->_trackValueSet($this->required, $required);
        $this->required = $required;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers for questions or multiple sets of answers for
     * groups.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getRepeats(): null|FHIRBoolean
    {
        return $this->repeats;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, if true, that the item may occur multiple times in the response,
     * collecting multiple answers for questions or multiple sets of answers for
     * groups.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $repeats
     * @return static
     */
    public function setRepeats(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $repeats = null): self
    {
        if (null !== $repeats && !($repeats instanceof FHIRBoolean)) {
            $repeats = new FHIRBoolean($repeats);
        }
        $this->_trackValueSet($this->repeats, $repeats);
        $this->repeats = $repeats;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getReadOnly(): null|FHIRBoolean
    {
        return $this->readOnly;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An indication, when true, that the value cannot be changed by a human respondent
     * to the Questionnaire.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $readOnly
     * @return static
     */
    public function setReadOnly(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $readOnly = null): self
    {
        if (null !== $readOnly && !($readOnly instanceof FHIRBoolean)) {
            $readOnly = new FHIRBoolean($readOnly);
        }
        $this->_trackValueSet($this->readOnly, $readOnly);
        $this->readOnly = $readOnly;
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRInteger
     */
    public function getMaxLength(): null|FHIRInteger
    {
        return $this->maxLength;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The maximum number of characters that are permitted in the answer to be
     * considered a "valid" QuestionnaireResponse.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRIntegerPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRInteger $maxLength
     * @return static
     */
    public function setMaxLength(null|string|int|float|FHIRIntegerPrimitive|FHIRInteger $maxLength = null): self
    {
        if (null !== $maxLength && !($maxLength instanceof FHIRInteger)) {
            $maxLength = new FHIRInteger($maxLength);
        }
        $this->_trackValueSet($this->maxLength, $maxLength);
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCanonical
     */
    public function getAnswerValueSet(): null|FHIRCanonical
    {
        return $this->answerValueSet;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A reference to a value set containing a list of codes representing permitted
     * answers for a "choice" or "open-choice" question.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRCanonicalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRCanonical $answerValueSet
     * @return static
     */
    public function setAnswerValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $answerValueSet = null): self
    {
        if (null !== $answerValueSet && !($answerValueSet instanceof FHIRCanonical)) {
            $answerValueSet = new FHIRCanonical($answerValueSet);
        }
        $this->_trackValueSet($this->answerValueSet, $answerValueSet);
        $this->answerValueSet = $answerValueSet;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[]
     */
    public function getAnswerOption(): null|array
    {
        return $this->answerOption;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption $answerOption
     * @return static
     */
    public function addAnswerOption(null|FHIRQuestionnaireAnswerOption $answerOption = null): self
    {
        if (null === $answerOption) {
            $answerOption = new FHIRQuestionnaireAnswerOption();
        }
        $this->_trackValueAdded();
        $this->answerOption[] = $answerOption;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One of the permitted answers for a "choice" or "open-choice" question.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireAnswerOption[] $answerOption
     * @return static
     */
    public function setAnswerOption(array $answerOption = []): self
    {
        if ([] !== $this->answerOption) {
            $this->_trackValuesRemoved(count($this->answerOption));
            $this->answerOption = [];
        }
        if ([] === $answerOption) {
            return $this;
        }
        foreach($answerOption as $v) {
            if ($v instanceof FHIRQuestionnaireAnswerOption) {
                $this->addAnswerOption($v);
            } else {
                $this->addAnswerOption(new FHIRQuestionnaireAnswerOption($v));
            }
        }
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[]
     */
    public function getInitial(): null|array
    {
        return $this->initial;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial $initial
     * @return static
     */
    public function addInitial(null|FHIRQuestionnaireInitial $initial = null): self
    {
        if (null === $initial) {
            $initial = new FHIRQuestionnaireInitial();
        }
        $this->_trackValueAdded();
        $this->initial[] = $initial;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * One or more values that should be pre-populated in the answer when initially
     * rendering the questionnaire for user input.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireInitial[] $initial
     * @return static
     */
    public function setInitial(array $initial = []): self
    {
        if ([] !== $this->initial) {
            $this->_trackValuesRemoved(count($this->initial));
            $this->initial = [];
        }
        if ([] === $initial) {
            return $this;
        }
        foreach($initial as $v) {
            if ($v instanceof FHIRQuestionnaireInitial) {
                $this->addInitial($v);
            } else {
                $this->addInitial(new FHIRQuestionnaireInitial($v));
            }
        }
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[]
     */
    public function getItem(): null|array
    {
        return $this->item;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $item
     * @return static
     */
    public function addItem(null|FHIRQuestionnaireItem $item = null): self
    {
        if (null === $item) {
            $item = new FHIRQuestionnaireItem();
        }
        $this->_trackValueAdded();
        $this->item[] = $item;
        return $this;
    }

    /**
     * A structured set of questions intended to guide the collection of answers from
     * end-users. Questionnaires provide detailed control over order, presentation,
     * phraseology and grouping to allow coherent, consistent data collection.
     *
     * Text, questions and other groups to be nested beneath a question or group.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem[] $item
     * @return static
     */
    public function setItem(array $item = []): self
    {
        if ([] !== $this->item) {
            $this->_trackValuesRemoved(count($this->item));
            $this->item = [];
        }
        if ([] === $item) {
            return $this;
        }
        foreach($item as $v) {
            if ($v instanceof FHIRQuestionnaireItem) {
                $this->addItem($v);
            } else {
                $this->addItem(new FHIRQuestionnaireItem($v));
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
        if (null !== ($v = $this->getLinkId())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LINK_ID] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DEFINITION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PREFIX] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getText())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TEXT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ENABLE_WHEN, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENABLE_BEHAVIOR] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequired())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUIRED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRepeats())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPEATS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReadOnly())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_READ_ONLY] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MAX_LENGTH] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ANSWER_VALUE_SET] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getAnswerOption())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ANSWER_OPTION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInitial())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INITIAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_ITEM, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LINK_ID])) {
            $v = $this->getLinkId();
            foreach($validationRules[self::FIELD_LINK_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_LINK_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LINK_ID])) {
                        $errs[self::FIELD_LINK_ID] = [];
                    }
                    $errs[self::FIELD_LINK_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DEFINITION])) {
            $v = $this->getDefinition();
            foreach($validationRules[self::FIELD_DEFINITION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_DEFINITION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DEFINITION])) {
                        $errs[self::FIELD_DEFINITION] = [];
                    }
                    $errs[self::FIELD_DEFINITION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CODE])) {
            $v = $this->getCode();
            foreach($validationRules[self::FIELD_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CODE])) {
                        $errs[self::FIELD_CODE] = [];
                    }
                    $errs[self::FIELD_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PREFIX])) {
            $v = $this->getPrefix();
            foreach($validationRules[self::FIELD_PREFIX] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_PREFIX, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PREFIX])) {
                        $errs[self::FIELD_PREFIX] = [];
                    }
                    $errs[self::FIELD_PREFIX][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TYPE])) {
            $v = $this->getType();
            foreach($validationRules[self::FIELD_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TYPE])) {
                        $errs[self::FIELD_TYPE] = [];
                    }
                    $errs[self::FIELD_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENABLE_WHEN])) {
            $v = $this->getEnableWhen();
            foreach($validationRules[self::FIELD_ENABLE_WHEN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ENABLE_WHEN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENABLE_WHEN])) {
                        $errs[self::FIELD_ENABLE_WHEN] = [];
                    }
                    $errs[self::FIELD_ENABLE_WHEN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENABLE_BEHAVIOR])) {
            $v = $this->getEnableBehavior();
            foreach($validationRules[self::FIELD_ENABLE_BEHAVIOR] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ENABLE_BEHAVIOR, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENABLE_BEHAVIOR])) {
                        $errs[self::FIELD_ENABLE_BEHAVIOR] = [];
                    }
                    $errs[self::FIELD_ENABLE_BEHAVIOR][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUIRED])) {
            $v = $this->getRequired();
            foreach($validationRules[self::FIELD_REQUIRED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_REQUIRED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUIRED])) {
                        $errs[self::FIELD_REQUIRED] = [];
                    }
                    $errs[self::FIELD_REQUIRED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPEATS])) {
            $v = $this->getRepeats();
            foreach($validationRules[self::FIELD_REPEATS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_REPEATS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPEATS])) {
                        $errs[self::FIELD_REPEATS] = [];
                    }
                    $errs[self::FIELD_REPEATS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_READ_ONLY])) {
            $v = $this->getReadOnly();
            foreach($validationRules[self::FIELD_READ_ONLY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_READ_ONLY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_READ_ONLY])) {
                        $errs[self::FIELD_READ_ONLY] = [];
                    }
                    $errs[self::FIELD_READ_ONLY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MAX_LENGTH])) {
            $v = $this->getMaxLength();
            foreach($validationRules[self::FIELD_MAX_LENGTH] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_MAX_LENGTH, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MAX_LENGTH])) {
                        $errs[self::FIELD_MAX_LENGTH] = [];
                    }
                    $errs[self::FIELD_MAX_LENGTH][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_VALUE_SET])) {
            $v = $this->getAnswerValueSet();
            foreach($validationRules[self::FIELD_ANSWER_VALUE_SET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ANSWER_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_VALUE_SET])) {
                        $errs[self::FIELD_ANSWER_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_ANSWER_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ANSWER_OPTION])) {
            $v = $this->getAnswerOption();
            foreach($validationRules[self::FIELD_ANSWER_OPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ANSWER_OPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ANSWER_OPTION])) {
                        $errs[self::FIELD_ANSWER_OPTION] = [];
                    }
                    $errs[self::FIELD_ANSWER_OPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INITIAL])) {
            $v = $this->getInitial();
            foreach($validationRules[self::FIELD_INITIAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_INITIAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INITIAL])) {
                        $errs[self::FIELD_INITIAL] = [];
                    }
                    $errs[self::FIELD_INITIAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ITEM])) {
            $v = $this->getItem();
            foreach($validationRules[self::FIELD_ITEM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_QUESTIONNAIRE_DOT_ITEM, self::FIELD_ITEM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ITEM])) {
                        $errs[self::FIELD_ITEM] = [];
                    }
                    $errs[self::FIELD_ITEM][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRQuestionnaire\FHIRQuestionnaireItem
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
        } else if (!($type instanceof FHIRQuestionnaireItem)) {
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
            if (self::FIELD_LINK_ID === $n->nodeName) {
                $type->setLinkId(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_DEFINITION === $n->nodeName) {
                $type->setDefinition(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_CODE === $n->nodeName) {
                $type->addCode(FHIRCoding::xmlUnserialize($n));
            } elseif (self::FIELD_PREFIX === $n->nodeName) {
                $type->setPrefix(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TEXT === $n->nodeName) {
                $type->setText(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TYPE === $n->nodeName) {
                $type->setType(FHIRQuestionnaireItemType::xmlUnserialize($n));
            } elseif (self::FIELD_ENABLE_WHEN === $n->nodeName) {
                $type->addEnableWhen(FHIRQuestionnaireEnableWhen::xmlUnserialize($n));
            } elseif (self::FIELD_ENABLE_BEHAVIOR === $n->nodeName) {
                $type->setEnableBehavior(FHIREnableWhenBehavior::xmlUnserialize($n));
            } elseif (self::FIELD_REQUIRED === $n->nodeName) {
                $type->setRequired(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_REPEATS === $n->nodeName) {
                $type->setRepeats(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_READ_ONLY === $n->nodeName) {
                $type->setReadOnly(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_MAX_LENGTH === $n->nodeName) {
                $type->setMaxLength(FHIRInteger::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_VALUE_SET === $n->nodeName) {
                $type->setAnswerValueSet(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_ANSWER_OPTION === $n->nodeName) {
                $type->addAnswerOption(FHIRQuestionnaireAnswerOption::xmlUnserialize($n));
            } elseif (self::FIELD_INITIAL === $n->nodeName) {
                $type->addInitial(FHIRQuestionnaireInitial::xmlUnserialize($n));
            } elseif (self::FIELD_ITEM === $n->nodeName) {
                $type->addItem(FHIRQuestionnaireItem::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LINK_ID);
        if (null !== $n) {
            $pt = $type->getLinkId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLinkId($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DEFINITION);
        if (null !== $n) {
            $pt = $type->getDefinition();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDefinition($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PREFIX);
        if (null !== $n) {
            $pt = $type->getPrefix();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPrefix($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_TEXT);
        if (null !== $n) {
            $pt = $type->getText();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setText($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REQUIRED);
        if (null !== $n) {
            $pt = $type->getRequired();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRequired($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_REPEATS);
        if (null !== $n) {
            $pt = $type->getRepeats();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setRepeats($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_READ_ONLY);
        if (null !== $n) {
            $pt = $type->getReadOnly();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setReadOnly($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_MAX_LENGTH);
        if (null !== $n) {
            $pt = $type->getMaxLength();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setMaxLength($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ANSWER_VALUE_SET);
        if (null !== $n) {
            $pt = $type->getAnswerValueSet();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAnswerValueSet($n->nodeValue);
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
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('QuestionnaireItem'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getLinkId())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LINK_ID);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDefinition())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DEFINITION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CODE);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PREFIX);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getText())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TEXT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getType())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TYPE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ENABLE_WHEN);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ENABLE_BEHAVIOR);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRequired())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REQUIRED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getRepeats())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_REPEATS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getReadOnly())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_READ_ONLY);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getMaxLength())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_MAX_LENGTH);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_VALUE_SET);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getAnswerOption())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ANSWER_OPTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getInitial())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_INITIAL);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_ITEM);
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
        if (null !== ($v = $this->getLinkId())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LINK_ID} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LINK_ID_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getDefinition())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DEFINITION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DEFINITION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getCode())) {
            $out->{self::FIELD_CODE} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CODE}[] = $v;
            }
        }
        if (null !== ($v = $this->getPrefix())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PREFIX} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PREFIX_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getText())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TEXT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TEXT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getType())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TYPE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRQuestionnaireItemType::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TYPE_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getEnableWhen())) {
            $out->{self::FIELD_ENABLE_WHEN} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ENABLE_WHEN}[] = $v;
            }
        }
        if (null !== ($v = $this->getEnableBehavior())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ENABLE_BEHAVIOR} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIREnableWhenBehavior::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ENABLE_BEHAVIOR_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRequired())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REQUIRED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REQUIRED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getRepeats())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_REPEATS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_REPEATS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getReadOnly())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_READ_ONLY} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_READ_ONLY_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getMaxLength())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_MAX_LENGTH} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRInteger::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_MAX_LENGTH_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAnswerValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ANSWER_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ANSWER_VALUE_SET_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getAnswerOption())) {
            $out->{self::FIELD_ANSWER_OPTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ANSWER_OPTION}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getInitial())) {
            $out->{self::FIELD_INITIAL} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_INITIAL}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getItem())) {
            $out->{self::FIELD_ITEM} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_ITEM}[] = $v;
            }
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