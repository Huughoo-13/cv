<article class="contenido">
	<form action="emails/enviar" method="post">
		<table>
			<tr>
				<td>
					<label for="dequien">De:</label>
				</td>
				<td>
					<input type="email" name="dequien" id="dequien">
				</td>
			</tr>
			<tr>
				<td>
					<label for="destinatario">Para:</label>
				</td>
				<td>
					<input type="email" name="destinatario" id="destinatario">
				</td>
			</tr>
			<tr>
				<td>
					<label for="asunto">Asunto:</label>
				</td>
				<td>
					<input type="text" name="asunto" id="asunto">
				</td>
			</tr>
			<tr>
				<td>
					<label for="mensaje">Mensaje:</label>
				</td>
				<td>
					<textarea name="mensaje" id="mensaje" cols="35" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="enviar" value="Enviar Email">
				</td>		
			</tr>
		</table>
	</form>
</article>