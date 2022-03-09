<?php

namespace Kleetec\LaravelCore;


class BaseService  {

    function toResponse(KTCRepositoryResponse $repositoryResponse) {
        return new KTCServiceResponse($repositoryResponse->success, 
                                      $repositoryResponse->code,
                                      $repositoryResponse->message,
                                      $repositoryResponse->data);
    }

}
