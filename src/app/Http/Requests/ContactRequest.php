<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
          'last_name' => ['required'],
          'first_name' => ['required'],
          'gender' => ['required'],
          'email' => ['required', 'email'],
          'tell' => ['required', 'numeric', 'max:5'],
          'address' => ['required'],
          'detail' => ['required'],
          'content' => ['required','max:120'],
        ];
    }
         public function messages()
     {
         return [
            'last_name.required' => '性を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'tell.required' => '電話番号を入力してください',
            'tell.numeric' => '電話番号を数字で入力してください',
            'tell.max:5' => '電話番号を５桁までの数字で入力してください',
            'address.required'=> '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を入力してください',
            'content.required' => 'お問い合わせの内容を入力してください',
            'content.max:120' => 'お問い合わせ内容は120文字以内で入力してください',
         ];
     }
}
