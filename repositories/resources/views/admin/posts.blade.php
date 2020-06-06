@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

    <div class="container" style='margin-top:10%'>
        <div id="wrapper">
            @include('admin.sidebar_menu')
            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}
                                <a href="{{ route('create_new_post') }}" class="btn btn-info pull-right"> <i class="fa fa-floppy-o"></i> @lang('app.create_new_post')</a>
                            </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                    <div class="row">
                        <div class="col-xs-12">

                            @if($posts->count())
                                <table class="table table-bordered table-striped" >
                                    <thead>
                                    <tr>
                                        <th>@lang('app.title')</th>
                                        <th>@lang('app.created_at')</th>
                                        <th>@lang('app.actions')</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{!! $post->title !!}</td>
                                            <td>{!! $post->created_at_datetime() !!}</td>
                                            <td>
                                              
                                                <a href="posts/edit/<?php echo $post->slug;?>" class="btn btn-primary"><i class="fa fa-edit"></i> </a>
                                                <a href="javascript:;" class="btn btn-danger deletePage" data-slug="<?php echo $post->slug;?>"><i class="fa fa-trash"></i> </a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                                {!! $posts->links() !!}
                            @endif

                        </div>
                    </div>


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')
    <script>
        $(document).ready(function() {
            $('body').on('click', '.btn-danger', function (e) {
                if (!confirm("<?php echo trans('app.are_you_sure') ?>")) {
                    e.preventDefault();
                    return false;
                }

                var selector = $(this);
                var slug = $(this).data('slug');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('delete_page') }}',
                    data: {slug: slug, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            var options = {closeButton: true};
                            toastr.success(data.msg, '<?php echo trans('app.success') ?>', options)
                        }
                    }
                });
            });
        });
    </script>

    <script>
        var options = {closeButton : true};
        @if(session('success'))
            toastr.success('{{ session('success') }}', '<?php echo trans('app.success') ?>', options);
        @endif
    </script>
@endsection


