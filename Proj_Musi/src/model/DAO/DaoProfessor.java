package model.DAO;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import model.banco.Oracle;
import model.entidade.Login;
import model.entidade.Professor;

public class DaoProfessor {
	private Oracle oracle;
	Connection con; 
	PreparedStatement ps;
	ResultSet rs;
	int r = 0;
	
	public boolean insere(Professor p) {
		/* String sql = " EXECUTE INSERE_PROFESSORES('"
						+ p.getNome() + "',"
						+ "TO_DATE('" +p.getDt_nasc()+"', 'yyyy-mm-dd' ),'"
						+ p.getCpf() + "','"
						+ p.getCurso() + "'"
						+") ";  */
		
		String sql = "insert into professores(id_prof, nome, dt_nasc, cpf, curso) "
				+ "values(seq_professores.NEXTVAL, "
				+ "'"+ p.getNome() +"', " 
				+ "to_date('"+p.getDt_nasc()+"', 'dd-mm-yyyy'), "
				+ "'"+p.getCpf()+"', "
				+ "'"+p.getCurso()+"')";
		oracle = new Oracle();
		boolean retorno = false;
		if(oracle.carregaDriver() &&
			oracle.conecta() &&
			oracle.abreComando()
			) {
			if(oracle.modifica(sql)> 0) {
				retorno = true;
			}
		}
		return retorno;
	}
	
	public boolean login(Login login) {
        String sql = "SELECT * FROM Login WHERE login = ? AND senha = ?";
        try {
        	Oracle ora = new Oracle();
        	PreparedStatement stmt = ora.conecta(sql);
            stmt = ora.prepareStatement(sql);
            stmt.setString(1, login.getEmail());
            stmt.setString(2, login.getSenha());
            rs = ora.consulta(sql);
            if (rs.next()) {
                return true;
            }
        } catch (SQLException e) {
            JOptionPane.showMessageDialog(null, "ERRO!\n" + e);
        }
        return false;
    }
}
