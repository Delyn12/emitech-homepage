@extends('DASHBOARD::Layouts.master')


@section('title' , trans('HOMEPAGE::home.'.ADMIN_DASHBORD_TITLE))

@section('content')

<section id="dash-content">
<div class="dashboard-homepage-wrapper">
<div class="card-counter">
	<div class="card">
	<div class="text">
		<h1 class="icon"><i class="bi bi-people-fill"></i></h1>
		</div>
		<div class="value-wrapper">
		<h1 class="text">
			{{ trans('HOMEPAGE::home.'.USER_COUNTER_NAME) }}
			</h1>
			<h1 class="value"><span class="symbol">{{__('$') }}</span>1200</h1>
		</div>
	</div>
	<div class="card">
	<h1 class="icon"><i class="bi bi-wallet-fill"></i></h1>
		<div class="value-wrapper">
		<h1 class="text">
			{{ trans('HOMEPAGE::home.'.INCOME_COUNTER_NAME) }}
			</h1>
			<h1 class="value"><span class="symbol">{{__('$') }}</span>1200</h1>
		</div>
	</div>
	<div class="card">
	<h1 class="icon"><i class="bi bi-bank2"></i></h1>
		<div class="value-wrapper">
		<h1 class="text">
			{{ trans('HOMEPAGE::home.'.CHART_ACCOUNT_NAME) }}
			</h1>
			<h1 class="value"><span class="symbol">{{__('$') }}</span>1200</h1>
		</div>
	</div>
	<div class="card">
	<h1 class="icon"><i class="bi bi-stack"></i></h1>
		<div class="value-wrapper">
		<h1 class="text">
			{{ trans('HOMEPAGE::home.'.STOCK_INVENTORY_NAME) }}
			</h1>
			<h1 class="value"><span class="symbol">{{__('$') }}</span>1200</h1>
		</div>
	</div>
	</div>
	
	<div class="information-graph-wrapper">
	<div class="row g-3 justify-content-center">
		<div class="col-sm-12 col-md-8 col-lg-8">
		<div class="card graph-card">
			<div class="card-body">
			 <div id="app_chart"></div>
			</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="card">
			<div class="card-header">
			<h1 class="title">
				<span class="icon"><i class="bi bi-people-fill"></i></span>
				{{ trans('HOMEPAGE::home.'.USERS_DISPLAY_TABLE) }}
				</h1>
			<a class="btn homepage-card-btn" href="#">
				{{ __('HOMEPAGE::home.view')}} 
				<span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
				</a>
			</div>
			<div class="card-body">
			<div class="customer-info-wrapper">
				<img src="{{ asset('/Html images/200 x 200px.jpg')}}" alt="profile" class="img-fluid">
				<div class="info">
				<h1 class="customer-name">surname name</h1>
				<span class="text-muted">position</span>
				</div>
				<div class="action">
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-envelope-paper-fill"></i></span>
					</a>
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-whatsapp"></i></span>
					</a>
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-telephone-outbound"></i></span>
					</a>
				</div>
				</div>
			<div class="customer-info-wrapper">
				<img src="{{ asset('/Html images/200 x 200px.jpg')}}" alt="profile" class="img-fluid">
				<div class="info">
				<h1 class="customer-name">surname name</h1>
				<span class="text-muted">position</span>
				</div>
				<div class="action">
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-envelope-paper-fill"></i></span>
					</a>
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-whatsapp"></i></span>
					</a>
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-telephone-outbound"></i></span>
					</a>
				</div>
				</div>
			<div class="customer-info-wrapper">
				<img src="{{ asset('/Html images/200 x 200px.jpg')}}" alt="profile" class="img-fluid">
				<div class="info">
				<h1 class="customer-name">surname name</h1>
				<span class="text-muted">position</span>
				</div>
				<div class="action">
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-envelope-paper-fill"></i></span>
					</a>
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-whatsapp"></i></span>
					</a>
				<a href="#" class="action-link">
					<span class="icon"><i class="bi bi-telephone-outbound"></i></span>
					</a>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	
	<div class="inventory-manager">
	<div class="row g-3 justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="card">
				<div class="card-header">
				<h1 class="title">
					<span class="icon"><i class="bi bi-layers"></i></span>
					{{ trans('HOMEPAGE::home.'.STOCK_INVENTORY_ALERT_NAME) }}
				</h1>
			<a class="btn homepage-card-btn" href="#">
				{{ __('HOMEPAGE::home.view')}} 
				<span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
				</a>
				</div>
				<div class="card-body">
				<div class="product-alert-wrapper">
					<div class="table table-responsive">
					<table class="table">
					<tr>
						<td>12345678</td>
						<td>Item 1 wil be out of stock soon</td>
						<td>1 unit</td>
						<td><span class="symbol">$</span>50.00</td>
						<td><span class="status">out of stock</span></td>
						<td>12-8-2019</td>
						</tr>
					<tr>
						<td>12345678</td>
						<td>Item 1 wil be out of stock soon</td>
						<td>1 unit</td>
						<td><span class="symbol">$</span>50.00</td>
						<td><span class="status">out of stock</span></td>
						<td>12-8-2019</td>
						</tr>
					<tr>
						<td>12345678</td>
						<td>Item 1 wil be out of stock soon</td>
						<td>1 unit</td>
						<td><span class="symbol">$</span>50.00</td>
						<td><span class="status">out of stock</span></td>
						<td>12-8-2019</td>
						</tr>
					<tr>
						<td>12345678</td>
						<td>Item 1 wil be out of stock soon</td>
						<td>1 unit</td>
						<td><span class="symbol">$</span>50.00</td>
						<td><span class="status">out of stock</span></td>
						<td>12-8-2019</td>
						</tr>
					</table>
					</div>
					</div>
				</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="card">
				<div class="card-header">
				<h1 class="title">
					<span class="icon"><i class="bi bi-activity"></i></span>
					{{ trans('HOMEPAGE::home.'.ADMIN_MONITORING_NAME) }}
				</h1>
			<a class="btn homepage-card-btn" href="#">
				{{ __('HOMEPAGE::home.view')}} 
				<span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
				</a>
				</div>
				<div class="card-body">
				<div class="product-alert-wrapper">
					<div class="table table-responsive">
					<table class="table">
					<tr>
						<td>
						168.9.9.0
						</td>
						<td>
							Added a new user to group 1 minute ago
							</td>
						<td></td>
						</tr>
					<tr>
						<td>
						168.9.9.0
						</td>
						<td>
							Added a new user to group 1 minute ago
							</td>
						<td></td>
						</tr>
					<tr>
						<td>
						168.9.9.0
						</td>
						<td>
							Added a new user to group 1 minute ago
							</td>
						<td></td>
						</tr>
					<tr>
						<td>
						168.9.9.0
						</td>
						<td>
							Added a new user to group 1 minute ago
							</td>
						<td></td>
						</tr>
					</table>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="journal-manager">
		<div class="row g-3 justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-6">
			<div class="card">
				<div class="card-body">
				<div class="js-chart-wrapper">
					 <div id="account_chart" style="width: 100%; height: 350px;"></div>
					</div>
				</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-6">
		<div class="ps-activity-wrapper">
				<div class="card">
				<div class="card-header">
				<h1 class="title">
					<span class="icon"><i class="bi bi-journal-album"></i></span>
					{{ trans('HOMEPAGE::home.'.ACCOUNT_JOURNAL_NAME) }}
				</h1>
			<a class="btn homepage-card-btn" href="#">
				{{ __('HOMEPAGE::home.view')}} 
				<span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
				</a>
				</div>
				<div class="card-body">
				<div class="alert-wrapper">
					<div class="table table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th>
							{{ trans('HOMEPAGE::home.account name') }}
							</th>
							<th>
							{{ trans('HOMEPAGE::home.account number') }}
							</th>
							<th>
							{{ trans('HOMEPAGE::home.transaction') }}
							</th>
							<th>
							{{ trans('HOMEPAGE::home.debit') }} (Dr)
							</th>
							<th>
							{{ trans('HOMEPAGE::home.credit') }} (Cr)
							</th> 
							</tr>
						</thead>
					<tr>
						<td>Bank transfer</td>
						<td>217282279292</td>
						<td>$80.00 received on 28-9-2020</td>
						<td>$80.00</td>
						<td>$80.00</td>
						</tr>
					</table>
					</div>
					</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
		
		
</div>
</section>

@endsection

@section('javascript')
<script type="text/javascript" src="{{ asset('/vendor/homepage/js/homepage.js')}}"></script>
<script type="text/javascript" src="{{ asset('/vendor/homepage/js/chart.js')}}"></script>
@endsection


