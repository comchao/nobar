@extends('layouts.index')

@section('content')
    <section>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example2').DataTable()
        })
    </script>
@endpush
