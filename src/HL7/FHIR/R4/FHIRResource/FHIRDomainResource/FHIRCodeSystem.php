<?php declare(strict_types=1);

namespace HL7\FHIR\R4\FHIRResource\FHIRDomainResource;

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
use HL7\FHIR\R4\FHIRCodePrimitive;
use HL7\FHIR\R4\FHIRDateTimePrimitive;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter;
use HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty;
use HL7\FHIR\R4\FHIRElement\FHIRBoolean;
use HL7\FHIR\R4\FHIRElement\FHIRCanonical;
use HL7\FHIR\R4\FHIRElement\FHIRCode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\R4\FHIRElement\FHIRCodeSystemContentMode;
use HL7\FHIR\R4\FHIRElement\FHIRCodeSystemHierarchyMeaning;
use HL7\FHIR\R4\FHIRElement\FHIRContactDetail;
use HL7\FHIR\R4\FHIRElement\FHIRDateTime;
use HL7\FHIR\R4\FHIRElement\FHIRExtension;
use HL7\FHIR\R4\FHIRElement\FHIRId;
use HL7\FHIR\R4\FHIRElement\FHIRIdentifier;
use HL7\FHIR\R4\FHIRElement\FHIRMarkdown;
use HL7\FHIR\R4\FHIRElement\FHIRMeta;
use HL7\FHIR\R4\FHIRElement\FHIRNarrative;
use HL7\FHIR\R4\FHIRElement\FHIRPublicationStatus;
use HL7\FHIR\R4\FHIRElement\FHIRString;
use HL7\FHIR\R4\FHIRElement\FHIRUnsignedInt;
use HL7\FHIR\R4\FHIRElement\FHIRUri;
use HL7\FHIR\R4\FHIRElement\FHIRUsageContext;
use HL7\FHIR\R4\FHIRIdPrimitive;
use HL7\FHIR\R4\FHIRMarkdownPrimitive;
use HL7\FHIR\R4\FHIRResource\FHIRDomainResource;
use HL7\FHIR\R4\FHIRStringPrimitive;
use HL7\FHIR\R4\FHIRUnsignedIntPrimitive;
use HL7\FHIR\R4\FHIRUriPrimitive;
use HL7\FHIR\R4\PHPFHIRConfig;
use HL7\FHIR\R4\PHPFHIRConstants;
use HL7\FHIR\R4\PHPFHIRContainedTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeInterface;
use HL7\FHIR\R4\PHPFHIRTypeMap;
use HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface;
use HL7\FHIR\R4\PHPFHIRXmlSerializableInterface;

/**
 * The CodeSystem resource is used to declare the existence of and describe a code
 * system or code system supplement and its key properties, and optionally define a
 * part or all of its content.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRCodeSystem
 * @package \HL7\FHIR\R4\FHIRResource\FHIRDomainResource
 */
