{extends file=$conf->root_path|cat:"/templates/login.tpl"}

{block name=header}
{/block}
{block name=footer}
{/block}

{block name=content}
  <div class="container"> 
	  <h1 class="text-center">
		  <div class="line-small" >Panel logowania</div>
	  </h1>
  </div>

  <div class="container">
	  <div class="col-md-4 col-md-offset-4"> 
		  <div class="line-small ">
			  <form action="{$conf->action_root}login&date={$smarty.request.date}" 
							method="post" role="form">

				  <div class="form-group">
					  <label for="login">Login: </label> 
					  <input type="text" name="login" class="form-control" required> 
						<br />		
				  </div>

				  <div class="form-group">
					  <label for="password">Haslo: </label> 
					  <input type="password" name="password" class="form-control" required> 
						<br />
				  </div>

				  <input type="submit" value="Zatwierdz" class="btn btn-info btn-lg"/>   			

			  </form>
		  </div>
	  </div>
  </div>
{/block}