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
                            <h1 class="page-header">Utilized Code </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif
                @include('admin.flash_msg')

                <div class="row">
                    <br><br>
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                    
                      <table  border="1" width="100%">
                          <tr>
                              <th>User</th>
                              
                          </tr>
                          <tr>
                              <?php foreach($query as $code)
                              {
                                  ?>
                              <td><?php echo $code->utilized_code; ?></td> 
                              
                          </tr>
                         <?php
                              }
                              
                              ?>
                      </table>

                    </div>

                </div>

                <hr />



                <div class="row">
                   
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
@endsection