class FHIRCodeSystem extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM;

    const FIELD_URL = 'url';
    const FIELD_URL_EXT = '_url';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_VERSION = 'version';
    const FIELD_VERSION_EXT = '_version';
    const FIELD_NAME = 'name';
    const FIELD_NAME_EXT = '_name';
    const FIELD_TITLE = 'title';
    const FIELD_TITLE_EXT = '_title';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_EXPERIMENTAL = 'experimental';
    const FIELD_EXPERIMENTAL_EXT = '_experimental';
    const FIELD_DATE = 'date';
    const FIELD_DATE_EXT = '_date';
    const FIELD_PUBLISHER = 'publisher';
    const FIELD_PUBLISHER_EXT = '_publisher';
    const FIELD_CONTACT = 'contact';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_DESCRIPTION_EXT = '_description';
    const FIELD_USE_CONTEXT = 'useContext';
    const FIELD_JURISDICTION = 'jurisdiction';
    const FIELD_PURPOSE = 'purpose';
    const FIELD_PURPOSE_EXT = '_purpose';
    const FIELD_COPYRIGHT = 'copyright';
    const FIELD_COPYRIGHT_EXT = '_copyright';
    const FIELD_CASE_SENSITIVE = 'caseSensitive';
    const FIELD_CASE_SENSITIVE_EXT = '_caseSensitive';
    const FIELD_VALUE_SET = 'valueSet';
    const FIELD_VALUE_SET_EXT = '_valueSet';
    const FIELD_HIERARCHY_MEANING = 'hierarchyMeaning';
    const FIELD_HIERARCHY_MEANING_EXT = '_hierarchyMeaning';
    const FIELD_COMPOSITIONAL = 'compositional';
    const FIELD_COMPOSITIONAL_EXT = '_compositional';
    const FIELD_VERSION_NEEDED = 'versionNeeded';
    const FIELD_VERSION_NEEDED_EXT = '_versionNeeded';
    const FIELD_CONTENT = 'content';
    const FIELD_CONTENT_EXT = '_content';
    const FIELD_SUPPLEMENTS = 'supplements';
    const FIELD_SUPPLEMENTS_EXT = '_supplements';
    const FIELD_COUNT = 'count';
    const FIELD_COUNT_EXT = '_count';
    const FIELD_FILTER = 'filter';
    const FIELD_PROPERTY = 'property';
    const FIELD_CONCEPT = 'concept';

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this code system when it is referenced
     * in a specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this code system is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the code system is stored on different servers. This is used in
     * [Coding](datatypes.html#Coding).system.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRUri
     */
    protected null|FHIRUri $url = null;
    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    protected null|array $identifier = [];
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the code system when it
     * is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the code system author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. This is used in
     * [Coding](datatypes.html#Coding).version.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $version = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the code system. This name should be usable
     * as an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $name = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $title = null;
    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the code system resource was created or
     * revised.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRPublicationStatus
     */
    protected null|FHIRPublicationStatus $status = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this code system is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $experimental = null;
    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the code system was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the code
     * system changes.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRDateTime
     */
    protected null|FHIRDateTime $date = null;
    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the code system.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    protected null|FHIRString $publisher = null;
    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    protected null|array $contact = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the code system from a consumer's
     * perspective.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $description = null;
    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate code system
     * instances.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRUsageContext[]
     */
    protected null|array $useContext = [];
    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected null|array $jurisdiction = [];
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this code system is needed and why it has been designed as it
     * has.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $purpose = null;
    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the code system and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * code system.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    protected null|FHIRMarkdown $copyright = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If code comparison is case sensitive when codes within this system are compared
     * to each other.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $caseSensitive = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Canonical reference to the value set that contains the entire code system.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $valueSet = null;
    /**
     * The meaning of the hierarchy of concepts in a code system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The meaning of the hierarchy of concepts as represented in this resource.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeSystemHierarchyMeaning
     */
    protected null|FHIRCodeSystemHierarchyMeaning $hierarchyMeaning = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code system defines a compositional (post-coordination) grammar.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $compositional = null;
    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This flag is used to signify that the code system does not commit to concept
     * permanence across versions. If true, a version must be specified when
     * referencing this code system.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    protected null|FHIRBoolean $versionNeeded = null;
    /**
     * The extent of the content of the code system (the concepts and codes it defines)
     * are represented in a code system resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The extent of the content of the code system (the concepts and codes it defines)
     * are represented in this resource instance.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCodeSystemContentMode
     */
    protected null|FHIRCodeSystemContentMode $content = null;
    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL of the code system that this code system supplement is adding
     * designations and properties to.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRCanonical
     */
    protected null|FHIRCanonical $supplements = null;
    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The total number of concepts defined by the code system. Where the code system
     * has a compositional grammar, the basis of this count is defined by the system
     * steward.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRUnsignedInt
     */
    protected null|FHIRUnsignedInt $count = null;
    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter[]
     */
    protected null|array $filter = [];
    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty[]
     */
    protected null|array $property = [];
    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meanings of the hierarchical relationships are.
     *
     * @var null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    protected null|array $concept = [];

    /**
     * Validation map for fields in type CodeSystem
     * @var array
     */
    private const _VALIDATION_RULES = [    ];

    /**
     * FHIRCodeSystem Constructor
     * @param null|array $data

     */
    public function __construct(null|array $data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_URL]) || isset($data[self::FIELD_URL_EXT])) {
            $value = $data[self::FIELD_URL] ?? null;
            $ext = (isset($data[self::FIELD_URL_EXT]) && is_array($data[self::FIELD_URL_EXT])) ? $data[self::FIELD_URL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->setUrl($value);
                } else if (is_array($value)) {
                    $this->setUrl(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->setUrl(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setUrl(new FHIRUri($ext));
            }
        }
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
        if (isset($data[self::FIELD_VERSION]) || isset($data[self::FIELD_VERSION_EXT])) {
            $value = $data[self::FIELD_VERSION] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_EXT]) && is_array($data[self::FIELD_VERSION_EXT])) ? $data[self::FIELD_VERSION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setVersion($value);
                } else if (is_array($value)) {
                    $this->setVersion(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setVersion(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersion(new FHIRString($ext));
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
        if (isset($data[self::FIELD_TITLE]) || isset($data[self::FIELD_TITLE_EXT])) {
            $value = $data[self::FIELD_TITLE] ?? null;
            $ext = (isset($data[self::FIELD_TITLE_EXT]) && is_array($data[self::FIELD_TITLE_EXT])) ? $data[self::FIELD_TITLE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setTitle($value);
                } else if (is_array($value)) {
                    $this->setTitle(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setTitle(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setTitle(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            $value = $data[self::FIELD_STATUS] ?? null;
            $ext = (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) ? $data[self::FIELD_STATUS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRPublicationStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRPublicationStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRPublicationStatus([FHIRPublicationStatus::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setStatus(new FHIRPublicationStatus($ext));
            }
        }
        if (isset($data[self::FIELD_EXPERIMENTAL]) || isset($data[self::FIELD_EXPERIMENTAL_EXT])) {
            $value = $data[self::FIELD_EXPERIMENTAL] ?? null;
            $ext = (isset($data[self::FIELD_EXPERIMENTAL_EXT]) && is_array($data[self::FIELD_EXPERIMENTAL_EXT])) ? $data[self::FIELD_EXPERIMENTAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setExperimental($value);
                } else if (is_array($value)) {
                    $this->setExperimental(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setExperimental(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setExperimental(new FHIRBoolean($ext));
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
        if (isset($data[self::FIELD_PUBLISHER]) || isset($data[self::FIELD_PUBLISHER_EXT])) {
            $value = $data[self::FIELD_PUBLISHER] ?? null;
            $ext = (isset($data[self::FIELD_PUBLISHER_EXT]) && is_array($data[self::FIELD_PUBLISHER_EXT])) ? $data[self::FIELD_PUBLISHER_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRString) {
                    $this->setPublisher($value);
                } else if (is_array($value)) {
                    $this->setPublisher(new FHIRString(array_merge($ext, $value)));
                } else {
                    $this->setPublisher(new FHIRString([FHIRString::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPublisher(new FHIRString($ext));
            }
        }
        if (isset($data[self::FIELD_CONTACT])) {
            if (is_array($data[self::FIELD_CONTACT])) {
                foreach($data[self::FIELD_CONTACT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRContactDetail) {
                        $this->addContact($v);
                    } else {
                        $this->addContact(new FHIRContactDetail($v));
                    }
                }
            } elseif ($data[self::FIELD_CONTACT] instanceof FHIRContactDetail) {
                $this->addContact($data[self::FIELD_CONTACT]);
            } else {
                $this->addContact(new FHIRContactDetail($data[self::FIELD_CONTACT]));
            }
        }
        if (isset($data[self::FIELD_DESCRIPTION]) || isset($data[self::FIELD_DESCRIPTION_EXT])) {
            $value = $data[self::FIELD_DESCRIPTION] ?? null;
            $ext = (isset($data[self::FIELD_DESCRIPTION_EXT]) && is_array($data[self::FIELD_DESCRIPTION_EXT])) ? $data[self::FIELD_DESCRIPTION_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setDescription($value);
                } else if (is_array($value)) {
                    $this->setDescription(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setDescription(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setDescription(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_USE_CONTEXT])) {
            if (is_array($data[self::FIELD_USE_CONTEXT])) {
                foreach($data[self::FIELD_USE_CONTEXT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRUsageContext) {
                        $this->addUseContext($v);
                    } else {
                        $this->addUseContext(new FHIRUsageContext($v));
                    }
                }
            } elseif ($data[self::FIELD_USE_CONTEXT] instanceof FHIRUsageContext) {
                $this->addUseContext($data[self::FIELD_USE_CONTEXT]);
            } else {
                $this->addUseContext(new FHIRUsageContext($data[self::FIELD_USE_CONTEXT]));
            }
        }
        if (isset($data[self::FIELD_JURISDICTION])) {
            if (is_array($data[self::FIELD_JURISDICTION])) {
                foreach($data[self::FIELD_JURISDICTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addJurisdiction($v);
                    } else {
                        $this->addJurisdiction(new FHIRCodeableConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_JURISDICTION] instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($data[self::FIELD_JURISDICTION]);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($data[self::FIELD_JURISDICTION]));
            }
        }
        if (isset($data[self::FIELD_PURPOSE]) || isset($data[self::FIELD_PURPOSE_EXT])) {
            $value = $data[self::FIELD_PURPOSE] ?? null;
            $ext = (isset($data[self::FIELD_PURPOSE_EXT]) && is_array($data[self::FIELD_PURPOSE_EXT])) ? $data[self::FIELD_PURPOSE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setPurpose($value);
                } else if (is_array($value)) {
                    $this->setPurpose(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setPurpose(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setPurpose(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_COPYRIGHT]) || isset($data[self::FIELD_COPYRIGHT_EXT])) {
            $value = $data[self::FIELD_COPYRIGHT] ?? null;
            $ext = (isset($data[self::FIELD_COPYRIGHT_EXT]) && is_array($data[self::FIELD_COPYRIGHT_EXT])) ? $data[self::FIELD_COPYRIGHT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRMarkdown) {
                    $this->setCopyright($value);
                } else if (is_array($value)) {
                    $this->setCopyright(new FHIRMarkdown(array_merge($ext, $value)));
                } else {
                    $this->setCopyright(new FHIRMarkdown([FHIRMarkdown::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCopyright(new FHIRMarkdown($ext));
            }
        }
        if (isset($data[self::FIELD_CASE_SENSITIVE]) || isset($data[self::FIELD_CASE_SENSITIVE_EXT])) {
            $value = $data[self::FIELD_CASE_SENSITIVE] ?? null;
            $ext = (isset($data[self::FIELD_CASE_SENSITIVE_EXT]) && is_array($data[self::FIELD_CASE_SENSITIVE_EXT])) ? $data[self::FIELD_CASE_SENSITIVE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCaseSensitive($value);
                } else if (is_array($value)) {
                    $this->setCaseSensitive(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCaseSensitive(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCaseSensitive(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VALUE_SET]) || isset($data[self::FIELD_VALUE_SET_EXT])) {
            $value = $data[self::FIELD_VALUE_SET] ?? null;
            $ext = (isset($data[self::FIELD_VALUE_SET_EXT]) && is_array($data[self::FIELD_VALUE_SET_EXT])) ? $data[self::FIELD_VALUE_SET_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setValueSet($value);
                } else if (is_array($value)) {
                    $this->setValueSet(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setValueSet(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setValueSet(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_HIERARCHY_MEANING]) || isset($data[self::FIELD_HIERARCHY_MEANING_EXT])) {
            $value = $data[self::FIELD_HIERARCHY_MEANING] ?? null;
            $ext = (isset($data[self::FIELD_HIERARCHY_MEANING_EXT]) && is_array($data[self::FIELD_HIERARCHY_MEANING_EXT])) ? $data[self::FIELD_HIERARCHY_MEANING_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCodeSystemHierarchyMeaning) {
                    $this->setHierarchyMeaning($value);
                } else if (is_array($value)) {
                    $this->setHierarchyMeaning(new FHIRCodeSystemHierarchyMeaning(array_merge($ext, $value)));
                } else {
                    $this->setHierarchyMeaning(new FHIRCodeSystemHierarchyMeaning([FHIRCodeSystemHierarchyMeaning::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setHierarchyMeaning(new FHIRCodeSystemHierarchyMeaning($ext));
            }
        }
        if (isset($data[self::FIELD_COMPOSITIONAL]) || isset($data[self::FIELD_COMPOSITIONAL_EXT])) {
            $value = $data[self::FIELD_COMPOSITIONAL] ?? null;
            $ext = (isset($data[self::FIELD_COMPOSITIONAL_EXT]) && is_array($data[self::FIELD_COMPOSITIONAL_EXT])) ? $data[self::FIELD_COMPOSITIONAL_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setCompositional($value);
                } else if (is_array($value)) {
                    $this->setCompositional(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setCompositional(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCompositional(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_VERSION_NEEDED]) || isset($data[self::FIELD_VERSION_NEEDED_EXT])) {
            $value = $data[self::FIELD_VERSION_NEEDED] ?? null;
            $ext = (isset($data[self::FIELD_VERSION_NEEDED_EXT]) && is_array($data[self::FIELD_VERSION_NEEDED_EXT])) ? $data[self::FIELD_VERSION_NEEDED_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setVersionNeeded($value);
                } else if (is_array($value)) {
                    $this->setVersionNeeded(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setVersionNeeded(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setVersionNeeded(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_CONTENT]) || isset($data[self::FIELD_CONTENT_EXT])) {
            $value = $data[self::FIELD_CONTENT] ?? null;
            $ext = (isset($data[self::FIELD_CONTENT_EXT]) && is_array($data[self::FIELD_CONTENT_EXT])) ? $data[self::FIELD_CONTENT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCodeSystemContentMode) {
                    $this->setContent($value);
                } else if (is_array($value)) {
                    $this->setContent(new FHIRCodeSystemContentMode(array_merge($ext, $value)));
                } else {
                    $this->setContent(new FHIRCodeSystemContentMode([FHIRCodeSystemContentMode::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setContent(new FHIRCodeSystemContentMode($ext));
            }
        }
        if (isset($data[self::FIELD_SUPPLEMENTS]) || isset($data[self::FIELD_SUPPLEMENTS_EXT])) {
            $value = $data[self::FIELD_SUPPLEMENTS] ?? null;
            $ext = (isset($data[self::FIELD_SUPPLEMENTS_EXT]) && is_array($data[self::FIELD_SUPPLEMENTS_EXT])) ? $data[self::FIELD_SUPPLEMENTS_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->setSupplements($value);
                } else if (is_array($value)) {
                    $this->setSupplements(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->setSupplements(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setSupplements(new FHIRCanonical($ext));
            }
        }
        if (isset($data[self::FIELD_COUNT]) || isset($data[self::FIELD_COUNT_EXT])) {
            $value = $data[self::FIELD_COUNT] ?? null;
            $ext = (isset($data[self::FIELD_COUNT_EXT]) && is_array($data[self::FIELD_COUNT_EXT])) ? $data[self::FIELD_COUNT_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRUnsignedInt) {
                    $this->setCount($value);
                } else if (is_array($value)) {
                    $this->setCount(new FHIRUnsignedInt(array_merge($ext, $value)));
                } else {
                    $this->setCount(new FHIRUnsignedInt([FHIRUnsignedInt::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setCount(new FHIRUnsignedInt($ext));
            }
        }
        if (isset($data[self::FIELD_FILTER])) {
            if (is_array($data[self::FIELD_FILTER])) {
                foreach($data[self::FIELD_FILTER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeSystemFilter) {
                        $this->addFilter($v);
                    } else {
                        $this->addFilter(new FHIRCodeSystemFilter($v));
                    }
                }
            } elseif ($data[self::FIELD_FILTER] instanceof FHIRCodeSystemFilter) {
                $this->addFilter($data[self::FIELD_FILTER]);
            } else {
                $this->addFilter(new FHIRCodeSystemFilter($data[self::FIELD_FILTER]));
            }
        }
        if (isset($data[self::FIELD_PROPERTY])) {
            if (is_array($data[self::FIELD_PROPERTY])) {
                foreach($data[self::FIELD_PROPERTY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeSystemProperty) {
                        $this->addProperty($v);
                    } else {
                        $this->addProperty(new FHIRCodeSystemProperty($v));
                    }
                }
            } elseif ($data[self::FIELD_PROPERTY] instanceof FHIRCodeSystemProperty) {
                $this->addProperty($data[self::FIELD_PROPERTY]);
            } else {
                $this->addProperty(new FHIRCodeSystemProperty($data[self::FIELD_PROPERTY]));
            }
        }
        if (isset($data[self::FIELD_CONCEPT])) {
            if (is_array($data[self::FIELD_CONCEPT])) {
                foreach($data[self::FIELD_CONCEPT] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeSystemConcept) {
                        $this->addConcept($v);
                    } else {
                        $this->addConcept(new FHIRCodeSystemConcept($v));
                    }
                }
            } elseif ($data[self::FIELD_CONCEPT] instanceof FHIRCodeSystemConcept) {
                $this->addConcept($data[self::FIELD_CONCEPT]);
            } else {
                $this->addConcept(new FHIRCodeSystemConcept($data[self::FIELD_CONCEPT]));
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
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this code system when it is referenced
     * in a specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this code system is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the code system is stored on different servers. This is used in
     * [Coding](datatypes.html#Coding).system.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRUri
     */
    public function getUrl(): null|FHIRUri
    {
        return $this->url;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * An absolute URI that is used to identify this code system when it is referenced
     * in a specification, model, design or an instance; also called its canonical
     * identifier. This SHOULD be globally unique and SHOULD be a literal address at
     * which at which an authoritative instance of this code system is (or will be)
     * published. This URL can be the target of a canonical reference. It SHALL remain
     * the same when the code system is stored on different servers. This is used in
     * [Coding](datatypes.html#Coding).system.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRUriPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRUri $url
     * @return static
     */
    public function setUrl(null|string|FHIRUriPrimitive|FHIRUri $url = null): self
    {
        if (null !== $url && !($url instanceof FHIRUri)) {
            $url = new FHIRUri($url);
        }
        $this->_trackValueSet($this->url, $url);
        $this->url = $url;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier(): null|array
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRIdentifier $identifier
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
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A formal identifier that is used to identify this code system when it is
     * represented in other formats, or referenced in a specification, model, design or
     * an instance.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRIdentifier[] $identifier
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the code system when it
     * is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the code system author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. This is used in
     * [Coding](datatypes.html#Coding).version.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getVersion(): null|FHIRString
    {
        return $this->version;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The identifier that is used to identify this version of the code system when it
     * is referenced in a specification, model, design or instance. This is an
     * arbitrary value managed by the code system author and is not expected to be
     * globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a
     * managed version is not available. There is also no expectation that versions can
     * be placed in a lexicographical sequence. This is used in
     * [Coding](datatypes.html#Coding).version.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $version
     * @return static
     */
    public function setVersion(null|string|FHIRStringPrimitive|FHIRString $version = null): self
    {
        if (null !== $version && !($version instanceof FHIRString)) {
            $version = new FHIRString($version);
        }
        $this->_trackValueSet($this->version, $version);
        $this->version = $version;
        return $this;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the code system. This name should be usable
     * as an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getName(): null|FHIRString
    {
        return $this->name;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A natural language name identifying the code system. This name should be usable
     * as an identifier for the module by machine processing applications such as code
     * generation.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $name
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
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getTitle(): null|FHIRString
    {
        return $this->title;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $title
     * @return static
     */
    public function setTitle(null|string|FHIRStringPrimitive|FHIRString $title = null): self
    {
        if (null !== $title && !($title instanceof FHIRString)) {
            $title = new FHIRString($title);
        }
        $this->_trackValueSet($this->title, $title);
        $this->title = $title;
        return $this;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the code system resource was created or
     * revised.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRPublicationStatus
     */
    public function getStatus(): null|FHIRPublicationStatus
    {
        return $this->status;
    }

    /**
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and optionally time) when the code system resource was created or
     * revised.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRPublicationStatus $status
     * @return static
     */
    public function setStatus(null|FHIRPublicationStatus $status = null): self
    {
        if (null === $status) {
            $status = new FHIRPublicationStatus();
        }
        $this->_trackValueSet($this->status, $status);
        $this->status = $status;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this code system is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getExperimental(): null|FHIRBoolean
    {
        return $this->experimental;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A Boolean value to indicate that this code system is authored for testing
     * purposes (or education/evaluation/marketing) and is not intended to be used for
     * genuine usage.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $experimental
     * @return static
     */
    public function setExperimental(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $experimental = null): self
    {
        if (null !== $experimental && !($experimental instanceof FHIRBoolean)) {
            $experimental = new FHIRBoolean($experimental);
        }
        $this->_trackValueSet($this->experimental, $experimental);
        $this->experimental = $experimental;
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
     * The date (and optionally time) when the code system was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the code
     * system changes.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRDateTime
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
     * The date (and optionally time) when the code system was published. The date must
     * change when the business version changes and it must change if the status code
     * changes. In addition, it should change when the substantive content of the code
     * system changes.
     *
     * @param null|string|\DateTimeInterface|\HL7\FHIR\R4\FHIRDateTimePrimitive|\HL7\FHIR\R4\FHIRElement\FHIRDateTime $date
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
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the code system.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRString
     */
    public function getPublisher(): null|FHIRString
    {
        return $this->publisher;
    }

    /**
     * A sequence of Unicode characters
     * Note that FHIR strings SHALL NOT exceed 1MB in size
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The name of the organization or individual that published the code system.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRStringPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRString $publisher
     * @return static
     */
    public function setPublisher(null|string|FHIRStringPrimitive|FHIRString $publisher = null): self
    {
        if (null !== $publisher && !($publisher instanceof FHIRString)) {
            $publisher = new FHIRString($publisher);
        }
        $this->_trackValueSet($this->publisher, $publisher);
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRContactDetail[]
     */
    public function getContact(): null|array
    {
        return $this->contact;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRContactDetail $contact
     * @return static
     */
    public function addContact(null|FHIRContactDetail $contact = null): self
    {
        if (null === $contact) {
            $contact = new FHIRContactDetail();
        }
        $this->_trackValueAdded();
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Specifies contact information for a person or organization.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Contact details to assist a user in finding and communicating with the
     * publisher.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRContactDetail[] $contact
     * @return static
     */
    public function setContact(array $contact = []): self
    {
        if ([] !== $this->contact) {
            $this->_trackValuesRemoved(count($this->contact));
            $this->contact = [];
        }
        if ([] === $contact) {
            return $this;
        }
        foreach($contact as $v) {
            if ($v instanceof FHIRContactDetail) {
                $this->addContact($v);
            } else {
                $this->addContact(new FHIRContactDetail($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the code system from a consumer's
     * perspective.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public function getDescription(): null|FHIRMarkdown
    {
        return $this->description;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A free text natural language description of the code system from a consumer's
     * perspective.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRMarkdownPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown $description
     * @return static
     */
    public function setDescription(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $description = null): self
    {
        if (null !== $description && !($description instanceof FHIRMarkdown)) {
            $description = new FHIRMarkdown($description);
        }
        $this->_trackValueSet($this->description, $description);
        $this->description = $description;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate code system
     * instances.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRUsageContext[]
     */
    public function getUseContext(): null|array
    {
        return $this->useContext;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate code system
     * instances.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRUsageContext $useContext
     * @return static
     */
    public function addUseContext(null|FHIRUsageContext $useContext = null): self
    {
        if (null === $useContext) {
            $useContext = new FHIRUsageContext();
        }
        $this->_trackValueAdded();
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * Specifies clinical/business/etc. metadata that can be used to retrieve, index
     * and/or categorize an artifact. This metadata can either be specific to the
     * applicable population (e.g., age category, DRG) or the specific context of care
     * (e.g., venue, care setting, provider of care).
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The content was developed with a focus and intent of supporting the contexts
     * that are listed. These contexts may be general categories (gender, age, ...) or
     * may be references to specific programs (insurance plans, studies, ...) and may
     * be used to assist with indexing and searching for appropriate code system
     * instances.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRUsageContext[] $useContext
     * @return static
     */
    public function setUseContext(array $useContext = []): self
    {
        if ([] !== $this->useContext) {
            $this->_trackValuesRemoved(count($this->useContext));
            $this->useContext = [];
        }
        if ([] === $useContext) {
            return $this;
        }
        foreach($useContext as $v) {
            if ($v instanceof FHIRUsageContext) {
                $this->addUseContext($v);
            } else {
                $this->addUseContext(new FHIRUsageContext($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction(): null|array
    {
        return $this->jurisdiction;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return static
     */
    public function addJurisdiction(null|FHIRCodeableConcept $jurisdiction = null): self
    {
        if (null === $jurisdiction) {
            $jurisdiction = new FHIRCodeableConcept();
        }
        $this->_trackValueAdded();
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRCodeableConcept[] $jurisdiction
     * @return static
     */
    public function setJurisdiction(array $jurisdiction = []): self
    {
        if ([] !== $this->jurisdiction) {
            $this->_trackValuesRemoved(count($this->jurisdiction));
            $this->jurisdiction = [];
        }
        if ([] === $jurisdiction) {
            return $this;
        }
        foreach($jurisdiction as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addJurisdiction($v);
            } else {
                $this->addJurisdiction(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this code system is needed and why it has been designed as it
     * has.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public function getPurpose(): null|FHIRMarkdown
    {
        return $this->purpose;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Explanation of why this code system is needed and why it has been designed as it
     * has.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRMarkdownPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown $purpose
     * @return static
     */
    public function setPurpose(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $purpose = null): self
    {
        if (null !== $purpose && !($purpose instanceof FHIRMarkdown)) {
            $purpose = new FHIRMarkdown($purpose);
        }
        $this->_trackValueSet($this->purpose, $purpose);
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the code system and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * code system.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown
     */
    public function getCopyright(): null|FHIRMarkdown
    {
        return $this->copyright;
    }

    /**
     * A string that may contain Github Flavored Markdown syntax for optional
     * processing by a mark down presentation engine
     * Systems are not required to have markdown support, so the text should be
     * readable without markdown processing. The markdown syntax is GFM - see
     * https://github.github.com/gfm/
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * A copyright statement relating to the code system and/or its contents. Copyright
     * statements are generally legal restrictions on the use and publishing of the
     * code system.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRMarkdownPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRMarkdown $copyright
     * @return static
     */
    public function setCopyright(null|string|FHIRMarkdownPrimitive|FHIRMarkdown $copyright = null): self
    {
        if (null !== $copyright && !($copyright instanceof FHIRMarkdown)) {
            $copyright = new FHIRMarkdown($copyright);
        }
        $this->_trackValueSet($this->copyright, $copyright);
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If code comparison is case sensitive when codes within this system are compared
     * to each other.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getCaseSensitive(): null|FHIRBoolean
    {
        return $this->caseSensitive;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If code comparison is case sensitive when codes within this system are compared
     * to each other.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $caseSensitive
     * @return static
     */
    public function setCaseSensitive(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $caseSensitive = null): self
    {
        if (null !== $caseSensitive && !($caseSensitive instanceof FHIRBoolean)) {
            $caseSensitive = new FHIRBoolean($caseSensitive);
        }
        $this->_trackValueSet($this->caseSensitive, $caseSensitive);
        $this->caseSensitive = $caseSensitive;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Canonical reference to the value set that contains the entire code system.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCanonical
     */
    public function getValueSet(): null|FHIRCanonical
    {
        return $this->valueSet;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * Canonical reference to the value set that contains the entire code system.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRCanonicalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRCanonical $valueSet
     * @return static
     */
    public function setValueSet(null|string|FHIRCanonicalPrimitive|FHIRCanonical $valueSet = null): self
    {
        if (null !== $valueSet && !($valueSet instanceof FHIRCanonical)) {
            $valueSet = new FHIRCanonical($valueSet);
        }
        $this->_trackValueSet($this->valueSet, $valueSet);
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * The meaning of the hierarchy of concepts in a code system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The meaning of the hierarchy of concepts as represented in this resource.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeSystemHierarchyMeaning
     */
    public function getHierarchyMeaning(): null|FHIRCodeSystemHierarchyMeaning
    {
        return $this->hierarchyMeaning;
    }

    /**
     * The meaning of the hierarchy of concepts in a code system.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The meaning of the hierarchy of concepts as represented in this resource.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeSystemHierarchyMeaning $hierarchyMeaning
     * @return static
     */
    public function setHierarchyMeaning(null|FHIRCodeSystemHierarchyMeaning $hierarchyMeaning = null): self
    {
        if (null === $hierarchyMeaning) {
            $hierarchyMeaning = new FHIRCodeSystemHierarchyMeaning();
        }
        $this->_trackValueSet($this->hierarchyMeaning, $hierarchyMeaning);
        $this->hierarchyMeaning = $hierarchyMeaning;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code system defines a compositional (post-coordination) grammar.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getCompositional(): null|FHIRBoolean
    {
        return $this->compositional;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The code system defines a compositional (post-coordination) grammar.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $compositional
     * @return static
     */
    public function setCompositional(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $compositional = null): self
    {
        if (null !== $compositional && !($compositional instanceof FHIRBoolean)) {
            $compositional = new FHIRBoolean($compositional);
        }
        $this->_trackValueSet($this->compositional, $compositional);
        $this->compositional = $compositional;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This flag is used to signify that the code system does not commit to concept
     * permanence across versions. If true, a version must be specified when
     * referencing this code system.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBoolean
     */
    public function getVersionNeeded(): null|FHIRBoolean
    {
        return $this->versionNeeded;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * This flag is used to signify that the code system does not commit to concept
     * permanence across versions. If true, a version must be specified when
     * referencing this code system.
     *
     * @param null|string|bool|\HL7\FHIR\R4\FHIRBooleanPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRBoolean $versionNeeded
     * @return static
     */
    public function setVersionNeeded(null|string|bool|FHIRBooleanPrimitive|FHIRBoolean $versionNeeded = null): self
    {
        if (null !== $versionNeeded && !($versionNeeded instanceof FHIRBoolean)) {
            $versionNeeded = new FHIRBoolean($versionNeeded);
        }
        $this->_trackValueSet($this->versionNeeded, $versionNeeded);
        $this->versionNeeded = $versionNeeded;
        return $this;
    }

    /**
     * The extent of the content of the code system (the concepts and codes it defines)
     * are represented in a code system resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The extent of the content of the code system (the concepts and codes it defines)
     * are represented in this resource instance.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCodeSystemContentMode
     */
    public function getContent(): null|FHIRCodeSystemContentMode
    {
        return $this->content;
    }

    /**
     * The extent of the content of the code system (the concepts and codes it defines)
     * are represented in a code system resource.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The extent of the content of the code system (the concepts and codes it defines)
     * are represented in this resource instance.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRCodeSystemContentMode $content
     * @return static
     */
    public function setContent(null|FHIRCodeSystemContentMode $content = null): self
    {
        if (null === $content) {
            $content = new FHIRCodeSystemContentMode();
        }
        $this->_trackValueSet($this->content, $content);
        $this->content = $content;
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL of the code system that this code system supplement is adding
     * designations and properties to.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRCanonical
     */
    public function getSupplements(): null|FHIRCanonical
    {
        return $this->supplements;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The canonical URL of the code system that this code system supplement is adding
     * designations and properties to.
     *
     * @param null|string|\HL7\FHIR\R4\FHIRCanonicalPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRCanonical $supplements
     * @return static
     */
    public function setSupplements(null|string|FHIRCanonicalPrimitive|FHIRCanonical $supplements = null): self
    {
        if (null !== $supplements && !($supplements instanceof FHIRCanonical)) {
            $supplements = new FHIRCanonical($supplements);
        }
        $this->_trackValueSet($this->supplements, $supplements);
        $this->supplements = $supplements;
        return $this;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The total number of concepts defined by the code system. Where the code system
     * has a compositional grammar, the basis of this count is defined by the system
     * steward.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRUnsignedInt
     */
    public function getCount(): null|FHIRUnsignedInt
    {
        return $this->count;
    }

    /**
     * An integer with a value that is not negative (e.g. >= 0)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The total number of concepts defined by the code system. Where the code system
     * has a compositional grammar, the basis of this count is defined by the system
     * steward.
     *
     * @param null|string|int|float|\HL7\FHIR\R4\FHIRUnsignedIntPrimitive|\HL7\FHIR\R4\FHIRElement\FHIRUnsignedInt $count
     * @return static
     */
    public function setCount(null|string|int|float|FHIRUnsignedIntPrimitive|FHIRUnsignedInt $count = null): self
    {
        if (null !== $count && !($count instanceof FHIRUnsignedInt)) {
            $count = new FHIRUnsignedInt($count);
        }
        $this->_trackValueSet($this->count, $count);
        $this->count = $count;
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter[]
     */
    public function getFilter(): null|array
    {
        return $this->filter;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter $filter
     * @return static
     */
    public function addFilter(null|FHIRCodeSystemFilter $filter = null): self
    {
        if (null === $filter) {
            $filter = new FHIRCodeSystemFilter();
        }
        $this->_trackValueAdded();
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A filter that can be used in a value set compose statement when selecting
     * concepts using a filter.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemFilter[] $filter
     * @return static
     */
    public function setFilter(array $filter = []): self
    {
        if ([] !== $this->filter) {
            $this->_trackValuesRemoved(count($this->filter));
            $this->filter = [];
        }
        if ([] === $filter) {
            return $this;
        }
        foreach($filter as $v) {
            if ($v instanceof FHIRCodeSystemFilter) {
                $this->addFilter($v);
            } else {
                $this->addFilter(new FHIRCodeSystemFilter($v));
            }
        }
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty[]
     */
    public function getProperty(): null|array
    {
        return $this->property;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty $property
     * @return static
     */
    public function addProperty(null|FHIRCodeSystemProperty $property = null): self
    {
        if (null === $property) {
            $property = new FHIRCodeSystemProperty();
        }
        $this->_trackValueAdded();
        $this->property[] = $property;
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * A property defines an additional slot through which additional information can
     * be provided about a concept.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemProperty[] $property
     * @return static
     */
    public function setProperty(array $property = []): self
    {
        if ([] !== $this->property) {
            $this->_trackValuesRemoved(count($this->property));
            $this->property = [];
        }
        if ([] === $property) {
            return $this;
        }
        foreach($property as $v) {
            if ($v instanceof FHIRCodeSystemProperty) {
                $this->addProperty($v);
            } else {
                $this->addProperty(new FHIRCodeSystemProperty($v));
            }
        }
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meanings of the hierarchical relationships are.
     *
     * @return null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public function getConcept(): null|array
    {
        return $this->concept;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meanings of the hierarchical relationships are.
     *
     * @param null|\HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept $concept
     * @return static
     */
    public function addConcept(null|FHIRCodeSystemConcept $concept = null): self
    {
        if (null === $concept) {
            $concept = new FHIRCodeSystemConcept();
        }
        $this->_trackValueAdded();
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * The CodeSystem resource is used to declare the existence of and describe a code
     * system or code system supplement and its key properties, and optionally define a
     * part or all of its content.
     *
     * Concepts that are in the code system. The concept definitions are inherently
     * hierarchical, but the definitions must be consulted to determine what the
     * meanings of the hierarchical relationships are.
     *
     * @param \HL7\FHIR\R4\FHIRElement\FHIRBackboneElement\FHIRCodeSystem\FHIRCodeSystemConcept[] $concept
     * @return static
     */
    public function setConcept(array $concept = []): self
    {
        if ([] !== $this->concept) {
            $this->_trackValuesRemoved(count($this->concept));
            $this->concept = [];
        }
        if ([] === $concept) {
            return $this;
        }
        foreach($concept as $v) {
            if ($v instanceof FHIRCodeSystemConcept) {
                $this->addConcept($v);
            } else {
                $this->addConcept(new FHIRCodeSystemConcept($v));
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
        if (null !== ($v = $this->getUrl())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_URL] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getName())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_NAME] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getTitle())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_TITLE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_EXPERIMENTAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDate())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DATE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPublisher())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PUBLISHER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONTACT, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DESCRIPTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_USE_CONTEXT, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_JURISDICTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PURPOSE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COPYRIGHT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCaseSensitive())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CASE_SENSITIVE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getValueSet())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VALUE_SET] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getHierarchyMeaning())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_HIERARCHY_MEANING] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCompositional())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COMPOSITIONAL] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getVersionNeeded())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_VERSION_NEEDED] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getContent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_CONTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSupplements())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUPPLEMENTS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getCount())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COUNT] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_FILTER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PROPERTY, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CONCEPT, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_URL])) {
            $v = $this->getUrl();
            foreach($validationRules[self::FIELD_URL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_URL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_URL])) {
                        $errs[self::FIELD_URL] = [];
                    }
                    $errs[self::FIELD_URL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION])) {
            $v = $this->getVersion();
            foreach($validationRules[self::FIELD_VERSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_VERSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION])) {
                        $errs[self::FIELD_VERSION] = [];
                    }
                    $errs[self::FIELD_VERSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NAME])) {
            $v = $this->getName();
            foreach($validationRules[self::FIELD_NAME] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_NAME, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NAME])) {
                        $errs[self::FIELD_NAME] = [];
                    }
                    $errs[self::FIELD_NAME][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TITLE])) {
            $v = $this->getTitle();
            foreach($validationRules[self::FIELD_TITLE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_TITLE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TITLE])) {
                        $errs[self::FIELD_TITLE] = [];
                    }
                    $errs[self::FIELD_TITLE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXPERIMENTAL])) {
            $v = $this->getExperimental();
            foreach($validationRules[self::FIELD_EXPERIMENTAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_EXPERIMENTAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXPERIMENTAL])) {
                        $errs[self::FIELD_EXPERIMENTAL] = [];
                    }
                    $errs[self::FIELD_EXPERIMENTAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DATE])) {
            $v = $this->getDate();
            foreach($validationRules[self::FIELD_DATE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_DATE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DATE])) {
                        $errs[self::FIELD_DATE] = [];
                    }
                    $errs[self::FIELD_DATE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PUBLISHER])) {
            $v = $this->getPublisher();
            foreach($validationRules[self::FIELD_PUBLISHER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_PUBLISHER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PUBLISHER])) {
                        $errs[self::FIELD_PUBLISHER] = [];
                    }
                    $errs[self::FIELD_PUBLISHER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTACT])) {
            $v = $this->getContact();
            foreach($validationRules[self::FIELD_CONTACT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_CONTACT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTACT])) {
                        $errs[self::FIELD_CONTACT] = [];
                    }
                    $errs[self::FIELD_CONTACT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DESCRIPTION])) {
            $v = $this->getDescription();
            foreach($validationRules[self::FIELD_DESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_DESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DESCRIPTION])) {
                        $errs[self::FIELD_DESCRIPTION] = [];
                    }
                    $errs[self::FIELD_DESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_USE_CONTEXT])) {
            $v = $this->getUseContext();
            foreach($validationRules[self::FIELD_USE_CONTEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_USE_CONTEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_USE_CONTEXT])) {
                        $errs[self::FIELD_USE_CONTEXT] = [];
                    }
                    $errs[self::FIELD_USE_CONTEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_JURISDICTION])) {
            $v = $this->getJurisdiction();
            foreach($validationRules[self::FIELD_JURISDICTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_JURISDICTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_JURISDICTION])) {
                        $errs[self::FIELD_JURISDICTION] = [];
                    }
                    $errs[self::FIELD_JURISDICTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PURPOSE])) {
            $v = $this->getPurpose();
            foreach($validationRules[self::FIELD_PURPOSE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_PURPOSE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PURPOSE])) {
                        $errs[self::FIELD_PURPOSE] = [];
                    }
                    $errs[self::FIELD_PURPOSE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COPYRIGHT])) {
            $v = $this->getCopyright();
            foreach($validationRules[self::FIELD_COPYRIGHT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_COPYRIGHT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COPYRIGHT])) {
                        $errs[self::FIELD_COPYRIGHT] = [];
                    }
                    $errs[self::FIELD_COPYRIGHT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CASE_SENSITIVE])) {
            $v = $this->getCaseSensitive();
            foreach($validationRules[self::FIELD_CASE_SENSITIVE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_CASE_SENSITIVE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CASE_SENSITIVE])) {
                        $errs[self::FIELD_CASE_SENSITIVE] = [];
                    }
                    $errs[self::FIELD_CASE_SENSITIVE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VALUE_SET])) {
            $v = $this->getValueSet();
            foreach($validationRules[self::FIELD_VALUE_SET] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_VALUE_SET, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VALUE_SET])) {
                        $errs[self::FIELD_VALUE_SET] = [];
                    }
                    $errs[self::FIELD_VALUE_SET][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_HIERARCHY_MEANING])) {
            $v = $this->getHierarchyMeaning();
            foreach($validationRules[self::FIELD_HIERARCHY_MEANING] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_HIERARCHY_MEANING, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_HIERARCHY_MEANING])) {
                        $errs[self::FIELD_HIERARCHY_MEANING] = [];
                    }
                    $errs[self::FIELD_HIERARCHY_MEANING][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COMPOSITIONAL])) {
            $v = $this->getCompositional();
            foreach($validationRules[self::FIELD_COMPOSITIONAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_COMPOSITIONAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COMPOSITIONAL])) {
                        $errs[self::FIELD_COMPOSITIONAL] = [];
                    }
                    $errs[self::FIELD_COMPOSITIONAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_VERSION_NEEDED])) {
            $v = $this->getVersionNeeded();
            foreach($validationRules[self::FIELD_VERSION_NEEDED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_VERSION_NEEDED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_VERSION_NEEDED])) {
                        $errs[self::FIELD_VERSION_NEEDED] = [];
                    }
                    $errs[self::FIELD_VERSION_NEEDED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTENT])) {
            $v = $this->getContent();
            foreach($validationRules[self::FIELD_CONTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_CONTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTENT])) {
                        $errs[self::FIELD_CONTENT] = [];
                    }
                    $errs[self::FIELD_CONTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPLEMENTS])) {
            $v = $this->getSupplements();
            foreach($validationRules[self::FIELD_SUPPLEMENTS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_SUPPLEMENTS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPLEMENTS])) {
                        $errs[self::FIELD_SUPPLEMENTS] = [];
                    }
                    $errs[self::FIELD_SUPPLEMENTS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COUNT])) {
            $v = $this->getCount();
            foreach($validationRules[self::FIELD_COUNT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_COUNT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COUNT])) {
                        $errs[self::FIELD_COUNT] = [];
                    }
                    $errs[self::FIELD_COUNT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_FILTER])) {
            $v = $this->getFilter();
            foreach($validationRules[self::FIELD_FILTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_FILTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_FILTER])) {
                        $errs[self::FIELD_FILTER] = [];
                    }
                    $errs[self::FIELD_FILTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PROPERTY])) {
            $v = $this->getProperty();
            foreach($validationRules[self::FIELD_PROPERTY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_PROPERTY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PROPERTY])) {
                        $errs[self::FIELD_PROPERTY] = [];
                    }
                    $errs[self::FIELD_PROPERTY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONCEPT])) {
            $v = $this->getConcept();
            foreach($validationRules[self::FIELD_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_CODE_SYSTEM, self::FIELD_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONCEPT])) {
                        $errs[self::FIELD_CONCEPT] = [];
                    }
                    $errs[self::FIELD_CONCEPT][$rule] = $err;
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
     * @param null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem $type
     * @param null|int|\HL7\FHIR\R4\PHPFHIRXmlSerializableConfigInterface $config XML serialization config.  Supports an integer value interpreted as libxml opts for backwards compatibility.
     * @return null|\HL7\FHIR\R4\FHIRResource\FHIRDomainResource\FHIRCodeSystem
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
        } else if (!($type instanceof FHIRCodeSystem)) {
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
            if (self::FIELD_URL === $n->nodeName) {
                $type->setUrl(FHIRUri::xmlUnserialize($n));
            } elseif (self::FIELD_IDENTIFIER === $n->nodeName) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION === $n->nodeName) {
                $type->setVersion(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_NAME === $n->nodeName) {
                $type->setName(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_TITLE === $n->nodeName) {
                $type->setTitle(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_STATUS === $n->nodeName) {
                $type->setStatus(FHIRPublicationStatus::xmlUnserialize($n));
            } elseif (self::FIELD_EXPERIMENTAL === $n->nodeName) {
                $type->setExperimental(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_DATE === $n->nodeName) {
                $type->setDate(FHIRDateTime::xmlUnserialize($n));
            } elseif (self::FIELD_PUBLISHER === $n->nodeName) {
                $type->setPublisher(FHIRString::xmlUnserialize($n));
            } elseif (self::FIELD_CONTACT === $n->nodeName) {
                $type->addContact(FHIRContactDetail::xmlUnserialize($n));
            } elseif (self::FIELD_DESCRIPTION === $n->nodeName) {
                $type->setDescription(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_USE_CONTEXT === $n->nodeName) {
                $type->addUseContext(FHIRUsageContext::xmlUnserialize($n));
            } elseif (self::FIELD_JURISDICTION === $n->nodeName) {
                $type->addJurisdiction(FHIRCodeableConcept::xmlUnserialize($n));
            } elseif (self::FIELD_PURPOSE === $n->nodeName) {
                $type->setPurpose(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_COPYRIGHT === $n->nodeName) {
                $type->setCopyright(FHIRMarkdown::xmlUnserialize($n));
            } elseif (self::FIELD_CASE_SENSITIVE === $n->nodeName) {
                $type->setCaseSensitive(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_VALUE_SET === $n->nodeName) {
                $type->setValueSet(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_HIERARCHY_MEANING === $n->nodeName) {
                $type->setHierarchyMeaning(FHIRCodeSystemHierarchyMeaning::xmlUnserialize($n));
            } elseif (self::FIELD_COMPOSITIONAL === $n->nodeName) {
                $type->setCompositional(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_VERSION_NEEDED === $n->nodeName) {
                $type->setVersionNeeded(FHIRBoolean::xmlUnserialize($n));
            } elseif (self::FIELD_CONTENT === $n->nodeName) {
                $type->setContent(FHIRCodeSystemContentMode::xmlUnserialize($n));
            } elseif (self::FIELD_SUPPLEMENTS === $n->nodeName) {
                $type->setSupplements(FHIRCanonical::xmlUnserialize($n));
            } elseif (self::FIELD_COUNT === $n->nodeName) {
                $type->setCount(FHIRUnsignedInt::xmlUnserialize($n));
            } elseif (self::FIELD_FILTER === $n->nodeName) {
                $type->addFilter(FHIRCodeSystemFilter::xmlUnserialize($n));
            } elseif (self::FIELD_PROPERTY === $n->nodeName) {
                $type->addProperty(FHIRCodeSystemProperty::xmlUnserialize($n));
            } elseif (self::FIELD_CONCEPT === $n->nodeName) {
                $type->addConcept(FHIRCodeSystemConcept::xmlUnserialize($n));
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
        $n = $element->attributes->getNamedItem(self::FIELD_URL);
        if (null !== $n) {
            $pt = $type->getUrl();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setUrl($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VERSION);
        if (null !== $n) {
            $pt = $type->getVersion();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVersion($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_TITLE);
        if (null !== $n) {
            $pt = $type->getTitle();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setTitle($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_EXPERIMENTAL);
        if (null !== $n) {
            $pt = $type->getExperimental();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setExperimental($n->nodeValue);
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
        $n = $element->attributes->getNamedItem(self::FIELD_PUBLISHER);
        if (null !== $n) {
            $pt = $type->getPublisher();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPublisher($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_DESCRIPTION);
        if (null !== $n) {
            $pt = $type->getDescription();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setDescription($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_PURPOSE);
        if (null !== $n) {
            $pt = $type->getPurpose();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setPurpose($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COPYRIGHT);
        if (null !== $n) {
            $pt = $type->getCopyright();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCopyright($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_CASE_SENSITIVE);
        if (null !== $n) {
            $pt = $type->getCaseSensitive();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCaseSensitive($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VALUE_SET);
        if (null !== $n) {
            $pt = $type->getValueSet();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setValueSet($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COMPOSITIONAL);
        if (null !== $n) {
            $pt = $type->getCompositional();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCompositional($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_VERSION_NEEDED);
        if (null !== $n) {
            $pt = $type->getVersionNeeded();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setVersionNeeded($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_SUPPLEMENTS);
        if (null !== $n) {
            $pt = $type->getSupplements();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setSupplements($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_COUNT);
        if (null !== $n) {
            $pt = $type->getCount();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setCount($n->nodeValue);
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
            $dom->loadXML($this->_getFHIRXMLElementDefinition('CodeSystem'), $libxmlOpts);
            $element = $dom->documentElement;
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getUrl())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_URL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
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
        if (null !== ($v = $this->getVersion())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getName())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_NAME);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getTitle())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_TITLE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getStatus())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_STATUS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getExperimental())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_EXPERIMENTAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getDate())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DATE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getPublisher())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PUBLISHER);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getContact())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONTACT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getDescription())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_DESCRIPTION);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getUseContext())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_USE_CONTEXT);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_JURISDICTION);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_PURPOSE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCopyright())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COPYRIGHT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCaseSensitive())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CASE_SENSITIVE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getValueSet())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VALUE_SET);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getHierarchyMeaning())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_HIERARCHY_MEANING);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCompositional())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COMPOSITIONAL);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getVersionNeeded())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_VERSION_NEEDED);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getContent())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_CONTENT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getSupplements())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_SUPPLEMENTS);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getCount())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_COUNT);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if ([] !== ($vs = $this->getFilter())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_FILTER);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_PROPERTY);
                $element->appendChild($telement);
                $v->xmlSerialize($telement);
            }
        }
        if ([] !== ($vs = $this->getConcept())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $telement = $element->ownerDocument->createElement(self::FIELD_CONCEPT);
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
        if (null !== ($v = $this->getUrl())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_URL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUri::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_URL_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $out->{self::FIELD_IDENTIFIER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_IDENTIFIER}[] = $v;
            }
        }
        if (null !== ($v = $this->getVersion())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_EXT} = $ext;
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
        if (null !== ($v = $this->getTitle())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_TITLE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_TITLE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_STATUS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRPublicationStatus::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_STATUS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getExperimental())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_EXPERIMENTAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_EXPERIMENTAL_EXT} = $ext;
            }
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
        if (null !== ($v = $this->getPublisher())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PUBLISHER} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRString::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PUBLISHER_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getContact())) {
            $out->{self::FIELD_CONTACT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONTACT}[] = $v;
            }
        }
        if (null !== ($v = $this->getDescription())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_DESCRIPTION} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_DESCRIPTION_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getUseContext())) {
            $out->{self::FIELD_USE_CONTEXT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_USE_CONTEXT}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getJurisdiction())) {
            $out->{self::FIELD_JURISDICTION} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_JURISDICTION}[] = $v;
            }
        }
        if (null !== ($v = $this->getPurpose())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_PURPOSE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_PURPOSE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCopyright())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COPYRIGHT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRMarkdown::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COPYRIGHT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCaseSensitive())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CASE_SENSITIVE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CASE_SENSITIVE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getValueSet())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VALUE_SET} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VALUE_SET_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getHierarchyMeaning())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_HIERARCHY_MEANING} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCodeSystemHierarchyMeaning::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_HIERARCHY_MEANING_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCompositional())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COMPOSITIONAL} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COMPOSITIONAL_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getVersionNeeded())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_VERSION_NEEDED} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRBoolean::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_VERSION_NEEDED_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getContent())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_CONTENT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCodeSystemContentMode::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_CONTENT_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getSupplements())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_SUPPLEMENTS} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRCanonical::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_SUPPLEMENTS_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getCount())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_COUNT} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRUnsignedInt::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_COUNT_EXT} = $ext;
            }
        }
        if ([] !== ($vs = $this->getFilter())) {
            $out->{self::FIELD_FILTER} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_FILTER}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getProperty())) {
            $out->{self::FIELD_PROPERTY} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_PROPERTY}[] = $v;
            }
        }
        if ([] !== ($vs = $this->getConcept())) {
            $out->{self::FIELD_CONCEPT} = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $out->{self::FIELD_CONCEPT}[] = $v;
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