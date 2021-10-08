<div class="feed">
	<form method="POST">
		<textarea name="msg" class="textareapost" placeholder="Escreva sua mensagem..."></textarea><br/>
		
		<input type="submit" value="Enviar Post" class="btn" />
		
	</form>

	<?php foreach($feed as $item): ?>
		<strong><?php echo $item['nome']; ?></strong> - <?php echo date('H:i', strtotime($item['data_post'])); ?><br/>
		<?php echo $item['mensagem']; ?>
		<hr/>
	<?php endforeach; ?>
</div>
<div class="rightside">
	<h4 style="text-align:center; font-size:22px; color:blue;">Relacionamentos</h4>
	<div class="rs_meio"><strong style="color:green;"><?php echo $qt_seguidores; ?><br/>Seguidores</strong></div>
	<div class="rs_meio"><strong><?php echo $qt_seguidos; ?><br/>Seguindo</strong></div>
	<div style="clear:both"></div>

	<h4 style="text-align:center; color:red;">Sugestões de amigos</h4>
	<table border="0" width="100%">
		<tr>
			<td width="70%"></td>
			<td></td>
		</tr>
		
		<?php foreach($sugestao as $usuario): ?>
			<tr>
				 <td width="80%"><a href="/twitter/home/pager/<?php echo $usuario['id']; ?>"><?php echo $usuario['nome']; ?></a></td>
				<td>
					<?php if($usuario['seguido'] == '0'): ?>
						<a href="/twitter/home/seguir/<?php echo $usuario['id']; ?>">Seguir</a>
					<?php else: ?>
						<a href="/twitter/home/deseguir/<?php echo $usuario['id']; ?>">Deseguir</a>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
	
	</table>
</div>