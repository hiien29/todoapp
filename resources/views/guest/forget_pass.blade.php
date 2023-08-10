@include('layouts.guest_nav')


    {{-- <div>
        <p>パスワード再発行</p>
    </div>
    <div> --}}
    <form action="">
    @csrf
        <div class="form_outer">
            <div class="form_header">
                <p>パスワード再発行</p>
            </div>
            <div>
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="btn2">
                <button type="submit">再発行リンクを送る</button>
            </div>
        </div>
    </form>

        
    
