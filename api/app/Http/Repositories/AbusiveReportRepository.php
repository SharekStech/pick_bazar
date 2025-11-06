<?php

namespace App\Http\Repositories;

use Exception;
use App\Models\AbusiveReport;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

use App\Http\Repositories\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class AbusiveReportRepository extends BaseRepository
{
    /**
     * @var array[]
     */
    protected $dataArray = [
        'user_id',
        'model_type',
        'model_id',
        'message'
    ];

    public function boot()
    {
        try {
            $this->pushCriteria(app(RequestCriteria::class));
        } catch (RepositoryException $e) {
            //
        }
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return AbusiveReport::class;
    }
    /**
     * @param $request
     * @return LengthAwarePaginator|JsonResponse|Collection|mixed
     */
    public function storeAbusiveReport($request, $model)
    {
        try {
            $model_id   = $request['model_id'];
            $model_type = $request['model_type'];
            $model_name = "App\\Models\\{$model_type}";
            $isAbusiveReportExist = $this->where('model_id', $model_id)->where('model_type', $model_name)->exists();
            if ($isAbusiveReportExist) {
                throw new BadRequestHttpException(YOU_HAVE_ALREADY_GIVEN_ABUSIVE_REPORT_FOR_THIS);
            }
            return $model->abusive_reports()->create($request->only($this->dataArray));
        } catch (Exception $th) {
            throw new HttpException(400, COULD_NOT_CREATE_THE_RESOURCE);
        }
    }
}
