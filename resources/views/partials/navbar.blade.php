<nav class="topbar">

    <div class="logo">
        🌍 <span>ChainPulse</span>
    </div>

    <div class="dropdown">

        <button class="user-box" id="profileBtn">

            {{ auth()->user()->name }}

            ▼

        </button>

        <div class="dropdown-menu" id="profileMenu">

            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button type="submit">

                    🚪 Logout

                </button>

            </form>

        </div>

    </div>

</nav>

<script>

const profileBtn = document.getElementById('profileBtn');
const profileMenu = document.getElementById('profileMenu');

profileBtn.addEventListener('click', function(e){

    e.stopPropagation();

    profileMenu.classList.toggle('show');

});

document.addEventListener('click', function(){

    profileMenu.classList.remove('show');

});

</script>