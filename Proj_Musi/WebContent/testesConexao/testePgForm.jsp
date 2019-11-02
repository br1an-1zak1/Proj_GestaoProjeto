<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<form action="../ControllerLogin" method="post">
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
	
		<input type="submit" name="loga" value="botao">
		<!--/*
			String email = request.getParameter("email");
			String senha = request.getParameter("senha");
			
			if(email !=null && senha!=null && !email.isEmpty() && !email.isEmpty()){
				session.setAttribute("email", email);
				session.setAttribute("senha", senha);
				response.sendRedirect("testePgAdmin.jsp");
			}
			
			String msgErro = (String) session.getAttribute("mensagem");
			*/-->
	</form>
	
	<form action="../ControllerProfessor" method="post">
		<label>
			Nome: <br>
			<input type="text" name="nomeInsere">
		</label>
		<br>
		<label>
			Nasc: <br>
			<input type="text" name="dtInsere">
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
		
		<input type="submit" name="inserir" value="Inserir">
	</form>
</body>
</html>