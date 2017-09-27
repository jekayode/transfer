<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wallet Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

		<style>
				@import url('https://fonts.googleapis.com/css?family=Nunito+Sans');
		header{
			width:100%;
			background-color:#25313F;
			height:70px;
			padding-top:15px;
			}
			div.bgcolor{
				background-color:#25313F;
			}
		span.bars{
		padding-top:7px;
		color:#FFF;
		font-size:24px;
		margin-right: 30px;
		}
			.padding{
			padding-top:5px;
			}
			span.logo{
			font-size:24px;
			font-weight: 700;
			color:#fff;}
			span.white{
				margin-top:15px;
				color:#FFF;
				font-weight:600;
				}	div.profile{
				width:40px;
				height:40px;
				background-color:#BDBDBD;
				border-radius:25px;
				}
				.search{
					text-align:center;
					border-radius:3px;
					border:solid;
					border-width:1px;
					padding:5px;
					}
				.sidebar{
					position:fixed;
					border-right:solid;
					border-width:1px;
					border-color:#E0E0E0;
					height:100%;
					}
				.centerImg{
					margin-left:45%;
					margin-top:2%;
					}
					    .title{
						   color:#25313F;
						   font-weight:600;
						   }
						   .first-block{
							font-weight:600;
							padding:10px;
							}
						   .form-color{
							background-color:#FFD0B3;
							border-radius:0 !important;
							border-color:#FFD0B3;
							width:400px;
							}
							.form-text-color{
							background-color:#FF6200;
							border-radius:0 !important;
							border-color:#FF6200;
							}
							div.form{
							margin-left:25%;
					        margin-top:2%;
							}
							.btn-edit{
							background-color:#25313F !important;
							border-radius:20px !important;
							font-weight:600;
							color:#fff;
							padding:10px;
							margin-left:5%;
							}
							.dashGrey{
								color:#828282;
								font-weight:600;
								padding-left:60px;
								font-size:18px;
								margin-bottom: 15px;
								margin-top: 15px;
								text-align:left;
								}
							.dashBlue{
								color:#25313E;
								font-weight:600;
								font-size:18px;
								padding-left:40px;
								padding-top:4px;
								padding-bottom:4px;
								text-align:left;
								}
								.dashboard{
									position:fixed;

									left:0px;
									top:100px;
									}
									div.content{
										margin-top:60px;
										/*margin-left:15%;*/
										padding-bottom: 3%;
									}
									div.awesome{
										font-size: 40px;
										border-radius: 5px;
										width:50px;
										height:50px;
										background-color: #FF6200;
										color:#FFF;
										padding-right:9px;

									}
									div.HighLighted{
										background-color: #C1D6DD;
										width:202px;
									}
									div.orange-box{
										background-color:#FF6200;
										padding:5px;
									}
									div.blue-circle{
										background-color: #25313F;
										width:180px;
										height:180px;
										border-radius: 90px;
										padding-top:40px;
										padding-left:17px;
										margin-left: 17%;
									}
									.side-header{
										color:#25313F;
										font-weight: 500;
									}
									.side-content{
										color:#25313F;
										font-weight: 700;
										font-size: 20px;

									}


							    body {
							      font-family: Nunito Sans;
							    }

							    nav {
							      border-radius: 0 !important;
							    }

							    .menu {
							      padding-top: 22px;
							      box-sizing: border-box;
							    }

							    .menu-item {
							      color: white;
							      text-decoration: none !important;
							    }

							    .menu ul {
							      display: flex;
							      list-style: none;
							      justify-content: space-around;
							      padding: 0;
							    }

							    .menu li {
							      width: 140px;
							      height: 50px;
							      background-color: #FD8032;
							      color: white;
							      display: flex;
							      align-items: center;
							      justify-content: center;
							      border-radius: 2px;
							    }

							    .menu li:hover {
							      background-color: #25313F;
							      color: white;
							    }

							    .wallet-container {
							      /*display: flex;
							      flex-wrap: wrap;*/
							      justify-content: center;
							      /*padding: 30px;*/
							    }

							    .wallet {
							      position: relative;
							      width: 300px;
							      height: 150px;
							      background: #333333;
							      margin: 15px;
							      cursor: pointer;
							      box-shadow: -2px 4px 4px rgba(0, 0, 0, 0.15);
							    }

							    .wallet:hover {
							      box-shadow: none;
							    }

							    .wallet .currency {
							      position: absolute;
							      width: 41px;
							      height: 21px;
							      left: 255px;
							      top: 2px;


							      font-style: normal;
							      font-weight: bold;
							      line-height: normal;
							      font-size: 17px;
							      letter-spacing: 0.68px;

							      color: #FFFFFF;
							    }

							    .wallet-img {
							      position: absolute;
							      width: 63px;
							      height: 77px;
							      left: 130px;
							      top: 33px;
							    }

							    .wallet .id {
							      position: absolute;
							      height: 14px;
							      left: 5px;
							      top: 130px;
							      color: white;
							    }

							    .wallet .num {
							      position: absolute;
							      left: 7px;
							      top: 5px;
							      color: white;
							    }

							    .wallet .balance {
							      position: absolute;
							      width: 115px;
							      left: 200px;
							      top: 125px;
							      color: white;
							    }

							    .profile {
							      width: 40px;
							      height: 40px;
							      border-radius: 50%;
							      background: gray;
							      margin-top: 4px;
							      margin-left: 100px;
							      margin-right: 100px;
							    }

							    .profile-info {
							      color: white;
							      padding: 5px;
							      line-height: 5.5px;
							      margin-top: 10px;
							    }

							    .active-sidebar {
							      background-color: #C1D6DD;
							    }

							    .nav-search {
							      margin-right: auto;
							      margin-left: auto;
							    }

							    .navbar-brand {
							      font-family: Nunito Sans;
							      font-style: normal;
							      font-weight: 800;
							      line-height: normal;
							      font-size: 20px;
							      color: #FFFFFF !important;
							    }

							    .navbar-header img {
							      width: 24px;
							      height: 24px;
							    }

							    #sidebar {
							      /* margin: 0 !important; */
							      width: 200px;
							      height: 500px;
							      text-align: center;
							      border-right: 1px solid rgb(192, 190, 190);
							      margin-top: 30px;
							      padding: 0;
							    }

							    .navbar-toggle {
							      display: block;
							      float: left;
							    }

							    .navbar {
							      height: 50px;
							      background: #25313F;
							      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
							    }

                  i.fa-window-close {
                    font-size: 20px;
                    color: #fff;
                    margin: 20px;
                    display: none;
                  }


                  @media screen and (max-width:768px) {
                    #sidebar {
                    width: 250px !important;
                    height: 200vh;
                    padding: 0;
                    position: absolute;
                    left: -1000px;
                    top: 20px;
                    }
                    i.fa-window-close {
                      font-size: 20px;
                      color: #fff;
                      margin-bottom: 20px;
                      display: block;
                    }
                    .navbar-form .form-control {
                      display: inline-block;
                      width: auto;
                      vertical-align: middle;
                      display: none;
                    }
                    .navbar-nav {
                      margin: 7.5px -15px;
                      display: none;
                    }
                    .profile {
                      display: none;
                    }
                    .navbar-form.navbar-right {
                      display: none;
                    }
                  }

		</style>
