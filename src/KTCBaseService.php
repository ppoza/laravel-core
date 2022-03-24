<?php

namespace Kleetec\LaravelCore;


class KTCBaseService  {

    function toResponse(KTCRepositoryResponse $repositoryResponse) {
        return new KTCServiceResponse($repositoryResponse->success, 
                                      $repositoryResponse->code,
                                      $repositoryResponse->message,
                                      $repositoryResponse->data);
    }

}
