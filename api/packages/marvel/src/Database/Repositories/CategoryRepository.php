<?php


namespace Marvel\Database\Repositories;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Marvel\Database\Models\Category;
use Marvel\Http\Requests\CategoryCreateRequest;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;



class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'        => 'like',
        'parent',
        'language',
        'type.slug',
    ];

    protected $dataArray = [
        'name',
        'slug',
        'type_id',
        'icon',
        'image',
        'details',
        'language',
        'parent',
    ];
    protected $uploadPath = 'categories/';

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
        return Category::class;
    }



    public function saveCategory(Request $request)
    {
        $data = $request->only($this->dataArray);
        $data['slug'] = $this->makeSlug($request);

        // multiple image upload
        if ($request->hasFile('image')) {
            $images = [];
            foreach ($request->file('image') as $file) {
                $images[] = $this->uploadImage($file);
            }
            $data['image'] = $images; // array of images (JSON)
        }

        $category = new Category();
        $category->fill($data);
        $category->save();

        return $category;
    }

    protected function uploadImage($image)
    {
        $uploadPath = public_path('/assets/uploads/categories/');

        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0777, true, true);
        }

        $filename = Str::random(10) . '_' . time() . '.' . $image->getClientOriginalExtension();
        $image->move($uploadPath, $filename);

        return [
            'id' => uniqid(),
            'original' => '/assets/uploads/categories/' . $filename,
        ];
    }







    public function updateCategory(Request $request, $category)
    {
        $data = $request->only($this->dataArray);

        // slug পরিবর্তন হলে নতুন করে slug বানাও
        if (!empty($request->slug) && $request->slug != $category->slug) {
            $data['slug'] = $this->makeSlug($request);
        }

        // নতুন ইমেজ থাকলে
        if ($request->hasFile('image')) {

            // পুরনো ইমেজ ডিলিট
            if (!empty($category->image)) {
                $oldImages = is_array($category->image) ? $category->image : [$category->image];
                foreach ($oldImages as $oldImage) {
                    if (isset($oldImage['original'])) {
                        // Upload path অনুযায়ী ঠিক path set করা
                        $oldImagePath = public_path('/assets/uploads/categories/' . basename($oldImage['original']));
                        if (File::exists($oldImagePath)) {
                            File::delete($oldImagePath);
                        }
                    }
                }
            }

            // নতুন ইমেজ আপলোড
            $files = $request->file('image');
            if (!is_array($files)) {
                $files = [$files]; // single file কে array বানাও
            }

            $images = [];
            foreach ($files as $file) {
                $images[] = $this->uploadImage($file);
            }

            // যদি single image হয়, শুধু first element রাখো
            $data['image'] = count($images) === 1 ? $images[0] : $images;
        }

        // ডাটাবেজে আপডেট
        $category->update($data);

        return $this->findOrFail($category->id);
    }










}
