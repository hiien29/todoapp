@include('layouts.guest_nav')


    <form action="{{ route('register') }}" method="POST">
    @csrf
        <div class="form_outer">
            <div class="form_header">
                <p>会員登録</p>
            </div>
            <div>
                <label for="email">メールアドレス</label>
                @error('email')
                <p class="error_msg">{{$message}}</p>
                @enderror
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="name">ユーザー名</label>
                @error('name')
                <p class="error_msg">{{$message}}</p>
                @enderror
                <input type="name" name="name" id="name">
            </div>
            <div>
                <label for="password">パスワード</label>
                @error('password')
                    <p class="error_msg">{{$message}}</p>
                @enderror
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password_confirmation">パスワード（確認）</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="btn">
                <button type="submit">送信</button>
            </div>
        </div>
    </form>

    </div>
</div>