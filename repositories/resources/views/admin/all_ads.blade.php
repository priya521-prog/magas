@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection


@section('main')

    <div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">

            @include('admin.sidebar_menu')

            <div id="page-wrapper">
                @if( ! empty($title))
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> {{ $title }}  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row1 -->
                    
                @endif

                @include('admin.flash_msg')
<?php
//dd($ads);
?>

                <div class="row">
                    <div class="col-xs-12">


                        @if($ads->total() > 0)
                            <table class="table table-bordered table-striped table-responsive">

                                @foreach($ads as $ad)
                                    <tr>
                                        <td width="100">
                                            <img src="{{ media_url($ad->feature_img) }}" class="thumb-listing-table" alt="">
                                        </td>
                                        <td>
                                            <h5><a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}" target="_blank">{{ $ad->title }}</a> ({!! $ad->status_context() !!})</h5>
                                            <!--<h5><a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}" target="_blank">{{ $ad->title }}</a> ({!! $ad->status_context() !!})</h5>-->
                                            
                                            <p class="text-muted">
                                                <i class="fa fa-map-marker"></i> {!! $ad->full_address()  !!} <br />  <i class="fa fa-clock-o"></i> {{ $ad->posting_datetime()  }}
                                           <br><i class="fa fa-clock-o"></i>{{ $ad->expiry  }}
                                           <br> {{ $ad->type  }}
                                        
                                            </p>
                                        </td>

                                        <td>

                                            <!--<a href="{{ route('reports_by_ads', $ad->slug) }}">-->
                                            <!--    <i class="fa fa-exclamation-triangle"></i> @lang('app.reports') : {{ $ad->reports->count() }}-->
                                            <!--</a>-->

                                            <hr />

                                            <!--<a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-edit"></i> </a>-->

                                            @if($ad->status ==1)
                                            <a href="javascript:void(0);" class="btn btn-warning blockAds" data-slug="{{ $ad->slug }}" data-value="2"><i class="fa fa-ban"></i> </a>
                                            @else
                                                <a href="javascript:void(0);" class="btn btn-success approveAds" data-slug="{{ $ad->slug }}" data-value="1"><i class="fa fa-check-circle-o"></i> </a>
                                               
                                                	<!--<button data-toggle="modal" data-target="#myModal" data-id="<?php //echo $ad->id; ?>">Comments</button>-->
                                                	
                                                	 <!--<button data-id="<?php //echo url()->full();?>"  onclick="$('#dataid').val($(this).data('id')); $('#myModal').modal('show');" >Add Comment</button>-->
                                                	 
                                                	  <button data-id="<?php echo url('/')."/"."ad/".$ad->id."/".$ad->slug."/".$ad->user_id; ?>"  onclick="$('#dataid').val($(this).data('id')); $('#myModal').modal('show');" >Add Comment</button>

                                            @endif

                                            <a href="javascript:void(0);" class="btn btn-danger deleteAds" data-slug="{{ $ad->slug }}"><i class="fa fa-trash"></i> </a>
                                            
                                            
                                        </td>
                                    </tr>
                                @endforeach

                            </table>

                        @else
                             <div class="alert alert-info">No data</div>
                        @endif
                        
                        

                        {!! $ads->links() !!}

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div>
</div>
@endsection

@section('page-js')

    <script>
        $(document).ready(function() {
            $('.deleteAds').on('click', function () {
                if (!confirm('{{ trans('app.are_you_sure') }}')) {
                    return '';
                }
                var selector = $(this);
                var slug = selector.data('slug');
                $.ajax({
                    url: '{{ route('delete_ads') }}',
                    type: "POST",
                    data: {slug: slug, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });

            $('.approveAds, .blockAds').on('click', function () {
                var selector = $(this);
                var slug = selector.data('slug');
                var value = selector.data('value');
               // alert(value);
                $.ajax({
                    url: '{{ route('ads_status_change') }}',
                    type: "POST",
                    data: {slug: slug, value: value, _token: '{{ csrf_token() }}'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '@lang('app.success')', toastr_options);
                        }
                    }
                });
            });
        });

    </script>

    <script>
        @if(session('success'))
            toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
        @if(session('error'))
            toastr.error('{{ session('error') }}', '{{ trans('app.success') }}', toastr_options);
        @endif
    </script>
    
     <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog ">
      <!-- Modal content-->
      <div class="modal-content well well-sm">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Add Comment</h3>
        </div>
        <div class="modal-body ">
         

           
                    <form action="{{ route('pending-comment') }}" method="post" > @csrf
            <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  
                                    <!--<input type="text" class="form-control" id="name" name="name" placeholder="comments"  value=""/>-->
                                   <textarea name="name" class="form-control" id="name"  placeholder="comments"  value="<?php ?>"></textarea>
                                </div>
                               
                            </div>
                              <input type="hidden" name="dataid" id="dataid" value=""/>

                            <input type ="hidden" name="url" id="url" value="<?php echo $ad->id; ?>">
                            <input type ="hidden" name="fullpageurl" id="fullpageurl"  value="<?php echo url()->full();?>">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"> Submit</button>
                            </div>
                        </div>
                    </form>
        </div> <!--modal body-->
      </div>
    </div>
  </div> <!--modal-->

@endsection
