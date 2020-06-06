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
                            <h1 class="page-header">Assign Affiliate Code </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                @endif
                @include('admin.flash_msg')

                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="{{ route('assign_bizz') }}" class="form-horizontal" method="post"> @csrf
<br><br><br>
                        <div class="form-group">
                            <label for="country_id" class="col-sm-4 control-label">Select Bizz</label>

                            <div class="col-sm-8">
                                <select class="form-control select2" name="name">
                                    <option value="">Select Bizz</option>
                                    @foreach($adsbizz as $queries)
                                        <option  value="{{ $queries->id }}" {{ old('name') == $queries->id ? 'selected' :'' }}>{{ $queries->title }}</option>
                                    @endforeach
                                </select>
                              

                            </div>
                        </div>
                        {!! $errors->has('name')? '<p class="help-block"style="color:red;">Please Select Bizz.</p>':'' !!}

                        <div class="form-group">
                            <label for="state_name" class="col-sm-4 control-label">Select User</label>
                             <div class="col-sm-8">
                            <select class="form-control select2" name="code">
                                    <option value="">Select User</option>
                                    @foreach($query as $queries)
                                        <option  value="{{ $queries->id }}" {{ old('code') == $queries->id ? 'selected' :'' }}>{{ $queries->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                        {!! $errors->has('code')? '<p class="help-block"style="color:red;">Please Select User.</p>':'' !!}
                        <!-- <div class="form-group">-->
                        <!--    <label for="state_name" class="col-sm-4 control-label">Notes</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <textarea name="notes" class="form-control"  id="notes"   placeholder="enter notes" required>-->
                        <!--            </textarea>-->
                              

                        <!--    </div>-->
                        <!--</div>-->


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Assign Bizz</button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>

                <hr />

 <div class="row">
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="{{ route('assign_bizz') }}" class="form-horizontal" method="post"> @csrf
<br><br><br>
                        <div class="form-group">
                            <label for="country_id" class="col-sm-4 control-label">Select Pro</label>

                            <div class="col-sm-8">
                                <select class="form-control select2" name="name">
                                    <option value="">Select Pro</option>
                                    @foreach($adspro as $queries)
                                        <option  value="{{ $queries->id }}" {{ old('name') == $queries->id ? 'selected' :'' }}>{{ $queries->title }}</option>
                                    @endforeach
                                </select>
                              

                            </div>
                        </div>
                        {!! $errors->has('name')? '<p class="help-block"style="color:red;">Please Select Pro.</p>':'' !!}
                        <div class="form-group">
                            <label for="state_name" class="col-sm-4 control-label">Select User</label>
                             <div class="col-sm-8">
                            <select class="form-control select2" name="code">
                                    <option value="">Select User</option>
                                    @foreach($query as $queries)
                                        <option  value="{{ $queries->id }}" {{ old('code') == $queries->id ? 'selected' :'' }}>{{ $queries->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                        {!! $errors->has('code')? '<p class="help-block"style="color:red;">Please Select User.</p>':'' !!}
                        <!-- <div class="form-group">-->
                        <!--    <label for="state_name" class="col-sm-4 control-label">Notes</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <textarea name="notes" class="form-control"  id="notes"   placeholder="enter notes" required>-->
                        <!--            </textarea>-->
                              

                        <!--    </div>-->
                        <!--</div>-->


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Assign Pro</button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>

                <div class="row">
                     <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="{{ route('assign_bizz') }}" class="form-horizontal" method="post"> @csrf
<br><br><br>
                        <div class="form-group">
                            <label for="country_id" class="col-sm-4 control-label">Select Pro</label>

                            <div class="col-sm-8">
                                <select class="form-control select2" name="name">
                                    <option value="">Select Classified</option>
                                    @foreach($adsclass as $queries)
                                        <option  value="{{ $queries->id }}" {{ old('name') == $queries->id ? 'selected' :'' }}>{{ $queries->title }}</option>
                                    @endforeach
                                </select>
                              

                            </div>
                        </div>
{!! $errors->has('name')? '<p class="help-block"style="color:red;">Please Select Classified.</p>':'' !!}
                        <div class="form-group">
                            <label for="state_name" class="col-sm-4 control-label">Select User</label>
                             <div class="col-sm-8">
                            <select class="form-control select2" name="code">
                                    <option value="">Select User</option>
                                    @foreach($query as $queries)
                                        <option  value="{{ $queries->id }}" {{ old('code') == $queries->id ? 'selected' :'' }}>{{ $queries->name }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>
                        {!! $errors->has('code')? '<p class="help-block"style="color:red;">Please Select User.</p>':'' !!}
                        <!-- <div class="form-group">-->
                        <!--    <label for="state_name" class="col-sm-4 control-label">Notes</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <textarea name="notes" class="form-control"  id="notes"   placeholder="enter notes" required>-->
                        <!--            </textarea>-->
                              

                        <!--    </div>-->
                        <!--</div>-->


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Assign Classified</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
@endsection


