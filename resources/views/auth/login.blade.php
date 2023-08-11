@include('layouts.guest_nav')
    

<form method="POST" action="{{ route('login') }}">
    @csrf
        <div class="form_outer">
            <div class="form_header">
                <p>ログイン</p>
            </div>
            <div>
                <label for="email">メールアドレス</label>
                @error('email')
                <p class="error_msg">{{$message}}</p>
                @enderror
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">パスワード</label>
                @error('password')
                <p class="error_msg">{{$message}}</p>
                @enderror
                <input type="password" name="password" id="password">
            </div>
            <div class="btn">
                <button type="submit">送信</button>
            </div>
        </div>
    </form>
    

    <div class="reset_pass">
        <a href="{{route('forget')}}">パスワードの変更はこちらから</a>
    </div>
    
