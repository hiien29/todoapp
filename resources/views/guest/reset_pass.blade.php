@include('layouts.guest_nav')

<div class="login_outer">
    <div class="login_header">
        <p>パスワード再発行</p>
    </div>
    <div>
        <form action="">
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">新しいパスワード</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="password_conf">新しいパスワード（確認）</label>
                <input type="password" name="password_conf" id="password_conf">
            </div>
            <button type="submit">送信</button>
        </form>

    </div>
</div>