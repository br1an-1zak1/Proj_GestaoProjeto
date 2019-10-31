package controller;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import model.DAO.DaoProfessor;
import model.entidade.Professor;

@WebServlet("/ControllerProfessor")
public class ControllerProfessor extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public ControllerProfessor() {
        super();
   
    }

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		String botao = request.getParameter("inserir");
		if(botao.equals(botao)) {
			//requests do form
			String nome = request.getParameter("nomeInsere");
			String dt_nasc = request.getParameter("dtInsere");
			String cpf = request.getParameter("cpfInsere");
			String curso = request.getParameter("cursoInsere");
			//interliga controler com entidade
			Professor p = new Professor();
			p.setNome(nome);
			p.setDt_nasc(dt_nasc);
			p.setCpf(cpf);
			p.setCurso(curso);
			//executa a inserção
			DaoProfessor daoProf = new DaoProfessor();
			if(daoProf.insere(p)) {
				response.sendRedirect("testesConexao/sucesso.jsp");
			}else {
				response.sendRedirect("testesConexao/erro.jsp");
			}
		}
	}

}
