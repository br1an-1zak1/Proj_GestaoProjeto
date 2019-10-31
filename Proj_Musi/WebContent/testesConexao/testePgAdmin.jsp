<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="model.banco.Oracle" %>
<%@ page import="java.sql.ResultSet" %>
<%@ page import="java.sql.SQLException" %>
<%@ page import="java.sql.PreparedStatement" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<%
		String email = request.getParameter("email");
		String senha = request.getParameter("senha");
		Oracle ora = new Oracle();

		if (ora.carregaDriver() && 
				ora.conecta() && 
				ora.abreComando() ){
			String sql;
			sql = "SELECT * FROM login where email = '" + email + "'and senha = '" + senha + "'";
			ResultSet rs = ora.consulta(sql);
			try{
				if(rs.next()){
					do{
						out.println("<p>"+rs.getString(1) +"</p>");
						out.println("<p>"+rs.getString(2) +"</p>");
						out.println("<p>"+rs.getString(3) +"</p>");
						out.println("<p>"+rs.getString(4) +"</p>");
						out.println("<p> ----------------- </p>");
					} while (rs.next());
				/*	response.sendRedirect("testePgForm.jsp"); */
				}else{
					out.println("<p> Não existe este usuário. </p>");
				}
			}catch(SQLException ex){
				out.println("Erro:" + ex);
			}
		}
	%>
</body>
</html>