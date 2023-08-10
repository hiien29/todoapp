@include('layouts.guest_nav')


    <form action="">
    @csrf
        <div class="form_outer">
            <div class="form_header">
                <p>会員登録</p>
            </div>
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="user_name">ユーザー名</label>
                <input type="user_name" name="user_name" id="user_name">
            </div>
            <div>
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password_conf">パスワード（確認）</label>
                <input type="password" name="password_conf" id="password_conf">
            </div>
            <div class="btn">
                <button type="submit">送信</button>
            </div>
        </div>
    </form>

    </div>
</div>