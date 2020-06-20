<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Contactanos
        </div>
        <div class="card-body">
        	<form class="form-contact-us" method="post" action="#">
        		@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" class="form-control" id="name" name="name" aria-describedby="name-help" required placeholder="Por favor escribe tu nombre">
                    <small id="name-help" class="form-text text-muted">Para saber quien eres</small>
                    
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" required placeholder="Por favor escribe tu email">
					<small id="email-help" class="form-text text-muted">As`i podremos responderte</small>
                    
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
				</div>
				<div class="form-group">
					<label for="body">Mensaje</label>
					<textarea class="form-control" rows="5" id="body" name="body" aria-describedby="body-help" required placeholder="Escribe tu mensaje"></textarea>
					<small id="body-help" class="form-text text-muted">Describe que necesitas</small>
                    
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
