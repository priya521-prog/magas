@extends('layout.main-front')
@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('main')

     <div class="main" ><div class="custom-container"><div class="listingbody">

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
                    <div class="col-xs-12">
<table border="1" width="100%" id="myTable">
                         <tr>
                         <td><b>Username</b></td><td><b>Code</b></td><td><b>Notes</b></td>
                     </tr>
                     
                 <?php
                 //dd($query);
                 foreach($user as $queries){
                     ?>
                     
                     <tr>
                         <td><?php echo $queries->name; ?></td>
                          <td id="alertData"><?php echo $queries->affiliate_code; ?></td>
                        
                            <td><?php echo $queries->notes; ?></td>
                    
                     
                     <?php
                 }
                 ?>
 </tr>
                     </table>
                    </div>
                </div><br><br>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                         <form action="{{ route('display_code')}}" class="form-horizontal" enctype="multipart/form-data" method="post"> @csrf
                      
                        <!--<form action="{{ route('display_code') }}" id="businessadsPostForm" name="businessadsPostForm" class="form-horizontal"  method="post">-->
                       Select Code: <select class="form-control select2" name="affilate_code">
                                    <option value="">Select Affiliate Code</option>
                                    @foreach($codes as $queries)
                                        <option value="{{ $queries->affiliate_code }}">{{ $queries->affiliate_code }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="custom-button" id="submit">Check</button>
                                </form>
                                </div><div class="col-md-7"></div>
                               </div>
                        </div><br><br>
                          <div class="row">
                    <div class="col-xs-12">
<table border="1" width="100%">
                     <!--    <tr>-->
                     <!--    <td><b>Name</b></td><td><b>Utilized Code(bizz)</b></td><td><b>Title</b></td>-->
                     <!--</tr>-->
                      <tr>
                         <td><b>Date of Transaction </b></td><td><b>User</b></td><td><b>UsedCode</b></td><td><b>Transaction Ref#</b></td><td><b>Amount</b></td><td><b>Service Type</b></td>
                     </tr>
                 <?php
               //  dd($query);
                 
                 foreach($code as $queries){
                     ?>
                     
                     <tr>
                         <td><?php echo $queries->payment_paid; ?></td>

                         <td><?php echo $queries->name; ?></td>
                          <td><?php echo $queries->utilized_code; ?></td>
                         <td><?php echo $queries->payment_id; ?></td>
                         <td><?php echo "49$" ?></td>
                         <td><?php echo "Premium"; ?></td>
                           
                    
                     
                     <?php
                 }
                 ?>
                 <?php
                // dd($comments);
    //               foreach($comments as $a){
    //       echo $a->name;
    //   }
      ?>
 </tr>
                     </table>
                    </div>
                </div><br><br><br><br>
                  <div class="row">
                    <div class="col-xs-12">
<table border="1" width="100%">
                     <!--    <tr>-->
                     <!--    <td><b>Name</b></td><td><b>Utilized Code(bizz)</b></td><td><b>Title</b></td>-->
                     <!--</tr>-->
                      <tr>
                         <td><b>Date of Transaction </b></td><td><b>User</b></td><td><b>UsedCode</b></td><td><b>Transaction Ref#</b></td><td><b>Amount</b></td><td><b>Service Type</b></td>
                     </tr>
                 <?php
               //  dd($query);
                 
                 foreach($bizz_code as $queries){
                     ?>
                     
                     <tr>
                          <td><?php echo $queries->updated_at; ?></td>

                         <td><?php echo $queries->user->name; ?></td>
                           <td><?php echo $queries->affiliate_code; ?></td>
                         <td><?php echo $queries->payment_id; ?></td>
                         <td><?php echo "99$" ?></td>
                         <td><?php echo "BIZZ"; ?></td>
                           
                    
                     
                     <?php
                 }
                 ?>
                 <?php
                // dd($comments);
    //               foreach($comments as $a){
    //       echo $a->name;
    //   }
      ?>
 </tr>
                     </table>
                    </div>
                </div>
                 

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div> 
</div> 
@endsection

@section('page-js')
    <script src="{{ asset('assets/js/bootstrap-filestyle.min.js') }}"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
    <script>
        
       
$(document).ready(function(){
    $("#myTable td").click(function() {     
 
        var column_num = parseInt( $(this).index() ) + 1;
        var row_num = parseInt( $(this).parent().index() )+1;    
 
        $("#result").html( "Row_num =" + row_num + "  ,  Rolumn_num ="+ column_num );   
    });
});
    </script>
@endsection
