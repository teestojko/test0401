<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text2">
              <input type="text" name="last_name" placeholder="例：山田" value="{{ old('last_name') }}"/>
              <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}"/>
            </div>
            <div class="form__error">
                @error('last_name')
                {{ $message }}
                @enderror
                @error('first_name')
                {{ $message }}
                @enderror
                <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group--title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group--content">
            <div class="form__gender">
                <label class="gender">
                <input type="radio" id="male" name="gender" value="male" checked/>
                <label for="male">男性</label>
                <input type="radio" id="female" name="gender" value="female"/>
                <label for="female">女性</label>
                <input type="radio" id="other" name="gender" value="other"/>
                <label for="other">その他</label>
                </label>
            </div>
            <div class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text3">
              <input type="tell" name="tell" placeholder="090" value="{{ old('tell') }}">-
              <input type="tell" name="tell1" placeholder="1234" value="{{ old('tell1') }}">-
              <input type="tell" name="tell2" placeholder="5678" value="{{ old('tell2') }}"/>
            </div>
            <div class="form__error">
                @error('tell')
                {{ $message }}
                @enderror
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
  <div class="form__group-title">
    <span class="form__label--item">住所</span>
    <span class="form__label--required">※</span>
  </div>
  <div class="form__group-content">
    <div class="form__input--text">
      <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3"value="{{ old('address') }}">
    </div>
    <div class="form__error">
        @error('address')
        {{ $message }}
        @enderror
      <!-- バリデーションエラーメッセージ -->
    </div>
  </div>
</div>
<div class="form__group">
  <div class="form__group-title">
    <span class="form__label--item">建物名</span>
  </div>
  <div class="form__group-content">
    <div class="form__input--text">
      <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
    </div>
    <div class="form__error">
        @error('building')
        {{ $message }}
        @enderror
      <!-- バリデーションエラーメッセージ -->
    </div>
  </div>
</div>
<div class="form__group">
  <div class="form__group-title">
    <span class="form__label--item">お問い合わせの種類</span>
    <span class="form__label--required">※</span>
  </div>
  <div class="form__group-content">
    <div class="form__input--select">
      <select name="content" >
        <option value="">選択してください</option>
        <option value="product">製品に関するお問い合わせ</option>
        <option value="payment">支払いに関するお問い合わせ</option>
        <option value="delivery">配送に関するお問い合わせ</option>
        <option value="other">その他</option>
      </select>
    </div>
    <div class="form__error">
        @error('content')
        {{ $message }}
        @enderror
      <!-- バリデーションエラーメッセージ -->
    </div>
  </div>
</div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"value="{{ old('detail') }}"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
