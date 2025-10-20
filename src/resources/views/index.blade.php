@extends('layouts.app') 
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact__content">
    <div class="contact__title">
        <h2>Contact</h2>
    </div>

    <form class="form" action="{{ route('contact.confirm') }}" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">お名前</label>
                <span class="form__label--required">※</span>
            </div>
            <!-- ▼▼横並び▼▼ -->
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}">
                    <div class="form__error">
                        @error('first_name')
                            {{ ($message) }}
                        @enderror
                    </div>
                    <div class="form__input--text">
                    <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}">
                    <div class="form__error">
                        @error('last_name')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- ▲▲横並び▲▲ -->
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">性別</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="radio" id="men" name="gender" value="men" />
                    <label for="men">男</label>
                    <input type="radio" id="women" name="gender" value="women" />
                    <label for="women">女</label>
                    <input type="radio" id="others" name="gender" value="others" />
                    <label for="others">その他</label>
                    <div class="form__error">
                        @error('gender')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">メールアドレス</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
                    <div class="form__error">
                        @error('email')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <!-- ▼▼横並び▼▼ -->
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">電話番号</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="08012345678" value="{{ old('tel') }}" />
                    <!-- <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}">
                    <div class="form__input--text-hyphen">-</div>
                    <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
                    <div class="form__input--text-hyphen">-</div>
                    <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}"> -->
                    <div class="form__error">
                        @error('tel')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- ▲▲横並び▲▲ -->
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">住所</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
                    <div class="form__error">
                        @error('address')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">建物名</label>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}">
                    <div class="form__error">
                        @error('building')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">お問い合わせの種類</label>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <select name="category_id" id="category">
                        <option value="">選択してください</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->category }}</option>
                        @endforeach
                    </select>
                    <div class="form__error">
                        @error('category_id')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <label class="form__label--item">お問い合わせ内容</label>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}">
                    <div class="form__error">
                        @error('detail')
                            {{ ($message) }}
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面へ</button>
        </div>
    </form>
</div>
@endsection
