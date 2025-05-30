<?php

declare(strict_types=1);

/**
 * Copyright OpenSearch Contributors
 * SPDX-License-Identifier: Apache-2.0
 *
 * OpenSearch PHP client
 *
 * @link      https://github.com/opensearch-project/opensearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */

namespace OpenSearch\Common\Exceptions;

use OpenSearch\Exception\NotFoundHttpException;

@trigger_error(
    // @phpstan-ignore classConstant.deprecatedClass
    Missing404Exception::class . ' is deprecated in 2.4.0 and will be removed in 3.0.0. Use \OpenSearch\Exception\NotFoundHttpException instead.',
    E_USER_DEPRECATED
);

/**
 * @deprecated in 2.4.0 and will be removed in 3.0.0.
 *
 * @see \OpenSearch\Exception\NotFoundHttpException
 */
class Missing404Exception extends NotFoundHttpException
{
}
