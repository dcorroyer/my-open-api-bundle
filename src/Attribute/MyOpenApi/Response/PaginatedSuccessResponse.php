<?php

declare(strict_types=1);

namespace My\OpenApiBundle\Attribute\MyOpenApi\Response;

use My\OpenApiBundle\Serialization\Model\PaginatedListMetadata;
use Symfony\Component\HttpFoundation\Response;
use My\OpenApiBundle\Attribute\MyOpenApi\MyOpenApiResponse;

class PaginatedSuccessResponse extends MyOpenApiResponse
{
    /**
     * @param array<string> $groups
     */
    public function __construct(
        string $responseClassFqcn,
        array  $groups = [],
        int    $responseCode = Response::HTTP_OK,
        string $description = 'Successful paginated response',
    ) {
        parent::__construct(
            description: $description,
            responseClassFqcn: $responseClassFqcn,
            responseCode: $responseCode,
            groups: $groups,
            asArray: true,
            metaClassFqcn: PaginatedListMetadata::class,
        );
    }
}
