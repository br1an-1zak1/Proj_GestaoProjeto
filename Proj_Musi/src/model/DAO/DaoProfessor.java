package model.DAO;

import model.banco.Oracle;
import model.entidade.Professor;

public class DaoProfessor {
	private Oracle oracle;
	
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
}
