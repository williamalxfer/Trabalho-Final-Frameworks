<form action="{{ route('products.destroy', $p ) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-link text-danger">
        <i class='material-icons'>
            delete_forever
        </i>
    </button>
</form>