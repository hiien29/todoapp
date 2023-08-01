@include('layouts.guest_nav')

<div class="login_outer">
    <div>
        <p>パスワード再発行</p>
    </div>
    <div>
        <form action="">
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>
            <button type="submit">再発行リンクを送る</button>
        </form>

        <div>
            <a href="">パスワードの変更はこちらから</a>
        </div>
    </div>
</div>