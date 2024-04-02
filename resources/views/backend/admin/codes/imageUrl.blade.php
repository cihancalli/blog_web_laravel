@section('imageUrl')
    <script>
        $(document).ready(function () {
            $("#imageUrl").change(function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#categoryImagePreview').attr('src', e.target.result);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
