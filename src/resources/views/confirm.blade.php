<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/confirm">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>confirm</h2>
      </div>
        <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                <div style="display: inline-block;">
                <input type="text" name="name" value=" {{ $contact['last_name'] }} " readonly/>
                </div>
                <div style="display: inline-block;">
                <input type="text" name="name" value=" {{ $contact['first_name'] }} " readonly/>
                </div>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                @if($contact['gender'] == 'male')
                男性
                @elseif($contact['gender'] == 'female')
                女性
                @else
                その他
                @endif
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
              @if(isset($contact['tell']))
            <input type="tell" name="tell" value="{{ $contact['tell']}}" readonly />
            <input type="tell" name="tell1" value="{{ $contact['tell1']}}" readonly />
            <input type="tell" name="tell2" value="{{ $contact['tell2']}}" readonly />
        @endif
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                @if($contact['detail'] == 'product')
                製品に関するお問い合わせ
                @elseif($contact['detail'] == 'payment')
                支払いに関するお問い合わせ
                @elseif($contact['detail'] == 'delivery')
                配送に関するお問い合わせ
                @else
                その他
                @endif
              </td>
            </tr>
            <tr class="confirm-table__row2">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button" style="display: inline-block;">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
        <div class="form__button2" style="display: inline-block;">
          <button class="form__button-submit2" type="submit">修正</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
