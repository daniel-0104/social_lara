<h3>Admin Home Page</h3>

<form action="{{ route('logout') }}" method="POST" class="d-inline">
    @csrf
    <button class="btn bg-dark text-white w-100" type="submit">
        <i class="fa-solid fa-right-from-bracket"></i>Logout
    </button>
</form>
