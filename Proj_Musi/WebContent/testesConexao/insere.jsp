<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>inserir</title>
</head>

<body>
		<%
			String nome = request.getParameter("nomeInsere");
			String dt = request.getParameter("dtInsere");
		%>
		<h1>
		<%
			out.println(nome);
		//response.sendRedirect("testePgForm.jsp");
		%>
	</h1>
	<br>
	<h1>
		<%
			out.println(dt);
		//response.sendRedirect("testePgForm.jsp");
		%>
	</h1>
</body>
</html>