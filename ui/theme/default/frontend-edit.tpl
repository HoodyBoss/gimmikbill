{include file="sections/header.tpl"}

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading">{$_L['Edit_Frontend']}</div>
						<div class="panel-body">

						<form class="form-horizontal" method="post" role="form" action="{$_url}frontend/editfrontend" enctype="multipart/form-data">
							<input type="hidden" name="id" value="{$d['id']}">
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Title_Msg']}</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="title_msg" name="title_msg" value="{$d['title_msg']}" >
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Frontend_Logo_Img']}</label>
								<div class="col-md-10">
									<input type="file" class="form-control" id="logo_img" name="logo_img" >
									{if isset($d['logo_img'])} <img src="uploads/{$d['logo_img']}" width = "250px" height = "250px"> {/if}
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">{$_L['Frontend_BG_Img']}</label>
								<div class="col-md-10">
									<input type="file" class="form-control" id="bg_img" name="bg_img" >
									{if isset($d['bg_img'])} <img src="uploads/{$d['bg_img']}" width = "250px" height = "250px"> {/if}
								</div>
							</div>  
							
							<div class="form-group">
								<div class="col-lg-offset-2 col-lg-10">
									<button class="btn btn-success waves-effect waves-light" type="submit">{$_L['Save']}</button>
									Or <a href="{$_url}frontend/frontend">{$_L['Cancel']}</a>
								</div>
							</div>
						</form>
				
					</div>
				</div>
			</div>
		</div>

{include file="sections/footer.tpl"}
