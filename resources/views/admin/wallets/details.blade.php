@extends('layouts.admin')
@section('title', 'Wallet Details')
@section('subtitle', 'Wallet Details')

@section('content')

<?php

//$tbeneficiaries = count($beneficiaries);

?>

      <div class="row">
        <br>

        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <h3 class="profile-username text-center">Name: {{ $wallet->wallet_name }}</h3>

              <p class="text-muted text-center">Lock Code: {{$wallet->lock_code}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Total Balance</b> <a class="pull-right">{{ $wallet->balance }}</a>
                </li>
                
                

                <li class="list-group-item">
                 <a href="{{ route('wallets.manualfund', $wallet->id)}} " class="btn btn-warning">Manual Fund Wallet</a>
                </li>
                <li class="list-group-item">
                  <a class="flwpug_getpaid " data-PBFPubKey="FLWPUBK-5bfc6d310982b2de8fbf0c98843a8a63-X" data-txref="rave-checkout-1506688603" data-amount="" data-customer_email="user@example.com" data-currency = "NGN" data-pay_button_text = "Add Fund Ravepay" data-country="NG" data-custom_title = "SmS Wallet" data-custom_description = "" data-redirect_url = "" data-custom_logo = "" data-payment_method = "card" data-exclude_banks="">Add Fund Ravepay</a>
                  
                  <a href="{{ route('wallets.ravefund', $wallet->id)}}" class="btn btn-info" >Add Fund Ravepay</a>
                </li>
            
              <li class="list-group-item">
                 <a href="{{ route('wallets.manualfund', $wallet->id)}} " class="btn btn-warning">Manual Fund Wallet</a>

                 @if($wallet->archived == 0)
                  <a href="/admin/{{ $wallet->id }}/archivewallet" type="submit" class="btn btn-md btn-danger" onclick="return confirm('Are you sure to archive this wallet?')">{{ 'Archive Wallet' }}</a>
                @else
                  <a href="/admin/{{ $wallet->id }}/activatewallet" type="submit" class="btn btn-md btn-success" onclick="return confirm('Are you sure you want to Activate this wallet?')">{{ 'Activate Wallet' }}</a>
                @endif
                </li>

              </ul>

              
              <br>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
        
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#beneficiaries" data-toggle="tab">Beneficiaries</a></li>
              <li><a href="#history" data-toggle="tab">Transaction History</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="beneficiaries">
                
                <table class="table">
                    <thead>
                        <tr>
                          <th>Name</th>
                          <th>Account Number</th>
                          <th>Bank</th>
                          <th>Status</th>
                          <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>

                      
                    </tbody>
                    
                </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="history">

               <table class="table">
                    <thead>
                        <tr>
                          <th>Name</th>
                          <th>Account Number</th>
                          <th>Account Name</th>
                          <th>Bank</th>
                          <th colspan="2" >Action</th>
                        </tr>
                    </thead>
                    
                </table>
                
              </div>
              

            
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      

    








    
</div>

@endsection