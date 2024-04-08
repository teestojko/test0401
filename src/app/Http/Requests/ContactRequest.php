<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// これの後にrules()を記述する
class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /**
 * このメソッドは、リクエストが特定のアクションやリソースに対して許可されているかどうかを決定します。
 * このメソッドが true を返す場合、リクエストは許可され、指定されたアクションやリソースにアクセスできます。
 * このメソッドが false を返す場合、リクエストは拒否され、指定されたアクションやリソースにアクセスできません。
 * この場合、アプリケーションの他の部分で処理される可能性があります。
 */
    public function authorize()
    {
     // この例では、常に true を返しています。
    // これは、すべてのリクエストを許可していることを意味します。
    // 実際のアプリケーションでは、必要に応じて条件を追加し、リクエストを適切に許可または拒否するロジックを実装します。
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
          'tell' => ['required', 'numeric'],
          'tell1' => ['required', 'numeric'],
          'tell2' => ['required', 'numeric'],
          'address' => ['required'],
          'content' => ['required'],
          'detail' => ['required','max:120'],
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
            'tell1.required' => '電話番号を入力してください',
            'tell1.numeric' => '電話番号を数字で入力してください',
            'tell2.required' => '電話番号を入力してください',
            'tell2.numeric' => '電話番号を数字で入力してください',
            'address.required'=> '住所を入力してください',
            'content.required' => 'お問い合わせの種類を入力してください',
            'detail.required' => 'お問い合わせの内容を入力してください',
            'detail.max:120' => 'お問い合わせ内容は120文字以内で入力してください',
         ];
     }
}
