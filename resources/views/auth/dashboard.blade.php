@extends('app')
@section('content')
<main class="dashboard">
	<div class="dashboard-body">
		<div class="profile-picture">
			<img src="{{ $user_data['avatar_url'] ?? 'https://picsum.photos/200' }}" alt="profile picture">
		</div>
		<div class="profile-name">
			Account Name: {{ $user_data['name'] ?? '' }}
		</div>
		<div class="profile-username">
			Username: {{ $user_data['username'] ?? '' }}
		</div>
		<div class="profile-account-balance">
			Account Balace: <span class="balance">{{ $user_data['account_balance'] ?? '' }}</span>
		</div>
		<div class="profile-action-btns">
			<button type="button" class="btn btn-success">
				Deposit
			</button>
			<button type="button" class="btn btn-dark">
				Withdraw
			</button>
			<button type="button" class="btn btn-warning">
				Transfer
			</button>
		</div>
		<div class="profile-transactions">
			<div class="transaction-header">
				Transaction History
			</div>
			<div class="transaction-table">
				<div class="row">
					<div class="col-3 transaction-table-header">
						Date
					</div>
					<div class="col-3 transaction-table-header">
						Amount
					</div>
					<div class="col-3 transaction-table-header">
						Type
					</div>
					<div class="col-3 transaction-table-header">
						Remarks
					</div>
				</div>
				<div class="row">
					<div class="col-3 transaction-table-body">
						20/12/2021
					</div>
					<div class="col-3 transaction-table-body">
						5000
					</div>
					<div class="col-3 transaction-table-body">
						Debit
					</div>
					<div class="col-3 transaction-table-body">
						ATM
					</div>
				</div>
				<div class="row dark">
					<div class="col-3 transaction-table-body">
						20/12/2021
					</div>
					<div class="col-3 transaction-table-body">
						5000
					</div>
					<div class="col-3 transaction-table-body">
						Credit
					</div>
					<div class="col-3 transaction-table-body">
						Transfer
					</div>
				</div>
				<div class="row">
					<div class="col-3 transaction-table-body">
						19/12/2021
					</div>
					<div class="col-3 transaction-table-body">
						25.00
					</div>
					<div class="col-3 transaction-table-body">
						Debit
					</div>
					<div class="col-3 transaction-table-body">
						SMS Charges
					</div>
				</div>
				<div class="row dark">
					<div class="col-3 transaction-table-body">
						20/12/2021
					</div>
					<div class="col-3 transaction-table-body">
						500000
					</div>
					<div class="col-3 transaction-table-body">
						Debit
					</div>
					<div class="col-3 transaction-table-body">
						NNPC POS/XX
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection