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
                    </div> <!-- /.row -->
                @endif

                @include('admin.flash_msg')
                 <div class="row">
                      <div class="col-md-12">
                          <div class="col-md-5">
                 
                         <form action="{{ route('display_pdf')}}" class="form-horizontal" enctype="multipart/form-data" method="post"> @csrf
                      
                      
                       Select PDF: <select class="form-control select2" name="affilate_code" >
                                    <option value="">Select PDF</option>
                                    @foreach($fetch  as $queries)
                                        <option value="{{ $queries->pdffilename }}">{{ $queries->pdffilename }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="custom-button" id="submit">Generate</button>
                                </form>
                       </div><div class="col-md-7"></div>
                        </div></div>

          


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')

@endsection