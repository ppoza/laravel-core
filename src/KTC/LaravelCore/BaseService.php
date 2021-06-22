<?php

namespace KTC\LaravelCore;


class BaseService  {

    function toResponse(RepositoryResponse $repositoryResponse) {
        return new ServiceResponse($repositoryResponse->success, 
                                    $repositoryResponse->code,
                                    $repositoryResponse->message,
                                    $repositoryResponse->data);
    }

}
