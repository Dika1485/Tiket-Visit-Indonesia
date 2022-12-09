<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<?php header('location: index'); ?>
