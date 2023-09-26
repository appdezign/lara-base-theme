@if(isset($settngz->google_tagmanager_id) && strlen($settngz->google_tagmanager_id) > 4)

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ $settngz->google_tagmanager_id }}"
	                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

@endif
