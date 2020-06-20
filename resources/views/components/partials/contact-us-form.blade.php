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
					<input type="text" class="form-control" id="name" name="name" required placeholder="Por favor escribe tu nombre">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required placeholder="Por favor escribe tu email">
				</div>
				<div class="form-group">
					<label for="body">Mensaje</label>
					<textarea class="form-control" rows="5" id="body" name="body" placeholder="Escribe tu mensaje"></textarea>
				</div>
				<br>
				<button type="submit" class="btn btn-primary" name="save">Enviar</button>
            </form> 
        </div>
    </div>
</div>
