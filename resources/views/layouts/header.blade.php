<!-- <style>
	div.dataTables_wrapper div.dataTables_length select {
		width: auto;
		display: none;
	}

	table,
	td,
	th {
		border: 5px solid white;
		font-size: 12px;
	}

	thead {
		background-color: rgba(240, 90, 100, 0.1);
		padding-top: 15px;
		color: #38424C;
	}

	.table {
		--bs-table-hover-color: #38424C;
		--bs-table-hover-bg: #f2f2f2;
	}

	table {
		border-width: 0px;
	}

	.table> :not(caption)>*>* {
		border-bottom-width: 0px;
	}

	.page-item.active .page-link {
		background-color: #F05A64;
		border-color: #F05A64;
	}

	.btn-primary {
		background: #F05A64;
		border-color: #F05A64;
	}

	.btn-primary:hover {
		color: #fff;
		background-color: #F05A64;
		border-color: #F05A64;
	}

	.card-header {
		padding-top: 20px;
		border-bottom: 0px solid rgba(0, 0, 0, 0.125);
	}

	.bg-smp {
		background: #F05A64;
	}
</style> -->
@php
// $this->notificationsModel = model(NotificationModel::class);
// $notifications = $this->notificationsModel->get_unread_data();
$notifications = [];
// $counter = $this->notificationsModel->get_total_count();
$counter = 0;
@endphp

<header>
	<div class="page-wrapper">
		<div class="topbar d-flex align-items-center" style="background:#EFEFF7;">
			<nav class="navbar navbar-expand">
				<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
				</div>
				<h4 style="margin-left:10px;margin-top:20px;">{{ __('message.Hello'). ' '. ucfirst('User').' !' }}</h4>
				<div class="top-menu ms-auto">
					<!-- <ul class="navbar-nav align-items-center">

						@php
						$lang = session()->get('locale');
						empty($lang)?$lang ="en":$lang;
						$flag = ($lang == "de") ? "de.svg" : "uk.svg";
						@endphp

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="{{  url('public/assets/flags/1x1/' . $flag) }}" width="28" height="28" /> {{ strtoupper($lang) }}
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li class="{{ ($lang == 'en') ? 'active' : ''; }} language" id="en">
									<a class="btn_lang" data-id="en" style="cursor: pointer;padding:10px">
										<img src="{{ url('public/assets/flags/1x1/uk.svg'); }}" width="28" height="28" />
										<span style="padding-left: 10px;">{{ __('message.English') }}</span>
									</a>
								</li>
								<div class="dropdown-divider"></div>
								<li class="{{ ($lang == 'de') ? 'active' : ''; }}language" id="de">
									<a class="btn_lang" data-id="de" style="cursor: pointer;padding:10px">
										<img src="{{ url('public/assets/flags/1x1/de.svg'); }}" width="24" height="24" />
										<span style="padding-left: 10px;">{{ __('message.German') }}</span>
									</a>
								</li>
							</ul>
						</li>

						
					</ul> -->
				</div>
				<div class="user-box dropdown">
					<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="{{ !empty($admin['avatar_url']) ? url($admin['avatar_url'])  : url('public/assets/images/avatars/user.jpg'); }}" class="user-img" alt="user avatar">
						<div class="user-info ps-3">
							<p class="user-name mb-0">{{ ucfirst('User') }}</p>
							<p class="designation mb-0">{{ ucfirst('admin') }}</p>
						</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<!-- <li><a class="dropdown-item" href="{{ url('admin/edit-profile') }}"><i class="bx bx-user"></i><span>{{ __('message.Profile') }}</span></a>
						</li>
						<li><a class="dropdown-item" href="{{ url('admin/change-password') }}"><i class="bx bx-cog"></i><span>{{ __('message.Change Password'); }}</span></a>
						</li>
						<li>
							<div class="dropdown-divider mb-0"></div>
						</li> -->
						<li><a class="dropdown-item" href="{{ route('logout') }}"><i class='bx bx-log-out-circle'></i><span>{{ __('message.Logout') }}</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>



