<?php

declare(strict_types=1);

namespace My\OpenApiBundle\Attribute\MyOpenApi\Response;

use My\OpenApiBundle\Attribute\MyOpenApi\MyOpenApiResponse;
use My\OpenApiBundle\Serialization\Model\Error;
use Symfony\Component\HttpFoundation\Response;

/**
 * This class is used to represent an error response.
 */
class ErrorResponse extends MyOpenApiResponse
{
    /**
     * @param array<string> $groups
     */
    public function __construct(
        array  $groups = [],
        int    $responseCode = Response::HTTP_UNPROCESSABLE_ENTITY,
        string $description = 'Payload validation failed',
    ) {
        parent::__construct(
            description: $description,
            responseClassFqcn: Error::class,
            responseCode: $responseCode,
            groups: $groups,
            asArray: true
        );
    }
}