</head>

<body>
	@section('content', 'Wallet View')
  	@include('users/user-nav')

      <div class="col-sm-10">
        <div class="container-fluid">

          <div class="wallet-container">

		<div class="content">
			<div class="row">
				<div class="col-md-4">
					<div class="blue-circle"><img src="http://www.ravcontest.com/HNGpoints/image/W1.png" alt="icon"/></div>
					@foreach($wallets as $key => $wallet)
						@if($wallet->uuid == $user_id)
							<div align="center" class="left-content">
								<h5 class="side-header"> {{ $wallet->wallet_name }} </h5>
								<br/>
								<h5 class="side-header">Wallet S/N</h5>
								<p class="side-content">{{$key + 1}}</p>
								<br/>
								<h5 class="side-header">Wallet Code</h5>
								<p class="side-content">{{ $wallet->wallet_code }} </p>
								<br/>
								@foreach($transaction as $trans)
									@if($trans->uref !== $wallet->wallet_code)
										<h5 class="side-header">Currency Type</h5>
										<p class="side-content">{{$trans['uref'] == $wallet->wallet_code ? $trans['currency'] : "NGN"}}</p>
										<br/>
										<h5 class="side-header">Balance</h5>
										<p class="side-content">{{$trans['uref'] == $wallet->wallet_code ? $trans['balance'] : $wallet->balance}}</p>
										<br/>
									@endif
								@endforeach
							</div>
						@endif
					@endforeach
				</div>
				<div class="col-md-8">
					<div class="orange-box"><h4 class="title" align="center">TRANSACTION HISTORY</h4></div>
						<table class="table" style="width:100%;">
							<thead>
								<tr>
									<th>Trans id</th>
									<th>Trans Amount</th>
									<th>Trans Date</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							@if(count($transaction) > 0)
							 	@foreach($transaction as $trans)
								<tr>
									<td></td>
									<td></td>
									<td></td>
										 <td></td>

								</tr>
								@endforeach
							@else
								<tr>
									<td></td>
									<td>No transaction history</td>
									<td></td>
									<td></td>
								</tr>
								
							@endif
							</tbody>
						</table>
						<div align="center">
						<a href="transfer-to-wallet" class="btn btn-default btn-edit">Transfer to Wallet</a><a href="transfer-to-bank" class="btn btn-default btn-edit">Transfer to Bank</a><button class="btn btn-default btn-edit">DKGIU</button><button class="btn btn-default btn-edit">RKSNBT</button>
						</div> </div>
							</div>
						</div>

          </div>

        </div>
      </div>

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {

        $('#navb').click(function() {

            $('#sidebar').animate({
                left: "0px",
                "z-index": 10000
            }, 200).css(
              "background-color" , "rgb(37, 49, 63)",
              "height" , "200vh"
            );

            $('a.side-item').css(
                "color" , "#fff"
            );
        });

        $('#close').click(function() {

            $('#sidebar').animate({
                left: "-1000px",
                "z-index": 10000
            }, 200);
        });
      });
  </script>
</body>

</html>
