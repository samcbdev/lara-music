<script>
    @if($errors)
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
            toastr.error("{{ $errors }}");
    @endif
</script>