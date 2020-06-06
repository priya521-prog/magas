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
                      
                        <!--<form action="{{ route('display_code') }}" id="businessadsPostForm" name="businessadsPostForm" class="form-horizontal"  method="post" >-->
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

               <div class="row">
                     <div class="col-lg-12">
                            <h1 class="page-header"> PDF Report  </h1>
                        </div>
                    <div class="col-xs-12">
                       <table border="1" width="100%">
                        <tr>
                         <th>PDF</th> <th>Name</th><th>Email</th><th>Url</th>
                       </tr>
                        <?php
                  // dd($query);
                  foreach($pdf as $queries){
                   ?>
                      
                       
                       <tr>
                            <td><?php echo $queries->url; ?></td>
                             <td><?php echo $queries->name; ?></td>
                        
                            <td><?php echo $queries->email; ?></td>
                             <td><?php echo $queries->full_url; ?></td>
                       </tr>
                        <?php
                  }
                   ?>
                   </table>

                    </div>
                </div>


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
@endsection

@section('page-js')

@endsection