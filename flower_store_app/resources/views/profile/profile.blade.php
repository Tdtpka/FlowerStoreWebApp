<div class="profile">
    <div class="title">Tài khoản</div>
    <div class="userName">
        <div class="label">Ten tai khoan:
        {{ Auth::user()->name }}</div>
    </div>
    <div class="userEmail">
        <div class="label">Email:
        {{ Auth::user()->email }}</div>
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout')}}" onclick="event.preventDefault();
                                this.closest('form').submit();" class="button">
            Đăng xuất
        </a>
    </form>
</div>
