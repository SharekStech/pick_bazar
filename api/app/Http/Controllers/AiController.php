<?php

namespace App\Http\Controllers;

use Marvel\Facades\Ai;
use Marvel\Exceptions\MarvelException;
use Marvel\Http\Controllers\CoreController;
use Marvel\Http\Requests\AiDescriptionRequest;

class AiController extends CoreController
{

    public function generateDescription(AiDescriptionRequest $request): mixed
    {
        try {
            return Ai::generateDescription($request);
        } catch (MarvelException $e) {
            throw new MarvelException(SOMETHING_WENT_WRONG, $e->getMessage());
        }
    }
}
