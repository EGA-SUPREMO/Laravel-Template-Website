<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
        	<form class="form-contact-us" method="post" action="#">
        		@csrf
				<div class="form-group">
					<label for="name"></label>
					<input type="text" class="form-control" id="name" name="name" aria-describedby="name-help" required placeholder="">
                    <small id="name-help" class="form-text text-muted"></small>
                    
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
				<div class="form-group">
					<label for="email"></label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required placeholder="">
					<small id="email-help" class="form-text text-muted"></small>
                    
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<div class="form-group">
					<label for="body"></label>
					<textarea class="form-control" rows="5" id="body" name="body" aria-describedby="body-help" required placeholder=""></textarea>
					<small id="body-help" class="form-text text-muted"></small>
                    
                    @error('body')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<br>
				<button type="submit" class="btn btn-primary" name="save">Enviar</button>
            </form> 
        </div>
    </div>
</div>
