<?php

declare(strict_types=1);

namespace My\OpenApiBundle\Attribute\MyOpenApi\Response;

use Symfony\Component\HttpFoundation\Response;
use My\OpenApiBundle\Attribute\MyOpenApi\MyOpenApiResponse;

class SuccessResponse extends MyOpenApiResponse
{
    /**
     * @param array<string> $groups
     */
    public function __construct(
        string $responseClassFqcn,
        array  $groups = [],
        bool   $asArray = false,
        int    $responseCode = Response::HTTP_OK,
        string $description = 'Successful response',
    ) {
        parent::__construct(
            description: $description,
            responseClassFqcn: $responseClassFqcn,
            responseCode: $responseCode,
            groups: $groups,
            asArray: $asArray
        );
    }
}
