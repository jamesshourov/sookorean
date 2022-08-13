<?php //9d91acbcb1c090d04bfeeb705cea1d2e
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Carrot;
    use App\Models\Category;
    use App\Models\User;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method Carrot|null getOrPut($key, $value)
     * @method Carrot|$this shift(int $count = 1)
     * @method Carrot|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Carrot|$this pop(int $count = 1)
     * @method Carrot|null pull($key, \Closure $default = null)
     * @method Carrot|null last(callable $callback = null, \Closure $default = null)
     * @method Carrot|$this random(callable|int|null $number = null)
     * @method Carrot|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Carrot|null get($key, \Closure $default = null)
     * @method Carrot|null first(callable $callback = null, \Closure $default = null)
     * @method Carrot|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Carrot|null find($key, $default = null)
     * @method Carrot[] all()
     */
    class _IH_Carrot_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Carrot[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Carrot_QB whereId($value)
     * @method _IH_Carrot_QB whereImage($value)
     * @method _IH_Carrot_QB whereTitleEnglish($value)
     * @method _IH_Carrot_QB whereTitleJapanese($value)
     * @method _IH_Carrot_QB whereTitleFrench($value)
     * @method _IH_Carrot_QB whereTitleSpanish($value)
     * @method _IH_Carrot_QB whereTitleArabic($value)
     * @method _IH_Carrot_QB whereDescriptionEnglish($value)
     * @method _IH_Carrot_QB whereDescriptionJapanese($value)
     * @method _IH_Carrot_QB whereDescriptionFrench($value)
     * @method _IH_Carrot_QB whereDescriptionSpanish($value)
     * @method _IH_Carrot_QB whereDescriptionArabic($value)
     * @method _IH_Carrot_QB wherePrice($value)
     * @method _IH_Carrot_QB whereCreatedAt($value)
     * @method _IH_Carrot_QB whereUpdatedAt($value)
     * @method Carrot baseSole(array|string $columns = ['*'])
     * @method Carrot create(array $attributes = [])
     * @method _IH_Carrot_C|Carrot[] cursor()
     * @method Carrot|null|_IH_Carrot_C|Carrot[] find($id, array|string $columns = ['*'])
     * @method _IH_Carrot_C|Carrot[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Carrot|_IH_Carrot_C|Carrot[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Carrot|_IH_Carrot_C|Carrot[] findOrFail($id, array|string $columns = ['*'])
     * @method Carrot|_IH_Carrot_C|Carrot[] findOrNew($id, array|string $columns = ['*'])
     * @method Carrot first(array|string $columns = ['*'])
     * @method Carrot firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Carrot firstOrCreate(array $attributes = [], array $values = [])
     * @method Carrot firstOrFail(array|string $columns = ['*'])
     * @method Carrot firstOrNew(array $attributes = [], array $values = [])
     * @method Carrot firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Carrot forceCreate(array $attributes)
     * @method _IH_Carrot_C|Carrot[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Carrot_C|Carrot[] get(array|string $columns = ['*'])
     * @method Carrot getModel()
     * @method Carrot[] getModels(array|string $columns = ['*'])
     * @method _IH_Carrot_C|Carrot[] hydrate(array $items)
     * @method Carrot make(array $attributes = [])
     * @method Carrot newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Carrot[]|_IH_Carrot_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Carrot[]|_IH_Carrot_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Carrot sole(array|string $columns = ['*'])
     * @method Carrot updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Carrot_QB extends _BaseBuilder {}

    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereImage($value)
     * @method _IH_Category_QB whereTitleEnglish($value)
     * @method _IH_Category_QB whereTitleJapanese($value)
     * @method _IH_Category_QB whereTitleFrench($value)
     * @method _IH_Category_QB whereTitleSpanish($value)
     * @method _IH_Category_QB whereTitleArabic($value)
     * @method _IH_Category_QB whereDescriptionEnglish($value)
     * @method _IH_Category_QB whereDescriptionJapanese($value)
     * @method _IH_Category_QB whereDescriptionFrench($value)
     * @method _IH_Category_QB whereDescriptionSpanish($value)
     * @method _IH_Category_QB whereDescriptionArabic($value)
     * @method _IH_Category_QB whereBackgroundColor($value)
     * @method _IH_Category_QB whereCreatedAt($value)
     * @method _IH_Category_QB whereUpdatedAt($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Category_QB extends _BaseBuilder {}

    /**
     * @method User|null getOrPut($key, $value)
     * @method User|$this shift(int $count = 1)
     * @method User|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull($key, \Closure $default = null)
     * @method User|null last(callable $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null)
     * @method User|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method User|null get($key, \Closure $default = null)
     * @method User|null first(callable $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @return User[][]
         */
        public function chunk($size)
        {
            return [];
        }
    }

    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereProfilePic($value)
     * @method _IH_User_QB whereProfilePicType($value)
     * @method _IH_User_QB whereDateOfBirth($value)
     * @method _IH_User_QB whereKoreanLevel($value)
     * @method _IH_User_QB whereCarrotPoints($value)
     * @method _IH_User_QB whereSocialType($value)
     * @method _IH_User_QB whereSocialId($value)
     * @method _IH_User_QB whereDeviceType($value)
     * @method _IH_User_QB whereDeviceToken($value)
     * @method _IH_User_QB wherePremium($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRole($value)
     * @method _IH_User_QB whereStatus($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method User baseSole(array|string $columns = ['*'])
     * @method User create(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User first(array|string $columns = ['*'])
     * @method User firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_User_QB extends _BaseBuilder {}
}
