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
                            <h1 class="page-header" style="color:black"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-xs-12">
<br><br>
                        <form action="{{ route('post_logo') }}" id="createPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> @csrf

                       
                         <div class="custom-file-upload input-row">
                                                        Image: <input type="file" id="filescustommedia" value="logo" name="filescustommedia" required/><br/><br/>

                                                        <div class="clearfix"></div>
                                                    </div>

                       <div class="input-row">
                                                        <div class="select">
                                                          <select class="form-control select2" name="ref" style="width:50%" required>
                                    <option value="">Select Ref</option>
                                   
                                        <option value="clients">Clients</option>
                                         <option value="partners">Partners</option>
                                   
                                </select>
                                                        </div>
                                <!--{!! $errors->has('servicetype')? '<p class="help-block"style="color:red;">Please Select the Service type.</p>':'' !!}-->
                        <!--                            </div>-->
                        <!--<div class="custom-file-upload input-row">-->
                                                      
                        <!--                            </div>-->
                       


                        <div class="form-group">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Submit Logo</button></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>
<div class="row">
    
     <div class="col-md-12">
                                                  <?php
                                                
                                                // foreach($clients as $client){
                                                   
                                                    // echo "<img src='../uploads/logos/.$partner->media_name;'>";
                                                ?>
                                              
                                              
                                              <!--  <img src="<?php //echo '.../uploads/logos/'.$client->media_name;?>" width="150px" height:"100px" hspace="20"/> -->

                                               
                                                <?php
                                            //   }
                                                ?>
                                                  </div>
</div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'post_content' );
    </script>

    <script>
        $(document).ready(function() {
            $("#images").change(function () {
                var fd = new FormData(document.querySelector("form#createPostForm"));
                $.ajax({
                    url: '{{ route('upload_post_image') }}',
                    type: "POST",
                    data: fd,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,   // tell jQuery not to set contentType
                    success: function (data) {
                        $('#loadingOverlay').hide('slow');
                        if (data.success == 1) {
                            $('#uploaded-ads-image-wrap').load('{{ route('append_post_media_image') }}');
                        } else {
                            toastr.error(data.msg, '<?php echo trans('app.error') ?>', toastr_options);
                        }
                    }
                });
            });

            $('body').on('click', '.imgDeleteBtn', function () {
                //Get confirm from user
                if (!confirm('{{ trans('app.are_you_sure') }}')) {
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                $.ajax({
                    url: '{{ route('delete_media') }}',
                    type: "POST",
                    data: {media_id: img_id, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            current_selector.closest('.creating-ads-img-wrap').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });
    </script>



@endsection
