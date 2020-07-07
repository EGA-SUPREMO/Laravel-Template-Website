<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            {{ __('contact-form.card-header') }}
        </div>
        <div class="card-body">
        	<form class="form-contact-us" method="post" action="#">
        		@csrf
				<div class="form-group">
					<label for="name">{{ __('contact-form.name') }}</label>
					<input type="text" class="form-control" id="name" name="name" aria-describedby="name-help" required placeholder="{{ __('contact-form.name-placeholder') }}">
                    <small id="name-help" class="form-text text-muted">{{ __('contact-form.name-helper') }}</small>
                    
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
				<div class="form-group">
					<label for="email">{{ __('contact-form.email') }}</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required placeholder="{{ __('contact-form.email-placeholder') }}">
					<small id="email-help" class="form-text text-muted">{{ __('contact-form.email-helper') }}</small>
                    
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<div class="form-group">
					<label for="body">{{ __('contact-form.body') }}</label>
					<textarea class="form-control" rows="5" id="body" name="body" aria-describedby="body-help" required placeholder="{{ __('contact-form.body-placeholder') }}"></textarea>
					<small id="body-help" class="form-text text-muted">{{ __('contact-form.body-helper') }}</small>
                    
                    @error('body')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<br>
				<button type="submit" class="btn btn-primary" name="save">{{ __('contact-form.send-button') }}</button>
            </form> 
        </div>
    </div>
</div>
