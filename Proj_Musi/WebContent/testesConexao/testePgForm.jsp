<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<form action="testePgAdmin.jsp" method="post">
		<label>
			Email: <br>
			<input type="email" name="email">
		</label>
		<br>
		
		<label>
			Senha: <br>
			<input type="text" name="senha">
		</label>
		<br>
		
		<input type="submit" value="Confirme">
	</form>
	
	<form action="testePgForm.jsp" method="post">
		<label>
			Nome: <br>
			<input type="email" name="emailInsere">
		</label>
		<br>
		<label>
			Nasc: <br>
			<input type="date" name="dtNascInsere">
		</label>
		<br>
		<label>
			cpf: <br>
			<input type="text" name="cpfInsere">
		</label>
		<br>
		<label>
			Curso: <br>
			<input type="text" name="cursoInsere">
		</label>
		<br>
		
		<input type="submit" value="confirme">
	</form>
</body>
</html>