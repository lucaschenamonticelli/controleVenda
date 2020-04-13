<html>
<div class="container">
	<div class="row">
		<div class="col-12" id="conteudoLogin">
			<div id="login">
				<h3 class="text-center">Login</h3>
				<p class="mb-1">Email</p>
				<p>
					<input type="text" name="email" class="form-control">
				</p>
				<p class="mb-1">Senha</p>
				<p>
					<input type="password" name="senha" class="form-control">
				</p>
				<p>
					<button class="btn btn-primary w-100">Entrar</button>
				</p>
			</div>
		</div>
	</div>
</div>
</html>

<style>
	#conteudoLogin{
		display: flex;
		height: 100vh;
	}

	#login{
	    width: 300px;
	    margin: 0 auto;
	    padding: 20px;
	    border-radius: 5px;
	    box-shadow: 2px 2px 10px 2px #ccc;
	    align-self: center;
	}
</style>