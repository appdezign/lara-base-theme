<h6 class="mb-8">
	<div class="d-none text-dark py-8 d-lg-block">Socials</div>
	<a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-8"
	   data-bs-toggle="collapse">Socials</a>
</h6>

<div id="social-links" class="collapse d-lg-block" data-bs-parent="#footer-links">
	<ul class="nav flex-column mb-8 mb-lg-0">

		@if(isset($settngz->company_facebook_account) && $settngz->company_facebook_account)
			<li class="nav-item">
				<a class="nav-link d-inline-block px-0 pt-4 pb-8"
				   href="https://www.facebook.com/{{ $settngz->company_facebook_account }}"
				   target="_blank">
					Facebook
				</a>
			</li>
		@endif

		@if(isset($settngz->company_instagram_account) && $settngz->company_instagram_account)
			<li class="nav-item">
				<a class="nav-link d-inline-block px-0 pt-4 pb-8"
				   href="https://www.instagram.com/{{ $settngz->company_instagram_account }}"
				   target="_blank">
					Instagram
				</a>
			</li>
		@endif

		@if(isset($settngz->company_twitter_account) && $settngz->company_twitter_account)
			<li class="nav-item">
				<a class="nav-link d-inline-block px-0 pt-4 pb-8"
				   href="https://twitter.com/{{ $settngz->company_twitter_account }}"
				   target="_blank">
					Twitter
				</a>
			</li>
		@endif

		@if(isset($settngz->company_linkedin_account) && $settngz->company_linkedin_account)
			<li class="nav-item">
				<a class="nav-link d-inline-block px-0 pt-4 pb-8"
				   href="https://www.linkedin.com/in/{{ $settngz->company_linkedin_account }}"
				   target="_blank">
					LinkedIn
				</a>
			</li>
		@endif

	</ul>
</div>