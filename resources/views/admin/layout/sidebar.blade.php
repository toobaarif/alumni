<div class="deznav">
	<div class="deznav-scroll">

		<ul class="metismenu" id="menu">
			<li class="menu-title">BBSUL Alumni</li>

			{{-- Check if user role is 1 --}}
			@if(Auth::user()->user_role == 1)
				<li>
					<a class="has-arrow" href="{{ route('admin.dashboard') }}" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/alumnis') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M10.986 14.0673C7.4407 14.0673 4.41309 14.6034 4.41309 16.7501C4.41309 18.8969 7.4215 19.4521 10.986 19.4521C14.5313 19.4521 17.5581 18.9152 17.5581 16.7693C17.5581 14.6234 14.5505 14.0673 10.986 14.0673Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M10.986 11.0054C13.3126 11.0054 15.1983 9.11881 15.1983 6.79223C15.1983 4.46564 13.3126 2.57993 10.986 2.57993C8.65944 2.57993 6.77285 4.46564 6.77285 6.79223C6.76499 9.11096 8.63849 10.9975 10.9563 11.0054H10.986Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Alumnis</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/departments') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M15.8381 12.7317C16.4566 12.7317 16.9757 13.2422 16.8811 13.853C16.3263 17.4463 13.2502 20.1143 9.54009 20.1143C5.43536 20.1143 2.10834 16.7873 2.10834 12.6835C2.10834 9.30245 4.67693 6.15297 7.56878 5.44087C8.19018 5.28745 8.82702 5.72455 8.82702 6.36429C8.82702 10.6987 8.97272 11.8199 9.79579 12.4297C10.6189 13.0396 11.5867 12.7317 15.8381 12.7317Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M19.8848 9.1223C19.934 6.33756 16.5134 1.84879 12.345 1.92599C12.0208 1.93178 11.7612 2.20195 11.7468 2.5252C11.6416 4.81493 11.7834 7.78204 11.8626 9.12713C11.8867 9.5459 12.2157 9.87493 12.6335 9.89906C14.0162 9.97818 17.0914 10.0862 19.3483 9.74467C19.6552 9.69835 19.88 9.43204 19.8848 9.1223Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Departments</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/programs') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.4065 14.8714H7.78821" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path d="M14.4065 11.0338H7.78821" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path d="M10.3137 7.2051H7.78827" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M14.5829 2.52066C14.5829 2.52066 7.54563 2.52433 7.53463 2.52433C5.00463 2.53991 3.43805 4.20458 3.43805 6.74374V15.1734C3.43805 17.7254 5.01655 19.3965 7.56855 19.3965C7.56855 19.3965 14.6049 19.3937 14.6168 19.3937C17.1468 19.3782 18.7143 17.7126 18.7143 15.1734V6.74374C18.7143 4.19174 17.1349 2.52066 14.5829 2.52066Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Programs</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/event-form') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3.09277 9.40427H20.9167" stroke="#130F26" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M16.442 13.3097H16.4512" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
								<path d="M12.0045 13.3097H12.0137" stroke="#130F26" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M7.55769 13.3097H7.56695" stroke="#130F26" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M16.442 17.1962H16.4512" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
								<path d="M12.0045 17.1962H12.0137" stroke="#130F26" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M7.55769 17.1962H7.56695" stroke="#130F26" stroke-width="1.5"
									stroke-linecap="round" stroke-linejoin="round" />
								<path d="M16.0438 2V5.29078" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
								<path d="M7.96564 2V5.29078" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round" />
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M16.2383 3.57922H7.77096C4.83427 3.57922 3 5.21516 3 8.22225V17.2719C3 20.3263 4.83427 22 7.77096 22H16.229C19.175 22 21 20.3546 21 17.3475V8.22225C21.0092 5.21516 19.1842 3.57922 16.2383 3.57922Z"
									stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Events</span>
					</a>
				</li>
			@elseif(Auth::user()->user_role == 0)
				<li>
					<a class="has-arrow" href="{{ route('admin.dashboard') }}" aria-expanded="false">
						<div class="menu-icon">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="{{ url('/profile') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M14.4065 14.8714H7.78821" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path d="M14.4065 11.0338H7.78821" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path d="M10.3137 7.2051H7.78827" stroke="#888888" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M14.5829 2.52066C14.5829 2.52066 7.54563 2.52433 7.53463 2.52433C5.00463 2.53991 3.43805 4.20458 3.43805 6.74374V15.1734C3.43805 17.7254 5.01655 19.3965 7.56855 19.3965C7.56855 19.3965 14.6049 19.3937 14.6168 19.3937C17.1468 19.3782 18.7143 17.7126 18.7143 15.1734V6.74374C18.7143 4.19174 17.1349 2.52066 14.5829 2.52066Z"
									stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</div>
						<span class="nav-text">Profile</span>
					</a>
				</li>


			@endif
		</ul>


		<div class="help-desk">
			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<button class="btn btn-primary" type="submit">Logout</button>
			</form>
		</div>
	</div>
</div>