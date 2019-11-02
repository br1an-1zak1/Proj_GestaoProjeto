package controller;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import model.DAO.DaoProfessor;
import model.entidade.Login;
import model.entidade.Professor;

@WebServlet("/ControllerLogin")
public class ControllerLogin extends HttpServlet {
	private static final long serialVersionUID = 1L;

    public ControllerLogin() {
        super();

    }

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String botao = request.getParameter("loga");
		if(botao.equals(botao)) {
			//requests do form
			String email = request.getParameter("email");
			String senha = request.getParameter("senha");
			//interliga controler com entidade
			Login l = new Login();
			l.setEmail(email);
			l.setSenha(senha);

			//executa a inserção
			DaoProfessor daoProf = new DaoProfessor();
			if(daoProf.validar(l)) {
				response.sendRedirect("testesConexao/sucesso.jsp");
			}else {
				response.sendRedirect("testesConexao/erro.jsp");
			}
		}
		
	}

}
