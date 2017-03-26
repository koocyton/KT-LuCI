<popup-title style="display:none;" class="popup-title">管理员 {{ $manager->account }}</popup-title>

<div class="container" style="width:800px;">
<form action="/manager/{{ $manager->id }}/update" enctype="application/x-www-form-urlencoded" method="post">
	<table class="">
		<tbody>

			<tr>
				<td style="width:90px;">
					<div class="form-group">　ID：</div>
				</td>
				<td>
					<div class="form-group">
						<input type="password" style="position:absolute;top:-999px;"/>
						{{ $manager->id }}
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">账　号：</div>
				</td>
				<td>
					<div class="form-group">
						{{ $manager->account }}
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">用户名：</div>
				</td>
				<td>
					<div class="form-group form-tags">
	  					<input type="text" name="username" class="form-control" value="{{ $manager->username }}" autocomplete="off" style="width:400px">
					</div>
				</td>
			</tr>

			<tr>
				<td style="width:80px;">
					<div class="form-group">状　态：</div>
				</td>
				<td>
					<div class="form-group btn-group" data-toggle="buttons">
						<label class="btn btn-sm btn-default <?=empty($manager->deleted_at) ? 'active' : '';?>">
							<input type="radio" name="status" value="0" autocomplete="off" <?=empty($manager->deleted_at) ? 'checked' : '';?>> 激活
						</label>
						<label class="btn btn-sm btn-default <?=!empty($manager->deleted_at) ? 'active' : '';?>">
							<input type="radio" name="status" value="1" autocomplete="off" <?=!empty($manager->deleted_at) ? 'checked' : '';?>> 禁用
						</label>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">密　码：</div>
				</td>
				<td>
					<div class="form-group">
						<input type="password" name="_password" class="form-control" autocomplete="off" style="width:400px">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">分　组：</div>
				</td>
				<td>
					<div class="form-group form-tags">
						<input type="text" name="groupings" value="{{ $manager->groupings }}" tags-data="{{ $groupings }}" autocomplete="off" class="tags-input" multiple>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">创　建：</div>
				</td>
				<td>
					<div class="form-group">
						{{ $manager->created_at }}
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">最　近：</div>
				</td>
				<td>
					<div class="form-group">
						{{ $manager->updated_at }}
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">Token：</div>
				</td>
				<td>
					<div class="form-group">
						{{ $manager->token }}
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group">Secret：</div>
				</td>
				<td>
					<div class="form-group">
						{{ $manager->token_secret }}
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group"></div>
				</td>
				<td>
					<div class="form-group">
						<label>
      						<input type="checkbox" name="re_token" value="1"> 更新 Token 和 Secret
      						，此用户会退出，需要重新登录
      					</label>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="form-group"></div>
				</td>
				<td>
					<div class="form-group">
						<button class="btn btn-success button-btn" style="width:120px;">保　存</button>
					</div>
				</td>
			</tr>

		</tbody>
	</table>
</form>
</div>
