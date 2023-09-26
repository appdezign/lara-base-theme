<section class="module-sm">
	<div class="container">

		<div class="row">

			<div class="col-12 main-content">

				{{-- Page Title --}}
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="page-title mb-48">
							<h1 class="mb-2 mb-md-0">Zoekresultaten</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-8 offset-lg-2">

						@if($data->singleEntity)

							{{ html()->form('GET', route('special.search.modresult', ['module' => $data->singleEntity->getEntityKey()]))
								->attributes(['accept-charset' => 'UTF-8'])
								->open() }}

							<div class="row form-group">
								<div class="col-sm-10">
									{{ html()->text('keywords', $data->keywords)->class('form-control') }}
								</div>
								<div class="col-sm-2">
									{{ html()->button('Go', 'submit')->class('btn btn-primary save-button') }}
								</div>
							</div>

							{{ html()->form()->close() }}

						@else

							{{ html()->form('GET', route('special.search.result'))
								->attributes(['accept-charset' => 'UTF-8'])
								->open() }}

							<div class="row form-group">
								<div class="col-sm-10">
									{{ html()->text('keywords', $data->keywords)->class('form-control') }}
								</div>
								<div class="col-sm-2">
									{{ html()->button('Go', 'submit')->class('btn btn-primary save-button') }}
								</div>
							</div>

							{{ html()->form()->close() }}

						@endif

						@foreach($data->results as $entity_key => $ent)

							@if($ent->objects->count() > 0)

								<div class="row">
									<div class="col-sm-9 offset-sm-3">
										<h2 class="mb-24 mt-48">
											{{ ucfirst(_lanq('lara-' . $ent->entity->getModule() . '::' . $entity_key . '.entity.entity_title')) }}
										</h2>
									</div>
								</div>

								@foreach($ent->objects as $result)

									<div class="row pt-20 pb-20" style="border-bottom:solid 1px #eee;">
										<div class="col-sm-3">
											@if($result->hasFeatured())
												<img data-src="{{ _cimg($result->featured->filename, 180, 180) }}"
												     alt="{{ $result->featured->image_alt }}"
												     title="{{ $result->featured->image_title }}"
												     width="180" height="180" class="lazyload"/>
											@else
												{!! Theme::img('images/logo@2x.png', 'alt', 'brand', ['width' => '480']) !!}
											@endif
										</div>
										<div class="col-sm-9">

											<h4>
												<a href="{{ $result->url  }}">{{ $result->title }}</a>
											</h4>
											@if(isset($result->body) && !empty($result->body))
												<p>{!! substr(strip_tags($result->body),0,150) !!} ...</p>
											@elseif(isset($result->lead) && !empty($result->lead))
												<p>{!! substr(strip_tags($result->lead),0,150) !!} ...</p>
											@endif
											<a href="{{ $result->url  }}">lees meer</a>

										</div>
									</div>

								@endforeach

								<hr>

							@endif

						@endforeach

					</div>
				</div>

			</div>

		</div>

	</div>
</section>


