@include('layouts.guest_nav')
    

    <form action="">
    @csrf
        <div class="form_outer">
            <div class="form_header">
                <p>ログイン</p>
            </div>
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit">送信</button>
        </div>
    </form>

    <div>
        <a href="{{route('forget')}}">パスワードの変更はこちらから</a>
    </div>
    
