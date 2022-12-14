<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'slug' => 'unique:albums',
            'cover' => 'required|image|mimes:jpeg,jpg,png,gif',
            'songs' =>'required',
            'released_date' => 'required|date',
            'publish_date' => 'date',
            'published'=>'required',
            'artist_id' => 'exists:artists,id|required',
            'duration_hours'=>'required',
            'duration_minutes'=>'required',
            'duration_seconds'=>'required',
            'tags'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'پر کردن نام آلبوم ضروری است!',
            'slug.unique' => 'اسلاگ تکراری است و قبلا استفاده شده است!',
            'name.max' => 'نام آلبوم حدااکثر می تواند ۵۰ کاراکتر باشد!',
            'cover.image' => 'فایل انتخاب شده یک تصویر نمی باشد!',
            'cover.mimes' => 'تصویر انتخاب شده باید پسوند مجاز داشته باشد. (jpg, jpeg, png)',
            'cover.required'=>'افزودن کاور برای آلبوم اجباری است!',
            'cover.uploaded' => 'فایل تصویر به درستی آپلود نشد!',
            'released_date.required' => 'تاریخ انتشار را انتخاب نمایید!',
            'released_date.date' => 'تاریخ را به درستی وارد نمایید!',
            'artist_id.required'=> 'یک هنرمند را انتخاب نمایید!',
            'artist_id.exists' => 'یک هنرمند را از لیست انتخاب نمایید!',
            'duration_hours.required' => 'ساعت را وارد نمایید! (از صفر)',
            'duration_minutes.required' => 'دقیقه را وارد نمایید! (از صفر الی شصت)',
            'duration_seconds.required' => 'ثانیه را وارد نمایید! (از صفر الی شصت)',
            'songs.required' => 'انتخاب حداقل یکی موسیقی برای البوم اجباری است.',
            'tags.required'=>'انتخاب ژانر برای آلبوم اجباری است!',
            // 'publish_date.required' => 'تاریخ انتشار خودکار را انتخاب نمایید!',
            'publish_date.date' => 'تاریخ را به درستی وارد نمایید!',
            'published'=>'وضعیت آلبوم را مشخص نمایید!'
        ];
    }
}
